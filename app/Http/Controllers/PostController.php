<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Jenssegers\Agent\Agent;
use Spatie\GoogleCalendar\Event;

class PostController extends Controller
{
  public function createMeeting(Request $request){
  //dd($request->all());

    $dateTimeString = $request->date." ".$request->time.":00";
    $dueDateTime = Carbon::createFromFormat('Y-m-d H:i:s', $dateTimeString, 'Asia/Jakarta');
    date_default_timezone_set("Asia/Bangkok");
    // LIMIT FOR BEFORE DATE
    $strdate = strtotime($request->date);
    if ($strdate < strtotime(date('Ymd'))) {
      return redirect()->back()->with('errorBeforeDate', 'holiday')->withInput($request->all());
    }
    // TO MAKE LIMIT FOR HOLIDAY SATURDAY AND SUNDAY
    $dayname = date('l', $strdate);
    $lowercase = strtolower($dayname);
    if($lowercase == "saturday" || $lowercase == "sunday"){
      return redirect()->back()->with('holidayError', 'holiday')->withInput($request->all());
    }

    // TO GET DATA AND COUNT HOW MUCH MEETING IN ONE DAY.
    $data = DB::table('data_calendar')->where('tgl', $request->date);
    $count = $data->count();

    // LIMIT FOR HOW MUCH MEETING FOR A DAY
    if ($count >= 3) {
      return redirect()->back()->with('fullBooked', 'fullBooked')->withInput($request->all());
    }
    $arrRequest = explode(":", $request->time);
    $minutesReq = (int)$arrRequest[0] * 60 + (int)$arrRequest[1];
    $check = $data->get()->toArray();
    $reject = false;

    // LOGIC TO CHECK THE TIME IF THEY CHOOSE SAME TIME WITH OTHER.
    for($i= 0; $i< $count; $i++) {
      $selisih = 0;
      $hour = $check[$i]->jam;
      $arr = explode(":", $hour);
      $minutes = (int)$arr[0] * 60 + (int)$arr[1];
      if($minutesReq < $minutes){
        $selisih = $minutes - $minutesReq;

      } else{
        $selisih = $minutesReq - $minutes;
      }

      $reject = abs($selisih) < 120;
      if ($reject == true) {
        return redirect()->back()->with('fullBookedjam', 'fullBooked')->withInput($request->all());
      }
    }
    $city = ucwords(strtolower($request->city));

    $event = new Event;
    $numberPhone = replaceNumber($request->phone);

    // FOR ADD EVENT IN GOOGLE CALENDAR
    $event->name = 'Request Bertemu AE oleh '.$request->name." di Media Kagumi";
    $event->description = 'Hubungi untuk contact langsung:'.$numberPhone ;
    $event->startDateTime = $dueDateTime;
    $event->endDateTime = $dueDateTime->addHour(2);
    $event->save();

    $capcha = $request->input('g-recaptcha-response');

    $agent = new Agent();

    // LIMIT CAPCHA
    if ($capcha == null) {
      return redirect()->back()->with('errorCapcha', 'errorCapcha')->withInput($request->all());
    }
    if ($agent->isPhone()) {
        $screen = "Phone";
    } elseif ($agent->isTablet()) {
        $screen = "Tablet";
    } elseif ($agent->isDesktop()) {
        $screen = "Desktop";
    }
    //dd($request);
    // Initial value for Referensi
    $parent = 2;
    $origin = "Walk In";
    $campaign = "";
    if (!empty($request->ref )) {
      $parent = $request->ref ;
    }
    if (!empty($request->so )) {

      $origin =  strtolower($request->so);
    }
    if (!empty($request->campaign)) {
      $campaign = $request->campaign ;
    }
    $data = [
        'name' => $request->name,
        'email' => $request->email,
        'phone' => replaceNumber($request->phone),
        'whatsapp' => replaceNumber($request->phone),
        'status' => 'lead',
        'company'=> $request->company,
        'parent' => $parent,
        'ipaddress' => \Request::ip(),
        'device' => $agent->device(),
        'origin' => $origin,
        'campaign'=> $campaign,
        'kota'=>$city,
        // 'platform' => $agent->platform(),
        'desktop' => $screen,
        //'screen' => $screen,
        // 'version_platform' => $agent->version($agent->platform()),
        // 'browser' => $agent->browser(),
        // 'version_browser' =>  $agent->version($agent->browser()),
        // 'languages' => $agent->languages()[0],
        'created_at' =>  Carbon::now(),
    ];


    $userId = DB::table('clients')->insertGetId($data);
    $insertMeet= DB::table('client_input')->insertGetId([
        'client_id' => $userId,
        'tgl' => $request->date,
        'jam' => $request->time,
        'status' => 'meet',
        'paket' => $request->landing_enquiry_paket,
        'created_at'=> Carbon::now()
    ]);

    return redirect()->back()->with('successMsg', 'Success');
  }

  public function makeContactUs(Request $request){
      //dd($request->all());
      date_default_timezone_set("Asia/Bangkok");
      $agent = new Agent();

      if ($agent->isPhone()) {
          $screen = "Phone";
      } elseif ($agent->isTablet()) {
          $screen = "Tablet";
      } elseif ($agent->isDesktop()) {
          $screen = "Desktop";
      }
      $data = [
          'name' => $request->name,
          'email' => $request->email,
          'phone' => $request->input('landing-enquiry-idd').$request->phone,
          'whatsapp' => $request->input('landing-enquiry-idd').$request->phone,
          'status' => 'lead',
          'company'=> $request->company,
          'parent' => 2,
          'ipaddress' => \Request::ip(),
          'device' => $agent->device(),
          'origin' => 'Walk In',
          // 'platform' => $agent->platform(),
          'desktop' => $screen,
          //'screen' => $screen,
          // 'version_platform' => $agent->version($agent->platform()),
          // 'browser' => $agent->browser(),
          // 'version_browser' =>  $agent->version($agent->browser()),
          // 'languages' => $agent->languages()[0],
          'created_at' =>  Carbon::now(),
      ];
      $userId = DB::table('clients')->insertGetId($data);
      $insertContact = DB::table('client_input')->insertGetId([
        'client_id' => $userId,
        'message' => $request->message,
        'status' => 'contact',
        'created_at'=> Carbon::now()

      ]);
      return redirect()->back()->with('successContact', 'Success');
  }

}
