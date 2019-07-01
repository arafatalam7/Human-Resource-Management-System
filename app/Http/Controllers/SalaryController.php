<?php

namespace App\Http\Controllers;
use DB;
use App\employee_tbl;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect; 

class SalaryController extends Controller
{







  public function salarydetails(){


    return  view('admin.salarydetails');

  }


	public function salarydetails_store(Request $request)
  {
$request->validate([
            'employee_id'  => 'required|unique:salary_details',
            'transportation_fee'  => 'required',
            'medical_fee'  => 'required',
            'others'  => 'required'
        
    ]);

 $data=array();
     
        $data['employee_id']=$request->employee_id;
      
      
        $data['transportation_fee']= $request->transportation_fee;
        
     
        $data['medical_fee']= $request->medical_fee;
       
        $data['others']= $request->others;
    
      
      

$att=DB::table('salary_details')->insert($data);
if($att){
    $notification=array('message'=>'taken done','alert_type'=>'success');
return Redirect()->back()->with($notification);
}

   }


       
   
public function deparment_wise_othersalary()
{


       $dep_info=DB::table('salary_details')
                        ->get();


     $session_data = session('admin_id');
     if ($session_data==null) {
       return Redirect::to('/admin');
     }
     else{
          return view('admin.deparment_wise_othersalary')
                      ->with('all_dev_info',$dep_info);
     }
        
     
    
}


}
