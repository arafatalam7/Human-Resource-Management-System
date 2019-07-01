@extends('manager.manager_dashboard')
@section('content')



    
       <div class="col-sm-12 col-md-12 grid-margin">
    
        <div class="card">
            <div class="card-body">
              <h2 style="color:green;" class="card-title text-center">
               Salary Sheet  of {{date("F")}} Month </h2>
         
             
                
                


                     <form action ="{{url('/salary_insert')}}" method="post">  <!--{{url('/salary_insert')}}-->
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

                   <table  class="table table-responsive table-hover" style="width:80%;">
                    <thead style="color: blue;">
                      <tr>
                          <th>Employee Id</th>
                        
                        
                         <th>IMAGE</th>   
                          
                          <th>Basic</th>
                         
                          <th>Medical</th>
                          <th> Transportation</th>
                          <th> Others</th>
                           <th>Over time</th>
                       
                        
                       
<!-- 
                      </tr>
                    </thead>


                    <tbody>



                        <tr>
                         <td><input type="text" name="employee_id" value="">    </td>
                          
                          
                         
                                <td>  <input type="text" name="salary_id" value="" > </td>
                        
                           <td>
                                   <input type="integer" class="" name="basic_salary" value=""> 

                          </td>
                         
                              

                               

                          <td><input type="integer" name="medical_fee" value="" ></td>
                          <td><input type="integer" name="transportation_fee" value=""></td>
                           <td><input type="integer" name="others" value=""></td>

                      <td> <input type="integer" class="" name="over_time" value="">  </td>

                      

                        <input type="hidden" name="salary_month" value="{{date("F")}}">
                         
                    
                     


                      </tr> -->


                   @foreach($data as $row)  
                      <tr>
                         <td><input type="text" name="employee_id[]" value="{{$row->employee_id}}" readonly>    </td>
                          
                          
                         
                                <td>
                               <img src="{{URL::to($row->employee_image)}}"  height="50" width="60" >
                               <input type="hidden" name="salary_id[{{$row->employee_id}}]" value="{{$row->salary_id}}" readonly> 
                             </td>
                        
                           <td>
                                   <input type="integer" class="" name="basic_salary[{{$row->employee_id}}]" value="{{$row->basic_salary}}" readonly> 

                          </td>
                         
                              

                               

                          <td><input type="integer" name="medical_fee[{{$row->employee_id}}]" value="{{$row->medical_fee}}" readonly></td>
                          <td><input type="integer" name="transportation_fee[{{$row->employee_id}}]" value="{{$row->transportation_fee}}" readonly></td>
                           <td><input type="integer" name="others[{{$row->employee_id}}]" value="{{$row->others}}" readonly></td>

                      <td> <input type="integer" class="" name="over_time[{{$row->employee_id}}]" value="">  </td>

                      

                        <input type="hidden" name="salary_month" value="{{date("F")}}">
                         
                    
                     


                      </tr>
                 @endforeach
                   
                    </tbody>
                  </table>
              
                 <button type="submit" class="btn btn-info ">Submit</button>
              </form>
            
           
        
        

   </div>
          </div>
        </div>
             


@endsection
        



