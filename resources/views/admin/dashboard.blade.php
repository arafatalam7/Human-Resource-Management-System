


@extends('layout')
@section('content')

<div class="col-sm-6 col-md-3 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h2 class="card-title">All Employes</h2>
                  @php
                   $emp=DB::table('employee_tbl')
                          ->count('employee_id');
                    
                  @endphp
                  <p style="font-family: cursive; font-size:30px; font-weight: bold; text-align: center;">{{$emp}}</p>
                </div>
                <div class="dashboard-chart-card-container">
                  <div id="dashboard-card-chart-1" class="card-float-chart"></div>
                </div>
              </div>
            </div>
            
        
          
            
           


@endsection