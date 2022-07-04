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

  $agent = new Agent();

      // LIMIT CAPCHA
    $capcha = $request->input('g-recaptcha-response');
    if ($capcha == null) {
      return redirect()->back()->with('errorCapcha', 'errorCapcha')->withInput($request->all());
    }
    if ($agent->isPhone()) {
        $screen = "Phone";
    } elseif ($agent->isTablet()) {
        $screen = "Tablet";
    } elseif ($agent->isDesktop()) {
        $screen = "Desktop";
    }else{
        $screen = "";
    }
    $data = [
          'name' => $request->name,
          'email' => $request->email,
          'phone' => '62'.$request->whatsapp,
          'whatsapp' => '62'.$request->whatsapp,
          'status' => 'lead',
          'company'=> $request->company,
          'parent' => 1,
          'ipaddress' => \Request::ip(),
          'device' => $agent->device(),
          // 'origin' => $origin,
          // 'campaign'=> $campaign,
          // 'kota'=>$city,
          // 'platform' => $agent->platform(),
          'desktop' => $screen,
          //'screen' => $screen,
          // 'version_platform' => $agent->version($agent->platform()),
          // 'browser' => $agent->browser(),
          // 'version_browser' =>  $agent->version($agent->browser()),
          // 'languages' => $agent->languages()[0],
          'created_at' =>  Carbon::now(),
      ];
      $message = "";
      if ($request->message) {
        $message = $request->message;
      }
      $userId = DB::table('clients')->insertGetId($data);
      $insertMeet= DB::table('client_input')->insertGetId([
          'client_id' => $userId,
          'status' => 'meet',
          'message' => $message,
          'created_at'=> Carbon::now()
      ]);
      return redirect()->back()->with('successMsg', 'Success');
  }

  public function makeContactUs(Request $request){
      //dd($request->all());
      date_default_timezone_set("Asia/Bangkok");
      $agent = new Agent();
      // dd($request->all());
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
          'phone' => '62'.$request->whatsapp,
          'whatsapp' => '62'.$request->whatsapp,
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
      return redirect()->back()->with('successMsg', 'Success');
  }

}
