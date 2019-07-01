@extends('layout')
@section('content')

<div class="col-12 col-lg-6 grid-margin">
                  <div class="card">
                      <div class="card-body">
                          <h2 class="card-title">update</h2>
                          <p class=" alert-success"><?php
                              $exception=Session::get('exception');

                              if ($exception)
                                {
                                  echo $exception;
                                  Session::put('exception',null);
                                }
                              ?></p>
                          <form class="forms-sample" method="post" action="{{URL::to('/update_employee',$employee_description_profile->employee_id)}}" >
                          	  {{ csrf_field() }}
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Employee Name</label>
                                  <input type="text" class="form-control p-input" name="employee_name" " aria-describedby="emailHelp"
                                   value="{{($employee_description_profile->employee_name)}}">
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputPassword1">Employee Designation</label>
                                  <input type="text" class="form-control p-input" name="employee_designation" value="{{($employee_description_profile->employee_designation)}}" >
                              </div>
                               <div class="form-group">
                                  <label for="exampleInputPassword1">Employee Father's name</label>
                                  <input type="text" class="form-control p-input" name="employee_fathersname" value="{{($employee_description_profile->employee_fathersname)}}">
                              </div>
                               <div class="form-group">
                                  <label for="exampleInputPassword1">Employee Mother's name</label>
                                  <input type="text" class="form-control p-input" name="employee_mothersname" value="{{($employee_description_profile->employee_mothersname)}}" >
                              </div>
                               <div class="form-group">
                                  <label for="exampleInputPassword1">Employee Email</label>
                                  <input type="email" class="form-control p-input" name="employee_email" value="{{($employee_description_profile->employee_email)}}" >
                              </div>
                               <div class="form-group">
                                  <label for="exampleInputPassword1">Employee Phone</label>
                                  <input type="text" class="form-control p-input" name="employee_phone" value="{{($employee_description_profile->employee_phone)}}">
                              </div>
                               <div class="form-group">
                                  <label for="exampleInputPassword1">Employee Address</label>
                                  <input type="text" class="form-control p-input" name="employee_address" value="{{($employee_description_profile->employee_address)}}" >
                              </div>
                               <div class="form-group">
                                  <label for="exampleInputPassword1">Employee Password</label>
                                  <input type="password" class="form-control p-input" name="employee_password" value="{{($employee_description_profile->employee_password)}}">
                              </div>                            
                               <div class="form-group">
                                  <label for="exampleInputPassword1">Admission year</label>
                                  <input type="date" class="form-control p-input" name="employee_joiningdate" value="{{($employee_description_profile->employee_joiningdate)}}" >
                              </div>
                              <button type="submit" class="btn btn-success btn-block">Update</button>
                          </form>
                      </div>
                  </div>
              </div>

@endsection