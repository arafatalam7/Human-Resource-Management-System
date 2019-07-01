<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use APP\Http\Requests;
use Illuminate\Support\Facades\Redirect; 
use DB;
use Session;
session_start();

class HolidayController extends Controller
{
     public function allholiday(){

       $allholiday_info=DB::table('holidays_tbl')
                        ->get();


                         $session_data = session('admin_id');
     if ($session_data==null) {
       return Redirect::to('/admin');
     }
     else{
      $manage_holiday=view('admin.allholiday')
                      ->with('all_holiday_info',$allholiday_info);
      return view('layout')
                 ->with('allholiday',$manage_holiday);
}
        
     

   }

    public function addholiday(){



                         $session_data = session('admin_id');
     if ($session_data==null) {
       return Redirect::to('/admin');
     }
     else{
      return view('admin.add_holiday');
}

     

   }
//teacher added part are heere


    public function saveholiday(Request $request){
      $data=array();
        $data['holiday_date']=$request->holiday_date;
        $data['holiday_title']=$request->holiday_title;
        $data['holiday_description']= $request->holiday_description;
        

    

        DB::table('holidays_tbl')->insert($data);
        Session::put('exception','Holiday Added Successfully!!');
        return Redirect::to('/addholiday');

   }


   public function holiday_delete($holiday_id){
     
       DB::table('holidays_tbl')
          ->where('holiday_id',$holiday_id)
          ->delete();

          return Redirect::to('/allholiday');

   }



}
