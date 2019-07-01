@extends('manager.manager_dashboard')
@section('content')
<div class="col-sm-12 col-md-12 grid-margin">
              <div class="card">
                <div class="card-body">
               
                 
                    	 <h2 class="card-title text-center" style="color:blue;">VIEW ATTENDANCE  </h2>
                
          

<table id="order-listing" class="table table-striped table-bordered   table-responsive table-hover">
	
<thead>

	<tr>
		<th>ID</th>
		<th>DATE</th>
		<th>ATTENDANCE</th>
		<th>IN</th>
		<th>OUT</th>
	</tr>

</thead>
@foreach($data as $row)
<tbody>



<tr>

	<td> {{$row->employee_id}}</td>
	<td>{{$row->att_date}}</td>
	<td>{{$row->attendance}}</td>
	<td>{{$row->In_time}}</td>
	<td>{{$row->Out_time}}</td>


</tr>

@endforeach


</tbody>


</table>

        </div>

              </div>
            </div>
@endsection