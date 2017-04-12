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
use App\Http\Controllers\EmployeeList;

Route::get('/', function () {
    return view('welcome');
});

Route::get('employees', 'EmployeeList@getEmployeesData');

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('getemployeedata/{id}', 'EmployeeList@getEmployeeData');

Route::post('updateemployeescore', 'EmployeeList@updateEmployeeScore');

Route::get('schedule', 'EmployeeList@showSchedule');

Route::get('profil','EmployeeProfil@getDataEmployee');

Route::get('profilschedule','EmployeeProfil@schedule');

Route::get('addtrainingpage','EmployeeList@addtrainingpage');

Route::post('actionadd','EmployeeList@addtraining');
