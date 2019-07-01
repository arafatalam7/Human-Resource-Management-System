<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect; 
use Session;

class managerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
 public function manager_login_dashboard(Request $request)
    {
        //return view('admin.dashboard');
        $email=$request->manager_email;
        $password=md5($request->manager_password);
        $result =DB::table('manager_tbl')
        ->where('manager_email',$email)
        ->where('manager_password',$password)
        ->first();

    // echo "</pre>";
    // print_r($result);

        if ($result ) {
            Session::put('manager_email',$result->manager_email);
            Session::put('manager_id',$result->manager_id);
              return Redirect::to('/manager_dashboard');
            
           
        } 
        else{
            Session::put('exception','Email or Password Invalid');
            return Redirect::to('/manager');

        }
        
    }




    public function manager_dashboard(){



     $session_data = session('manager_id');
     if ($session_data==null) {
       return Redirect::to('/manager');
     }
     else{
        
         return view('manager.manager_dashboard');
     }
    
     

   }

    public function manager_logout()
    {
       Session::put('manager_name',null);
       Session::put('manager_id',null);
       
       
       return Redirect::to('/');
        
    }
       
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
