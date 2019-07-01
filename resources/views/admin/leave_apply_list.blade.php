@extends('layout')
@section('content')


          <div class="card">
            <div class="card-body">
              <h2 class="card-title">Leave Apply List</h2>
              <p class=" alert-success"><?php
                              $exception=Session::get('exception');

                              if ($exception)
                                {
                                  echo $exception;
                                  Session::put('exception',null);
                                }
                              ?></p>
              <div class="row">
                <div class="col-12">
                  <table id="order-listing" class="table table-responsive table-hover" style="width:100%;">
                   <thead>
                       
                 
                      <tr>
                          <th>Employee_ID</th>
                        
                          <th>Reason</th>
                          <th>Description</th>
                          <th>Start Day</th>
                          <th>End Day</th>
                          
                          <th>Remainig leave(day)</th>
                          <th>Approved</th>
                          <th>Rejected</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($leave_info as $v_leave) 
                      <tr>
                          <td>{{$v_leave->employee_id}}</td>
                          <td>{{$v_leave->leave_reason}}</td>
                          <td>{{$v_leave->description}}</td>
                          <td>{{$v_leave->leave_start}}</td>
                          <td>{{$v_leave->leave_end}}</td>
                          <td>{{'20'}}</td>
                          
                           <td>  
                                <a href=""> 
                                      <button class="btn btn-warning">Approved</button> 
                                 </a>
                           </td>

                      
                          <td>

                          <a href="" id="delete"><button class="btn btn-danger">Rejected</button></a>

                          </td>
                      </tr>
                 @endforeach 
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        




@endsection