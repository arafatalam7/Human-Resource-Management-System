<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use APP\Http\Requests;
use Illuminate\Support\Facades\Redirect; 
use DB;
use Session;
session_start();

class AddemployeesController extends Controller
{
   
   public function add_employee(){


     $session_data = session('admin_id');
     if ($session_data==null) {
       return Redirect::to('/admin');
     }
     else{
      
   return view('admin.addemployee');
     }


   }

//employee save part are here

   public function save_employee(Request $request){




    $request->validate([
            'employee_email'  => 'unique:employee_tbl',
            'employee_phone'  => 'required|unique:employee_tbl|max:11',
            'nid'  => 'required|unique:employee_tbl|max:11'
           
        
    ]);
      $data=array();
        $data['employee_name']=$request->employee_name;
        $data['employee_designation']=$request->employee_designation;
        $data['employee_fathersname']= $request->employee_fathersname;
        $data['employee_mothersname']=$request->employee_mothersname;
        $data['employee_email']=$request->employee_email;
        $data['gender']=$request->gender;
        $data['nid']=$request->nid;
        $data['basic_salary']=$request->basic_salary;

        $data['employee_phone']=$request->employee_phone;
        $data['employee_address']=$request->employee_address;
        $data['employee_password']=md5($request->employee_password);
         $data['employee_dob']=$request->employee_dob;
         $data['employee_age']=$request->employee_age;
        $data['employee_joiningdate']=$request->employee_joiningdate;
        $data['employee_department']=$request->employee_department;
        $image=$request->file('employee_image');

    if ($image) {
       $image_name=str_random(20);
       $ext=strtolower($image->getClientOriginalExtension());
       $image_full_name=$image_name.'.'.$ext;
       $upload_path='image/';
       $image_url=$upload_path.$image_full_name;
       $success=$image->move($upload_path,$image_full_name);
       if ($success) {
         $data['employee_image']=$image_url;

            DB::table('employee_tbl')->insert($data);
            Session::put('exception','employee added successfully!!');
            return Redirect::to('/addemployee');
            
       }
    }
    $data['employee_image']='';
            DB::table('employee_tbl')->insert($data);
            Session::put('exception','employee added successfully!!');
            return Redirect::to('/addemployee');

   }


    public function employee_profile(){

        $employee_id=Session::get('employee_id');
        $employee_profile=DB::table('employee_tbl')
                      ->select('*')
                      ->where('employee_id',$employee_id)
                      ->first();
             
            // echo "</pre>";employee
            // print_r($student_profile);  
            //  echo "</pre>";       
        
      $manage_employee=view('employee.employee_view')
                      ->with('employee_profile',$employee_profile);
      return view('employee_layout')
                 ->with('emp_view',$manage_employee); 

   }
}
