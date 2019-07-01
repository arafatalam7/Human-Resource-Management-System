<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class DevelopmentController extends Controller
{
     public function develop(){

     $develop_info=DB::table('employee_tbl')
                        ->where(['employee_department'=>2])
                        ->get();


   

        
      $manage_emp=view('admin.development')
                      ->with('develop_employee_info',$develop_info);
      return view('layout')
                 ->with('devlop',$manage_emp);

     

   }


    
}
