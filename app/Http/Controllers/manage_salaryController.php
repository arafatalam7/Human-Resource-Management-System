<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect; 
use Session;
use App\salary_details;
use App\employee_tbl;

class manage_salaryController extends Controller
{
	public function salary_form(){


		$allemployee_info=DB::table('employee_tbl')
       ->join('salary_details' , 'employee_tbl.employee_id','salary_details.employee_id')
                        ->get();


        
         return view('salary.manage_salary_form')
                      ->with('data',$allemployee_info);
     
 








	}




	public function salary_insert(Request $request){

    $request->validate([
            'over_time'  => 'required'
           
           
        
    ]);



$month=$request->salary_month;
$id=$request->employee_id;
$atn=DB::table('all_salary_table')->where ('salary_month',$month,'employee_id',$id)->first();

if($atn)

{
Session::put('exception', 'Salary  already have created for this month ');
 return Redirect::to('/manage_salary'); 
}
else{
  foreach ($request->employee_id as $id) {
  
  $data[]=["employee_id"=>$id,


  "salary_id"=>$request->salary_id[$id],
  "salary_month"=>$request->salary_month,
  "transportation_fee"=>$request->transportation_fee,
  "medical_fee"=>$request->medical_fee[$id],
  "over_time"=>$request->over_time[$id],
  "others"=>$request->others[$id],
 

];
      }



}$att=DB::table('all_salary_table')->insert($data);
if($att){
    $notification=array('message'=>'taken done','alert_type'=>'success');
return Redirect()->back()->with($notification);
}

   }




// 	$data=array();
     
//         $data['employee_id']=$request->employee_id;
//         $data['salary_id']=$request->salary_id;
//         $data['basic_salary']=$request->basic_salary;
//         $data['transportation_fee']= $request->transportation_fee;
        
//         $data['salary_month']= $request->salary_month;
//         $data['medical_fee']= $request->medical_fee;
//         $data['over_time']= $request->over_time;
//         $data['others']= $request->others;
//     
      
      

// $att=DB::table('all_salary_table')->insert($data);
// if($att){
//     $notification=array('message'=>'taken done','alert_type'=>'success');
// return Redirect()->back()->with($notification);
// }

//    }



	//single
 




public function month_wise_salary(){


$all_att=DB::table('all_salary_table')->select('salary_month')->groupBy('salary_month')->get();

       
 $session_data = session('manager_id');
     if ($session_data==null) {
       return Redirect::to('/manager');
     }
     else{
      
                      
       return view('salary.month_wise_salary')
                      ->with('all_att',$all_att);
     }
     
     
      }




public function view_salary_month_details($salary_month){

$data=DB::table('all_salary_table')->selectRaw('*, basic_salary +transportation_fee + medical_fee + others + over_time as total')->where('salary_month',$salary_month)
      ->get();


return view('salary.view_salary_month_details')->with( 'data',$data);
                  
                   
     }








    
}
