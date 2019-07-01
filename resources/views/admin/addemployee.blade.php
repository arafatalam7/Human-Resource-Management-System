@extends('layout')
@section('content')

<div class="col-8">
                  <div class="card">
                      <div class="card-body">
                          <h2 class="card-title text-center" style="color:green; font-style:Bold;">Add Employee </h2>
                 

                          <p class=" alert-success"><?php
                              $exception=Session::get('exception');

                              if ($exception)
                                {
                                  echo $exception;
                                  Session::put('exception',null);
                                }
                              ?></p>
                             
                      

                          <form class="forms-sample" id="sform" method="post" action="{{URL::to('/save_employee')}}" onsubmit="return vform()" enctype="multipart/form-data">
                          	  {{ csrf_field() }}



                              @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

                            
                              <div class="form-group">

                                  <label for="example">Employee Name</label>
                                  <input type="text" class="form-control p-input" name="employee_name" " aria-describedby="emailHelp" placeholder="Enter Employee Name">
                              </div>
                           
                               <div class="form-group">
                                  <label for="example">Employee Father's name</label>
                                  <input type="text" class="form-control p-input" name="employee_fathersname" placeholder="employees_fathersname ">
                              </div>
                               <div class="form-group">
                                  <label for="example">Employee Mother's name</label>
                                  <input type="text" class="form-control p-input" name="employee_mothersname" placeholder="employees_mothersname ">
                              </div>

                                 <div class="form-group">
                                  <label for="exampleInputPassword1">Employee Department</label>
                                  <select class="form-control p-input" name="employee_department">
                                    <option value="1">Designing</option>
                                    <option value="2">Development</option>
                                    <option value="3">Marketing</option>
                                    <option value="4">Accounts</option>
                                  </select>
                              </div>
                                 <div class="form-group">
                                  <label for="example">Employee Designation</label>
                                  <input type="text" class="form-control p-input" name="employee_designation" placeholder="Employee Designation ">
                              </div>
                                <div class="form-group">
                                  <label for="example">Birthday</label>
                                  <input type="date" class="form-control p-input" name="employee_dob" placeholder="Birthday">
                              </div>
                              <div class="form-group">
                                  <label for="example">Employee Age</label>
                                  <input type="text" class="form-control p-input" name="employee_age" placeholder="employees_age">
                              </div>


                               <div class="form-group">
                                  <label for="example">Employee Email</label>
                                  <input type="email" class="form-control p-input" name="employee_email" placeholder="employees_email ">
                              </div>
                              <div class="form-group">
                                 <label for="example">Gender:</label><span>
                                  <span> <input type="radio" class="" name="gender" value="male" placeholder="gender " > Male.</span>
                                  <span> <input type="radio" class="" name="gender" value="female" placeholder="gender " > Female.</span>
                                  <span> <input type="radio" class="" name="gender" value="others" placeholder="gender " > Others.</span>

                              </div>
                               <div class="form-group">
                                  <label for="example">Employee NID</label>
                                  <input type="text" class="form-control p-input" name="nid" placeholder="nid ">
                              </div>


                               <div class="form-group">
                                  <label for="exampleInputPassword1">Employee Phone</label>
                                  <input type="text" class="form-control p-input" name="employee_phone" placeholder="employees_phone ">
                              </div>
                               <div class="form-group">
                                  <label for="">Employee Address</label>
                                  <input type="text" class="form-control p-input" name="employee_address" placeholder="employees_address ">
                              </div>
                               <div class="form-group">
                                  <label for="exampleInputPassword1">Employee Password</label>
                                  <input type="password" class="form-control p-input" name="employee_password" placeholder="employees_password ">
                              </div>

                               <div class="form-group">
                                  <label for="">Basic Salary</label>
                                  <input type="text" class="form-control p-input" name="basic_salary" placeholder="Salary ">
                              </div>
                             
                              <div class="form-group">
                                  <label>Upload file</label>
                                  <div class="row">
                                    <div class="col-12">
                                      <label for="exampleInputFile2" class="btn btn-outline-primary btn-sm"><i class="mdi mdi-upload btn-label btn-label-left"></i>Image</label>
                                      <input type="file" class="form-control-file" name="employee_image" id="exampleInputFile2" aria-describedby="fileHelp">
                                      <small id="fileHelp" class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
                                    </div>
                                  </div>
                              </div>
                               <div class="form-group">
                                  <label for="exampleInputPassword1">Joinng Date</label>
                                  <input type="date" class="form-control p-input" name="employee_joiningdate" placeholder="Joinng Date">
                              </div>
                             
                              <button type="submit" class="btn btn-success btn-block">Submit</button>
                          </form>

                               </div>
                  </div>
              </div>
@endsection