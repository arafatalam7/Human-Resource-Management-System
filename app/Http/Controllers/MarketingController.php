<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use app\employee_tbl;
class MarketingController extends Controller
{
     public function marketing(){


     	 $marketing_info=DB::table('employee_tbl')
      ->join('departments','employee_tbl.employee_department','departments.id')  //for query builder
                        ->where(['employee_department'=>3])
                        ->get();

          // $marketing_info=DB::table('employee_tbl')
          //               ->where(['employee_department'=>3])
          //               ->get();


   

        
      $manage_marketing=view('admin.marketing')
                      ->with('marketing_employee_info',$marketing_info);
      return view('layout')
                 ->with('market',$manage_marketing);

   }
}
