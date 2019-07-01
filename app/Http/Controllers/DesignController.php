<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect; 
use DB;

class DesignController extends Controller
{
    public function design(){

      // $designer_info=DB::table('employee_tbl')
      //                   ->where(['employee_department'=>1])
      //                   ->get();


  

      $designer_info=DB::table('employee_tbl')
      ->join('departments' , 'employee_tbl.employee_department','departments.id')  //for query builder
                        ->where(['employee_department'=>1])
                        ->get();

 $session_data = session('admin_id');
     if ($session_data==null) {
       return Redirect::to('/admin');
     }
     else{
           $manage_desin=view('admin.designing')
                      ->with('design_employee_info',$designer_info);
      return view('layout')
                 ->with('design',$manage_desin);
     }
        
    

      

   }


}
