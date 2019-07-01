@extends('manager.manager_dashboard')
@section('content')





   <div class="col-12">
    
        <div class="card">
            <div class="card-body">
              <h2 class="card-title">Take Attendance date of {{date("d/m/y")}}</h2>
            </div>
          </div>
        </div>

<div class="col-8">
          <form action="{{url('/insert_attendance')}}" method="post">

            @csrf
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

                   
             <table id="order-listing" class="table table-responsive table-hover" style="width:100%;">
              <th>EMPLOYEE ID</th>
             
              <th>ATTENDENCE</th>
              <th>DATE</th>
             
              <th>ACTION</th>

            
              <tr>   
                 <td><input type="text" name="employee_id">
                                     
                <td>
                  
                   <input type="radio"  name="attend" value="Present" > Present.</br>

                   <input type="radio"  name="attend" value="Absent" > Absent.

                </td>
                       <td> <input type="text" name="att_date" value="{{date("d/m/y")}}"></td>
                      <td>    <input type="hidden" name="att_month" value="{{date("F")}}"></td>
                    
                        
                        <td>  <button type="submit" class="btn btn-success ">Submit</button></td>


              </tr>
             

            </table>


          </form>
        
</div>



@endsection
        



