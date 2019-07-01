<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect; 
use Session;
session_start();

class logController extends Controller
{

//adminlogindashboard for admin
     public function log(Request $request)
    {
         $role=$request->role;
        //return view('admin.dashboard');
        // echo "</pre>";
    // print_r($result);

switch ($role) {
    case "admin":
        $email=$request->email;
        $password=md5($request->password);
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
        break;

    case "employee":
        $email=$request->email;
        $password=md5($request->password);
        $emp =DB::table('employee_tbl')
        ->where('employee_email',$email)
        ->where('employee_password',$password)
        ->first();

     // echo "</pre>";
     // print_r($result);

        if ($emp ) {
            Session::put('employee_email',$emp->employee_email);
            Session::put('employee_id',$emp->employee_id);
              return Redirect::to('/employee_dashboard');
          
           
        } 
        else{
            Session::put('exception','Email or Password Invalid');
            return Redirect::to('/');

        }
        break;
        
    case "manager":
       $email=$request->email;
        $password=md5($request->password);
        $mn =DB::table('manager_tbl')
        ->where('manager_email',$email)
        ->where('manager_password',$password)
        ->first();

    // echo "</pre>";
    // print_r($result);

        if ($mn) {
            Session::put('manager_email',$mn->manager_email);
            Session::put('manager_id',$mn->manager_id);
              return Redirect::to('/manager_dashboard');
            
           
        } 
        else{
            Session::put('exception','Email or Password Invalid');
            return Redirect::to('/');

        }
        break;
   
}
    

}
}


        


