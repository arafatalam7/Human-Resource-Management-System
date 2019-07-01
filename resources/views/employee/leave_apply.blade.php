@extends('employee_layout')
@section('content')
@php
          $employee_id=Session::get('employee_id');
          $employee_info=DB::table('employee_tbl')
                      ->where('employee_id',$employee_id)
                      ->first(); 
@endphp
<div class="col-12 col-lg-6 grid-margin">
                  <div class="card">
                      <div class="card-body">
                          <h2 class="card-title">LEAVE APPLICATION</h2>
                          <p class=" alert-success"><?php
                              $exception=Session::get('exception');

                              if ($exception)
                                {
                                  echo $exception;
                                  Session::put('exception',null);
                                }
                              ?></p>
                          <form id="formsample"  onsubmit=" return vform3()" class="forms-sample" method="post" action="{{URL::to('/save_leave')}}" enctype="multipart/form-data">
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
                                  <label for="Employee Id">Employee Id</label>
                                  <input type="integer" class="form-control p-input"value="{{($employee_info->employee_id)}}" name="employee_id" readonly>
                              </div>
                              
                               <div class="form-group">
                                  <label for="exampleInputPassword1">Leave reason</label>
                                  <select class="form-control p-input" name="leave_reason">
                                    <option value="Sickness">Sickness</option>
                                    <option value="Family issue">Family issue</option>
                                    <option value="Emergency">Emergency</option>
                                    <option value="others">others</option>
                                  </select>
                              </div>
                              
                             
                               <div class="form-group">
                                  <label for="Description"> Description</label>
                                  <textarea cols="30"  rows="5" class="form-control p-input" name="description" placeholder="Description "></textarea>
                              </div>

                                <div class="form-group">
                                  <label for="Leave Start date">Leave Start date</label>
                                  <input type="date" class="form-control p-input" name="leave_start"  placeholder="Enter start date">
                              </div>
                                <div class="form-group">
                                  <label for="Leave Start date">Leave End date</label>
                                  <input type="date" class="form-control p-input" name="leave_end" placeholder="Enter end date">
                              </div>
                             
                              
                          
                              <button type="submit" class="btn btn-success btn-block">Apply</button>
                          </form>
                      </div>
                  </div>
              </div>

@endsection