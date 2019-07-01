@extends('manager.manager_dashboard')
@section('content')



    
        <div class="col-12">
    
        <div class="card">
            <div class="card-body">
              <h2 style="color:green;" class="card-title text-center">
              Attendance date of {{date("d/m/y")}} </h2>
            </div>
          </div>
        </div>
             
             
                
                <div class="col-8">

                     <form action ="{{url('/stores')}}" method="post">
                      @csrf

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif



                      
                      <p class=" alert-danger">
  <?php
                              $exception=Session::get('exception');

                              if ($exception)
                                {
                                  echo $exception;
                                  Session::put('exception',null);
                                }
    ?>
                                
</p>

                  <table  class="table table-responsive table-hover" style="width:100%;">
                    <thead style="color: blue;">
                      <tr>
                          
                          <th>Name </th>
                          <th>Employee Id </th>
                         
                          <th>Image</th>
                         
                          
                          
                          <th>Attendance</th>
                           <th>IN_TIME</th> 
                          <th>OUT_TIME</th>
                          <th>Remark</th>
                      </tr>
                    </thead>
                    <tbody>
                   

                    @foreach($all_employee_info as $v_employe)  
                      <tr>
                         
                          <td>{{$v_employe->employee_name}}</td>
                          
                          <td>
                            <input type="text" name="employee_id[]"
                            value="{{$v_employe->employee_id}}"   readonly>
</td>
<td>
                               <img src="{{URL::to($v_employe->employee_image)}}"  height="50" width="60" >
                             </td>
                        
                           <td>
                                   <input type="radio" class="" name="attendance[{{$v_employe->employee_id}}]" value="Present"> Present.<br>

                                    <input type="radio" class="" name="attendance[{{$v_employe->employee_id}}]" value="Absent"> Absent.<br>

                          </td>
                          <td><input type="time" name="in_time[{{$v_employe->employee_id}}]" value=""></td>
                          <td><input type="time" name="out_time[{{$v_employe->employee_id}}]" value=""></td>
                          <td>
                                  
                                                <input type="text" class="" name="Remark[{{$v_employe->employee_id}}]" value="">
                            

                                  




                          <input type="hidden" name="att_date" value="{{date("y/m/d")}}">
                          <input type="hidden" name="att_month" value="{{date("F")}}">
                         


                      </tr>
                 @endforeach 
                    </tbody>
                  </table>
              
                 <button type="submit" class="btn btn-success ">Submit</button>
              </form>
            
           
          </div>
        




@endsection
        



