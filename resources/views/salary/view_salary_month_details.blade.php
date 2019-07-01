@extends('manager.manager_dashboard')
@section('content')
<div class="col-sm-12 col-md-12 grid-margin">
              <div class="card">
                <div class="card-body">
               
                 
                    	 <h2 class="card-title text-center" style="color:blue;">  Salary Sheet Month Wise   </h2>
                
          

<table id="order-listing" class="table table-striped table-bordered   table-responsive table-hover">
	
<thead>

	<tr>
	
		<th>EMPLOYEE ID</th>
		<th>SALARY ID</th>
		<th>BASIC</th>
		<th>MEDICAL</th>
		<th>TRANSFORTATION</th>
		<th>OTHERS</th>
		<th>OVER TIME</th>
		<th>TOTAL</th>
		
	</tr>

</thead>
@foreach($data as $row)
<tbody>



<tr>

	
	<td>{{$row->employee_id}}</td>
	<td>{{$row->salary_id}}</td>
	<td>{{$row->basic_salary}}</td>
	<td>{{$row->transportation_fee}}</td>
	<td>{{$row->medical_fee}}</td>
	<td>{{$row->others}}</td>
	<td>{{$row->over_time}}</td>
	<td>{{$row->total}}</td>



</tr>

@endforeach


</tbody>


</table>

        </div>

              </div>
            </div>
@endsection