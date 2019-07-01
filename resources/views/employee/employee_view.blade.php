@extends('employee_layout')


@section('content')

 <div class="row user-profile">
            <div class="col-lg-12 side-left">
              <div class="card mb-4">
                <div class="card-body avatar">
                  <h2 class="card-title">Info</h2>
                  <img src="{{URL::to($employee_profile->employee_image)}}"  height="50" width="60" alt="">
                  <p class="name">{{ strtoupper($employee_profile->employee_name) }}</p>
                  <p class="designation">{{$employee_profile->employee_designation}} </p>
                  <a class="email" href="#">{{$employee_profile->employee_email}}</a>
                  <a class="number" href="#">{{$employee_profile->employee_phone}}</a>
                </div>
              </div>
              <div class="card mb-4">
                <div class="card-body overview">
                  <ul class="achivements">
                    <h2 style="color:maroon; font-family: cursive; font-weight: bolder; ">JAGUARS IT LTD</h2>
                  </ul>
                  <div class="wrapper about-user">
                    <h2 class="card-title mt-4 mb-3">About</h2>
                    <p>The information of this employee are give below.</p>
                  </div>
                  <div class="info-links">
                    <a class="website">
                      <i class="icon-globe icon">Fathers Name:</i>
                      <span style="font-family: vernada; font-size: 15px;">{{$employee_profile->employee_fathersname}}</span>
                    </a>
                    <a class="website">
                      <i class="icon-globe icon">Mothers Name:</i>
                      <span style="font-family: vernada; font-size: 15px;">{{$employee_profile->employee_mothersname}}</span>
                    </a>
                     <a class="website">
                      <i class="icon-globe icon">Address:</i>
                      <span style="font-family: vernada; font-size: 15px;">{{$employee_profile->employee_address}}</span>
                    </a>
                     <a class="website">
                      <i class="icon-globe icon">Department:</i>
                      <span style="font-family: vernada; font-size: 15px;">
                      	{{$employee_profile->employee_department}}</span>
                    </a>
                     <a class="website">
                      <i class="icon-globe icon">Joining Date:</i>
                      <span style="font-family: vernada; font-size: 15px;">{{$employee_profile->employee_joiningdate}}</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>




@endsection