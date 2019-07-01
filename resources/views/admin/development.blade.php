@extends('layout')
@section('content')


          <div class="card">
            <div class="card-body">
              <h2 class="card-title">Department of  Development</h2>
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
                          <th>Employee_ID#</th>
                          <th>Employee-Name </th>
                          <th>Phone</th>
                          <th>Image</th>
                          <th>Address</th>
                          <th>Department</th>
                          <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($devlop_employee_info as $v_employe)  
                      <tr>
                          <td>{{$v_employe->employee_id}}</td>
                          <td>{{$v_employe->employee_name}}</td>
                          <td>{{$v_employe->employee_phone}}</td>
                          <td><img src="{{URL::to($v_employe->employee_image)}}"  height="50" width="60"  ></td>
                          <td>{{$v_employe->employee_address}}</td>
                           <td>{{$v_employe->department_name}}</td>

                      
                          <td>
                          
                            <span> <a href="{{URL::to('/employee_view/'.$v_employe->employee_id)}}"><button class="btn btn-primary">View</button></a>

                          <span> <a href="{{URL::to('/employee_edit/'.$v_employe->employee_id)}}"> <button class="btn btn-warning">Edit</button> </a>

                            <a href="{{URL::to('/employee_delete/'.$v_employe->employee_id)}}" id="delete"><button class="btn btn-danger">Delete</button></a></span>
                          
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