@extends('employee_layout')
@section('content')
@php
          $employee_id=Session::get('employee_id');
          $employee_info=DB::table('employee_tbl')
                      ->where('employee_id',$employee_id)
                      ->first(); 
@endphp




         
<div class="details">
              <p class="user-name"  style="color:blue"> 	WELCOME {{strtoupper($employee_info->employee_name)}}</p>
              
            </div>

@endsection