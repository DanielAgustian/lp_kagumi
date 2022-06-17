<?php

namespace App\Http\Controllers;


use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Jenssegers\Agent\Agent;
use CRUDBooster;
use Image;
use Storage;

class DetailLeadController extends Controller
{
    //
    //function for detail leads page
    function detailLeadsPage($id){
      $client = DB::table('clients')
        ->join('client_input', 'clients.id', '=', 'client_input.client_id')
        ->where('clients.id' , '=', $id)
        ->select('clients.*', 'client_input.status as jenis', 'client_input.message as message')
        ->first();
      $activities = DB::table('activities')->where('client_id', $id)->orderby('id','desc')->get();
      $assign = DB::table('cms_users')->orderby('name', 'asc')->get();
      // dd($client);
      return view('cb.detail-leads', compact('client', 'activities', 'assign'));
    }
    // Function for Change Status Leads (Ex: dari leads -> potential etc.)
    function changeStatus(Request $request, $id){

      DB::table('clients')->where('id', '=', $id)->update([
        'status' => $request->status
      ]);
      return redirect()->back();
    }

    // Function for Update Detail Leads
    function updateDetail(Request $request, $id){
      DB::table('clients')->where('id', '=', $id)->update([
        'dob' => $request->don,
        'name' => $request->name,
        'email' => $request->email,
        'phone' => $request->phone,
        'whatsapp' => $request->phone,
        'address' => $request->alamat,
        'kota' => $request->kota,
        'company' => $request->company,
      ]);
      DB::table('client_input')->where('client_id', '=', $id)->update([
        'message'=> $request->message
      ]);
      CRUDBooster::redirect('admin/detail-lead/' . $id,   'Data berhasil dirubah!', 'success');
      // return redirect()->back();
    }

    // Function untuk tambah comment di follow up
    function saveFollowUp(Request $request){
      $parent = DB::table('cms_users')->where('parent_id', '=', $request->parent_id);
      $jenis = " Update New Follow Up";

      if (!empty($request->bukti)) {
        // code...
        $image = $request->bukti;
        list($width, $height, $type, $attr) = getimagesize($image);
        $time = time();
        $imgName  = str_replace(" ","",$time."-".$image->getClientOriginalName());
        if($width>$height){
          $image_normal = Image::make($image)->widen(1200, function ($constraint)
          {
            $constraint->upsize();
          });
        }else{
          $image_normal = Image::make($image)->heighten(600, function ($constraint)
          {
            $constraint->upsize();
          });
        }

      //  $arrayName[] = $imgName;

        $image_thumb = Image::make($image)->fit(200, 200);
        $image_normal = $image_normal->stream();
        $image_thumb = $image_thumb->stream();

        Storage::disk('local')->put('uploads/'.$imgName, $image_normal->__toString());
        Storage::disk('local')->put('uploads/thumbnails/'.$imgName, $image_thumb->__toString());

      }
      $date = now();
      $next_date = date('Y-m-d',strtotime($date.'+ 3 weekdays'));
      DB::table('activities')->insert([
        'jenis' => $jenis,
        'activity' => $request->activity,
        'client_id' => $request->client_id,
        'user_id' => $request->parent_id,
        'bukti' => $imgName,
        'next_fu' => $next_date,
        'created_at' => now()
      ]);
      CRUDBooster::redirect('admin/detail-lead/' . $request->client_id,   'Berhasil Melakukan Follow Up!', 'success');
    }

    function assignLeads(Request $request){

      DB::table('clients')->where('id', '=', $request->client_id)->update([
        'parent'=>$request->new_assign
      ]);

      $next_date = date('Y-m-d',strtotime($date.'+ 3 weekdays'));

      $current = CRUDBooster::me()->name;
      $jenis = $current." Assign Leads";
      $old_name = DB::table('cms_users')->where('id', '=' , $request->old_assign)->first()->name;
      $new_name = DB::table('cms_users')->where('id', '=', $request->new_assign)->first()->name;
      $activity = $current." assigned leads from ".$old_name." to ".$new_name;
      DB::table('activities')->insert([
        'jenis' => $jenis,
        'activity' => $activity,
        'client_id' => $request->client_id,
        'user_id' => $request->new_assign,

        'next_fu' => $next_date,
        'created_at' => now()
      ]);
      CRUDBooster::redirect('admin/detail-lead/' . $request->client_id,   'Berhasil Melakukan Assign Leads!', 'success');
    }
}
