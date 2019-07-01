<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect; 
use Session;
use App\employee_tbl;
session_start();

class AllemployeesController extends Controller
{
    public function allemployee(){
      $allemployee_info=DB::table('employee_tbl')
       ->join('departments' , 'employee_tbl.employee_department','departments.id')
                        ->get();
        
      $manage_employee=view('admin.allemployee')
                      ->with('all_employee_info',$allemployee_info);


 $session_data = session('admin_id');
     if ($session_data==null) {
       return Redirect::to('/admin');
     }
     else{
      
                      
      return view('layout')
      
                 ->with('allemp',$manage_employee);
     }



     

  

   }


   

//student delete method are here

    public function employee_delete($employee_id){
     
       DB::table('employee_tbl')
          ->where('employee_id',$employee_id)
          ->delete();

          return Redirect::to('/allemployee');

   }
//student view part are here

 public function employeeview($employee_id){
     $emp_description_view=DB::table('employee_tbl')
                      ->select('*')
                      ->where('employee_id',$employee_id)
                      ->first();
             
            // echo "</pre>";
            // print_r($student_description_view);  
            //  echo "</pre>";       
        
      $manage_description_emp=view('admin.employee_view')
                      ->with('employee_description_profile',$emp_description_view);
      return view('layout')
                 ->with('view',$manage_description_emp);
   }
//employee edit page are here


    public function employee_edit($employee_id){
     
      $emp_description_view=DB::table('employee_tbl')
                      ->select('*')
                      ->where('employee_id',$employee_id)
                      ->first();
             
             // echo "</pre>";
             // print_r($emp_description_view);  
             //  echo "</pre>";       
        
      $manage_description_emp=view('admin.employee_edit')
                      ->with('employee_description_profile',$emp_description_view);
      return view('layout')
                 ->with('edit',$manage_description_emp);

   }

//update employee part are here

   public function employee_update(Request $request,$employee_id){

      $data=array();
      $data['employee_name']=$request->employee_name;
      $data['employee_designation']=$request->employee_designation;
      $data['employee_fathersname']=$request->employee_fathersname;
      $data['employee_mothersname']=$request->employee_mothersname;
      $data['employee_email']=$request->employee_email;
      $data['employee_phone']=$request->employee_phone;
      $data['employee_address']=$request->employee_address;
      $data['employee_password']=md5($request->employee_password);
      $data['employee_joiningdate']=$request->employee_joiningdate;

      DB::table('employee_tbl')
            ->where('employee_id',$employee_id)
            ->update($data);

        Session::put('exception', 'Employee update successfully');
        return Redirect::to('/allemployee');    




   }

//employee own update are here

    public function employee_own_update(Request $request){
      
   
      $employee_id=Session::get('employee_id');
      $data=array();      

      $data['employee_password']=md5($request->employee_password);
     

      DB::table('employee_tbl')
            ->where('employee_id',$employee_id)
            ->update($data);

        Session::put('exception', 'Employee update successfully');
        return Redirect::to('/employee_setting');    

   }






}
