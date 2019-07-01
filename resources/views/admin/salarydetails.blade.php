@extends('layout')
@section('content')


          <div class="card">
            <div class="card-body">
              <h2 class="card-title">salary table</h2>




        
            
                     <form action ="/salarydetails_store" method="post">
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

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
                                
</p>
                  <table  class="table table-responsive table-hover" style="width:100%;">
                   <thead>
                    	 
                 
                      <tr>
                          <th>Employee_ID</th>
                        
                       
                          <th>Medical</th>
                          <th>Transportation</th>
                          <th>Others</th>
                       
                        
                         
                      </tr>
                    </thead>
                    <tbody>
                 
                      <tr>

                     
                      <td><input type="integer" name="employee_id"> </td>
                      <td><input type="integer" name="transportation_fee"> </td>
                      <td><input type="integer" name="medical_fee"> </td>
                      <td><input type="integer" name="others"> </td>
                         

                      
                          <td>
                          

                           <a href=""> <button class="btn btn-warning">Edit</button> </a>

                            <a href="" id="delete"><button class="btn btn-danger">Delete</button></a>
                          </td>
                      </tr>
            
                    </tbody>
                  </table>
                     <button type="submit" class="btn btn-info ">Submit</button>
              </form>
            
                </div>
              </div>
         
        




@endsection