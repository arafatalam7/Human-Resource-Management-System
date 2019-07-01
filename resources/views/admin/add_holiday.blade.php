@extends('layout')
@section('content')

<div class="col-12 col-lg-6 grid-margin">
                  <div class="card">
                      <div class="card-body">
                          <h2 class="card-title">Add Holiday</h2>
                          <p class=" alert-success"><?php
                              $exception=Session::get('exception');

                              if ($exception)
                                {
                                  echo $exception;
                                  Session::put('exception',null);
                                }
                              ?></p>
                          <form id ="forms_sample" class="forms_sample" method="post"  onsubmit="return vform2()" action="{{URL::to('/save_holiday')}}" enctype="multipart/form-data">
                              {{ csrf_field() }}
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Holiday date</label>
                                  <input type="date" class="form-control p-input" name="holiday_date" " aria-describedby="emailHelp" placeholder="Enter holiday date">
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputPassword1">Holiday Title</label>
                                  <input type="text" class="form-control p-input" name="holiday_title" placeholder=" Holiday title">
                              </div>
                             
                               <div class="form-group">
                                  <label for="exampleInputPassword1">Holiday Description</label>

                                  <textarea rows='5' cols='20' " class="form-control p-input" name="holiday_description" placeholder="Description "></textarea>
                              </div>
                             
                              
                          
                              <button type="submit" class="btn btn-success btn-block">Add Holiday</button>
                          </form>
                      </div>
                  </div>
              </div>

@endsection