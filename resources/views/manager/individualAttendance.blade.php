@extends('manager.manager_dashboard')
@section('content')


<div class="row">
<div class="col-md-12">
  <table id="order-listing" class="table table-responsive table-hover" style="width:100%;">
	<thead>
		<tr>
			

			<th>Sl</th>
			<th>EMPLOYEE ID</th>
			<th>Action</th>
			

		</tr>


	</thead>
<tbody>
	
<?php $sl=1;?>

@foreach($data as $row)
<tr>

	<td> {{$sl++}}</td>
	<td>{{$row->employee_id}}</td>
	<td><a href="{{URL::to('/individual_Attendance/'.$row->employee_id)}}"  class="btn btn-sm btn-info">Show</a></td>


</tr>

@endforeach

</tbody>


</table>

</div>

</div>






@endsection