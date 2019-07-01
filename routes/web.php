<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//admin login page
Route::get('/', function () {
    return view('admin.log');
});

//user login page
Route::get('/admin', function () {
    return view('admin.admin_login');
});
Route::get('/employee', function () {
    return view('employee_login');
});
Route::get('/manager', function () {
    return view('manager.manager_log');
});

// Route::get('/add_attendance', function () {
//     return view('manager.attendance_form');
// });

//admin login....-------------------------------------------------
 Route::post('/adminlogin','AdminController@login_dashboard');

 //employee //
 Route::post('/employeelogin','AdminController@employee_login_dashboard');

 //today  task//
//dashboard
  Route::get('/employee_dashboard','AdminController@employee_dashboard'); 
 Route::get('/admin_dashboard','AdminController@admin_dashboard');

//manager task//
  Route::post('/managerlogin','managerController@manager_login_dashboard');
 Route::get('/manager_dashboard','managerController@manager_dashboard');
 Route::get('/manager_logout','managerController@manager_logout');
//logout
 Route::post('/log','logController@log');
Route::get('/logout','AdminController@logout');
Route::get('/employee_logout','AdminController@employee_logout');


//attendence controller//
//Route::get('/take_attendance','AttendanceController@take_attendance');
Route::get('/take_attendance','AttendController@all_attend');
Route::post('/stores','AttendController@store_attendance');

Route::post('/insert_attendance','AttendanceController@insert_attendance');
Route::get('/all_attendance','AttendController@all_Attendance');
Route::get('/viewAttendance/{att_date}','AttendController@viewAttendance');
Route::get('/individual_Attendance/{employee_id}','AttendController@individual_Attendance');
Route::get('/individualAttendance','AttendController@individualAttendance');

//admin profile view,setting
Route::get('/viewprofile','AdminController@viewprofile');
 Route::get('/setting','AdminController@setting');

//user profile view,setting
Route::get('/employee_setting','AdminController@employee_setting');
Route::get('/employee_profile','AddemployeesController@employee_profile');

//add employee-------------------------------------------------------
Route::get('/addemployee','AddemployeesController@add_employee');
Route::post('/save_employee','AddemployeesController@save_employee');

//delete and view employee
Route::get('/employee_delete/{employee_id}','AllemployeesController@employee_delete');
Route::get('/employee_view/{employee_id}','AllemployeesController@employeeview');
//--edit---////
Route::get('/employee_edit/{employee_id}','AllemployeesController@employee_edit');
Route::post('/update_employee/{employee_id}','AllemployeesController@employee_update');
//------------------employee operation-----------//
Route::post('/employee_own_update','AllemployeesController@employee_own_update');
Route::get('/leave_apply','LeaveApplyController@index');
Route::post('/save_leave','LeaveApplyController@store');
Route::get('/leave_apply_list','LeaveApplyController@leave_apply_list');



//all pages route are here............................................
Route::get('/allemployee','AllemployeesController@allemployee');
//---------------//

Route::get('/designing','DepartmentController@design');
Route::get('/development','DepartmentController@develop');
Route::get('/marketing','DepartmentController@marketing');
Route::get('/accounts','DepartmentController@accounts');


//-----///
Route::get('/allholiday','HolidayController@allholiday');
Route::get('/addholiday','HolidayController@addholiday');
Route::post('/save_holiday','HolidayController@saveholiday');
Route::get('/holiday_delete/{holiday_id}','HolidayController@holiday_delete');


//---salary--///
Route::get('/salarydetails','SalaryController@salarydetails');
Route::post('/salarydetails_store','SalaryController@salarydetails_store');

Route::get('/deparment_wise_othersalary','SalaryController@deparment_wise_othersalary');

//salary management//
Route::get('/manage_salary','manage_salaryController@salary_form');
Route::post('/salary_insert','manage_salaryController@salary_insert');
Route::get('/month_wise_salary','manage_salaryController@month_wise_salary');
Route::get('/view_salary_month_details/{salary_month}','manage_salaryController@view_salary_month_details');






//test login
Route::post('/log','logController@log');