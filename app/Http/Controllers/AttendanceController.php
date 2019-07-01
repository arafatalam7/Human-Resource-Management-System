<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect; 
use Session;

class AttendanceController extends Controller
{
   

    //attendence//

    public function take_attendance(){
      $allemployee_info=DB::table('employee_tbl')
       ->join('departments' , 'employee_tbl.employee_department','departments.id')
                        ->get();
        
      $manage_employee=view('manager.attendance2_form')
                      ->with('all_employee_info',$allemployee_info);


 $session_data = session('manager_id');
     if ($session_data==null) 
     {
       return Redirect::to('/manager');
     }
     else{
      
                      
      return view('manager.manager_dashboard')
      
                 ->with('allemp',$manage_employee);
     }
     
}
  
   public function insert_attendance(Request $request){



$date=$request->att_date;
$atn=DB::table('attendance')->where ('att_date',$date)->first();

if($atn)

{
Session::put('exception', 'Todays attendance already have taken ');
 return Redirect::to('/take_attendance'); 
}
else{
    


$data=array();
     
        $data['employee_id']=$request->employee_id;
        $data['attendance']=$request->attend;
        $data['att_date']= $request->att_date;
        
        $data['att_month']= $request->att_month;
      
      

}$att=DB::table('attendance')->insert($data);
if($att){
    $notification=array('message'=>'taken done','alert_type'=>'success');
return Redirect()->back()->with($notification);
}

   }

}

//insert attendance//




