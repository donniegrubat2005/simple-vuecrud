<?php


Route::get('/', function () {
    return view('welcome');
});

Route::resource('employee', 'Employee\EmployeeController');
Route::post('getAll', 'Employee\EmployeeController@getAll');
