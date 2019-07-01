<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect; 
use Session;
use App\attendance;
use App\employee_tbl;


class AttendController extends Controller
{
   public function all_attend(){



   
      $allemployee_info=DB::table('employee_tbl')
                        ->get();
        
      $manage_employee=view('manager.attendance_form')
                      ->with('all_employee_info',$allemployee_info);


 $session_data = session('manager_id');
     if ($session_data==null) {
       return Redirect::to('/manager');
     }
     else{
      
                      
      return view('manager.manager_dashboard')
      
                 ->with('allemp',$manage_employee);
     }



     

  

   }
    public function store_attendance(Request $request){



    $request->validate([
            'attendance'  => 'required'
           
           
        
    ]);




$date=$request->att_date;
$atn=DB::table('attendance')->where ('att_date',$date)->first();

if($atn)

{
Session::put('exception', 'Todays attendance already have taken ');
 return Redirect::to('/take_attendance'); 
}
else{
    
foreach ($request->employee_id as $id) {
	
	$data[]=["employee_id"=>$id,


	"attendance"=>$request->attendance[$id],
	"att_date"=>$request->att_date,
	"att_month"=>$request->att_month,
	"In_time"=>$request->in_time[$id],
	"Out_time"=>$request->out_time[$id],
  "Remark"=>$request->Remark[$id],

];
      }



}$att=DB::table('attendance')->insert($data);
if($att){
    $notification=array('message'=>'taken done','alert_type'=>'success');
return Redirect()->back()->with($notification);
}

   }


public function all_Attendance(){


$all_att=DB::table('attendance')->select('att_date')->groupBy('att_date')->get();

       
 $session_data = session('manager_id');
     if ($session_data==null) {
       return Redirect::to('/manager');
     }
     else{
      
                      
       return view('manager.all_attendance')
                      ->with('all_att',$all_att);
     }
     
     
      
               
     }




public function viewAttendance($att_date){

$data=DB::table('attendance')->where('att_date',$att_date)->get();
return view('manager.viewAttendance')->with( 'data',$data);
                  
                   
     }




     public function individualAttendance(){  

$data=DB::table('attendance')->select('employee_id')->groupBy('employee_id')->get();
return view('manager.individualAttendance')->with( 'data',$data);
      
     }        
                   
     


	public function individual_Attendance($employee_id){

$data=DB::table('attendance')->where('employee_id',$employee_id)->get();
return view('manager.individual_Attendance_view')->with( 'data',$data);
                  
                   
     }

     




   
}

