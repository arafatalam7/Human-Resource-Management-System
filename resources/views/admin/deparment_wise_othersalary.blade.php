@extends('layout')
@section('content')


          <div class="card">
            <div class="card-body">
              <h2 class="card-title">Data table</h2>
              <p class=" alert-success">
                           <?php
                              $exception=Session::get('exception');

                              if ($exception)
                                {
                                  echo $exception;
                                  Session::put('exception',null);
                                }
                              ?></p>
              <div class="row">
                <div class="col-12">
                  <table id="order-listing" class="table table-striped" style="width:100%;">
                    <thead>
                      <tr>
                       
                          <th>Salary ID </th>
                          <th>Employee Id </th>
                          <th>Treatment </th>
                           <th>Transportation </th>
                            <th>Others </th>
                         
                          <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                  @foreach($all_dev_info as $v_othersalary) 
                      <tr>

                          <td>{{$v_othersalary->salary_id}}</td>
                          <td>{{$v_othersalary->employee_id}}</td>
                          <td>{{$v_othersalary->medical_fee}}</td>
                          <td>{{$v_othersalary->transportation_fee}}</td>
                          <td>{{$v_othersalary->others}}</td>

                          
                          <td>
                            <a href="" id="delete"><button class="btn btn-danger">Delete</button></a>
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