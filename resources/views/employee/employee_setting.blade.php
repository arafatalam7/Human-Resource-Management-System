@extends('employee_layout')
@section('content')

<div class="col-12 col-lg-6 grid-margin">
                  <div class="card">
                      <div class="card-body">
                          <h2 class="card-title">Update Your Password</h2>
                          <p class=" alert-success"><?php
                              $exception=Session::get('exception');

                              if ($exception)
                                {
                                  echo $exception;
                                  Session::put('exception',null);
                                }
                              ?></p>
                          <form class="forms-sample" method="post" action="{{URL::to('/employee_own_update')}}" >
                          	  {{ csrf_field() }}
                           
                              
                          
                               <div class="form-group">
                                  <label for="exampleInputPassword1">Employee Password</label>
                                  <input type="password" class="form-control p-input" name="employee_password" value="{{($emp_description_profile->employee_password)}}">
                              </div>                            
                               
                              <button type="submit" class="btn btn-success ">Update</button>
                          </form>
                      </div>
                  </div>
              </div>

@endsection