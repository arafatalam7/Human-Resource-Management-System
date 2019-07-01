@extends('layout')
@section('content')


          <div class="card">
            <div class="card-body">
              <h2 class="card-title">Holiday List</h2>
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
                       
                          <th>Holiday date </th>
                          <th>Holiday Title </th>
                          <th>Holiday Description </th>
                         
                          <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                  @foreach($all_holiday_info as $v_holiday) 
                      <tr>

                          <td>{{$v_holiday->holiday_date}}</td>
                          <td>{{$v_holiday->holiday_title}}</td>
                          <td>{{$v_holiday->holiday_description}}</td>
                          
                          <td>
                            <a href="{{URL::to('/holiday_delete/'.$v_holiday->holiday_id)}}" id="delete"><button class="btn btn-danger">Delete</button></a>
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