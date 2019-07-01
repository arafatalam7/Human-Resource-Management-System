<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class DepartmentController extends Controller
{
     public function design(){

      $designer_info=DB::table('employee_tbl')
      ->join('departments' , 'employee_tbl.employee_department','departments.id')  //for query builder
                        ->where(['employee_department'=>1])
                        ->get();


   
  
     $session_data = session('admin_id');
     if ($session_data==null) {
       return Redirect::to('/admin');
     }
     else{
     $manage_emp=view('admin.designing')
                      ->with('design_employee_info',$designer_info);
      return view('layout')
                 ->with('design',$manage_emp);

     }

        
      
      

   }





   public function develop(){

     $develop_info=DB::table('employee_tbl')
      ->join('departments' , 'employee_tbl.employee_department','departments.id')  //for query builder
                        ->where(['employee_department'=>2])
                        ->get();


   
     $session_data = session('admin_id');
     if ($session_data==null) {
       return Redirect::to('/admin');
     }
     else{
      $manage_emp=view('admin.development')
                      ->with('devlop_employee_info',$develop_info);
      return view('layout')
                 ->with('devlop',$manage_emp);
}

     }

        
    



public function marketing(){

          $marketing_info=DB::table('employee_tbl')
      ->join('departments' , 'employee_tbl.employee_department','departments.id')
                        ->where(['employee_department'=>3])
                        ->get();


   
     $session_data = session('admin_id');
     if ($session_data==null) {
       return Redirect::to('/admin');
     }
     else{
     
      $manage_emp=view('admin.marketing')
                      ->with('marketing_employee_info',$marketing_info);
      return view('layout')
                 ->with('marketing',$manage_emp);
}

        

   }


   public function accounts(){



  $session_data = session('admin_id');
     if ($session_data==null) {
       return Redirect::to('/admin');
     }
     else{
        return view('admin.accounts');
     }
         

}
}