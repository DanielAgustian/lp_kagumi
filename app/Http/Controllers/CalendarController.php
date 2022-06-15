<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\GoogleCalendar\Event;
use Illuminate\Support\Facades\DB;
class CalendarController extends Controller
{
    //
    public function getFutureEvent(){
      $events = Event::get();

      date_default_timezone_set('Asia/Jakarta');
      foreach ($events as $event) {
        // code...
        $time = strtotime($event->start->dateTime);
        $my_date = date("Y-m-d",$time);
        $my_time = date("H:i", $time);
        $data = [
          'name' => $event->summary,
          'tgl' => $my_date,
          'jam'=>$my_time,
        ];

        DB::table('data_calendar')->updateOrInsert($data);
      }

      return "Successfully Set Data";
    }
}
