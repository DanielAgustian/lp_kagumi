<?php

function set_none_navbar($uri, $output = ' d-none')
{
 if( is_array($uri) ) {
   foreach ($uri as $u) {
     if (Route::is($u)) {
       return $output;
     }
   }
 } else {
   if (Route::is($uri)){
     return $output;
   }
 }
}
function set_active_bar($uri, $output = ' active')
{
 if( is_array($uri) ) {
   foreach ($uri as $u) {
     if (Route::is($u)) {
       return $output;
     }
   }
 } else {
   if (Route::is($uri)){
     return $output;
   }
 }
}
function replaceNumber($whatsapp){

    $whatsapp = str_replace('-','',$whatsapp);
    $whatsapp = str_replace(' ','',$whatsapp);
    $whatsapp = str_replace(' ','',$whatsapp);
    $whatsapp = str_replace('.','',$whatsapp);
    $whatsapp = preg_replace("/[^0-9.]/", "", $whatsapp);
    $check_number = str_split($whatsapp);
    $new_number = "62";


    if($check_number[0]=='0'){
      foreach($check_number as $n => $number){
        if($n > 0){
          if($check_number[1]=='8'){
            $new_number .= $number;
          }else{
            //Alert::success('Silahkan coba lagi','Nomor Tidak Valid '.$whatsapp);
            //Return redirect()->back();
            //echo "ga bisa dibenerin nomor $isi->id <br>";
            $new_number = '-';

          }
        }
      }
    }else{
      if($check_number[0]=='8'){
        $new_number = "62".$whatsapp;
      }elseif($check_number[0]=='6'){
        $new_number = $whatsapp;
      }elseif($check_number[0]=='+'){
        foreach($check_number as $n => $number){
          if($n > 2){
              $new_number .= $number;
          }
        }
      }else{
        //Alert::success('Silahkan coba lagi','Nomor Tidak Valid '.$whatsapp);
        //Return redirect()->back();
        $new_number = '-';
        //echo "ga bisa dibenerin  $isi->id <br>";

      }
    }
    return $new_number;
}
