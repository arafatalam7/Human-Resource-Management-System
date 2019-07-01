<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;
use Session;
session_start();
class LeaveApplyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    return view('employee.leave_apply');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function leave_apply_list()
    {

        $leave_info=DB::table('leave_applies')
                        ->get();
        


     $session_data = session('admin_id');
     if ($session_data==null) {
       return Redirect::to('/admin');
     }
     else{
         
      return view('admin.leave_apply_list')
                      ->with('leave_info',$leave_info);
     }


  
}
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $data=array();
        
        $data['employee_id']=$request->employee_id;
        $data['leave_reason']= $request->leave_reason;
        $data['description']= $request->description;
        $data['leave_start']=$request->leave_start;
        $data['leave_end']=$request->leave_end;
        

    

        DB::table('leave_applies')->insert($data);
        Session::put('exception','Send Successfully!!');
        return Redirect::to('/leave_apply');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
