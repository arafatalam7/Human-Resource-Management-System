<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect; 
use Session;
session_start();

class AdminController extends Controller
{

   public function admin_dashboard(){
      
     
     $session_data = session('admin_id');
     if ($session_data==null) {
       return Redirect::to('/admin');
     }
     else{
         return view('admin.dashboard');
     }

   }
  //employee login part are here
  
  public function employee_dashboard(){
        
      $session_data = session('employee_id');
     if ($session_data==null) {
       return Redirect::to('/employee');
     }
     else{
         return view('employee.dashboard');
     }

      

   }

 //view profile part are here
 
   public function viewprofile(){
     $session_data = session('admin_id');
     if ($session_data==null) {
       return Redirect::to('/admin');
     }
     else{
      
      return view('admin.admin_view');
     }


   }
//seeting thats mean update password


   public function setting(){

             $session_data = session('admin_id');
     if ($session_data==null) {
       return Redirect::to('/admin');
     }
     else{
      
       return view('admin.setting');
     }
    

   }
//employee setting part are here

public function employee_setting(){
   $emp_id=Session::get('employee_id');
   $emp_description_view=DB::table('employee_tbl')
                      ->select('*')
                      ->where('employee_id',$emp_id)
                      ->first();
             
             // echo "</pre>";
             //  print_r($emp_description_view);  
             //   echo "</pre>";       
        
      $manage_description_std=view('employee.employee_setting')
                      ->with('emp_description_profile',$emp_description_view);
      return view('employee_layout')
                 ->with('emp_setting',$manage_description_std );
   }


//logout part
    public function logout()
    {
       Session::put('admin_name',null);
       Session::put('admin_id',null);
       
       
       return Redirect::to('/');
        
    }

//employee logout part are here

    public function employee_logout()
    {
       Session::put('employee_name',null);
       Session::put('employee_id',null);
       
       
       return Redirect::to('/');
        
    }



//adminlogindashboard for admin
     public function login_dashboard(Request $request)
    {
    	//return view('admin.dashboard');
        $email=$request->admin_email;
        $password=md5($request->admin_password);
        $result =DB::table('admin_tbl')
        ->where('admin_email',$email)
        ->where('admin_password',$password)
        ->first();

    // echo "</pre>";
    // print_r($result);

        if ($result ) {
            Session::put('admin_email',$result->admin_email);
            Session::put('admin_id',$result->admin_id);
              return Redirect::to('/admin_dashboard');
        	
           
        } 
        else{
            Session::put('exception','Email or Password Invalid');
            return Redirect::to('/');

        }
        
    }


//studentlogindashboard for admin
     public function employee_login_dashboard(Request $request)
    {
      //return view('admin.dashboard');
        $email=$request->employee_email;
        $password=md5($request->employee_password);
        $result =DB::table('employee_tbl')
        ->where('employee_email',$email)
        ->where('employee_password',$password)
        ->first();

     // echo "</pre>";
     // print_r($result);

        if ($result ) {
            Session::put('employee_email',$result->employee_email);
            Session::put('employee_id',$result->employee_id);
              return Redirect::to('/employee_dashboard');
          
           
        } 
        else{
            Session::put('exception','Email or Password Invalid');
            return Redirect::to('/employee');

        }
        
    }
 } 

