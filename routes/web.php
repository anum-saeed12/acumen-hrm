<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', '\App\Http\Controllers\DefaultController@employee')->name('dashboard');
Route::get('/', '\App\Http\Controllers\DefaultController@employee')->name('dashboard');

Route::prefix('/employee')->group(function() {
    Route::get('/', '\App\Http\Controllers\EmployeeController@index')->name('employee.index.admin');
    Route::get('/index', '\App\Http\Controllers\EmployeeController@index')->name('employee.list.admin');
    Route::get('/add', '\App\Http\Controllers\EmployeeController@add')->name('employee.add.admin');
    Route::post('/store', '\App\Http\Controllers\EmployeeController@store')->name('employee.store.admin');
    Route::get('/edit/{id}', '\App\Http\Controllers\EmployeeController@edit')->name('employee.edit.admin');
    Route::post('/update/{id}', '\App\Http\Controllers\EmployeeController@update')->name('employee.update.admin');
    Route::get('/delete/{id}', '\App\Http\Controllers\EmployeeController@update')->name('employee.delete.admin');
});

Route::prefix('/company')->group(function() {
    Route::get('/policy', '\App\Http\Controllers\CompanyController@policy')->name('company.policy.admin');
    Route::post('/policy/store', '\App\Http\Controllers\CompanyController@policystore')->name('company.policy.store.admin');
    Route::get('/add', '\App\Http\Controllers\CompanyController@add')->name('company.add.admin');
    Route::post('/store', '\App\Http\Controllers\CompanyController@store')->name('company.store.admin');
});

Route::prefix('/designation')->group(function() {
    Route::get('/', '\App\Http\Controllers\DesignationController@index')->name('designation.index.admin');
    Route::get('/index', '\App\Http\Controllers\DesignationController@index')->name('designation.list.admin');
   #Route::get('/add', '\App\Http\Controllers\DesignationController@add')->name('designation.add.admin');
    Route::post('/store', '\App\Http\Controllers\DesignationController@store')->name('designation.store.admin');
    Route::get('/edit/{id}', '\App\Http\Controllers\DesignationController@edit')->name('designation.edit.admin');
    Route::post('/update/{id}', '\App\Http\Controllers\DesignationController@update')->name('designation.update.admin');
    Route::get('/delete/{id}', '\App\Http\Controllers\DesignationController@update')->name('designation.delete.admin');
});

Route::prefix('/division')->group(function() {
    Route::get('/', '\App\Http\Controllers\DivisionController@index')->name('division.index.admin');
    Route::get('/index', '\App\Http\Controllers\DivisionController@index')->name('division.list.admin');
   #Route::get('/add', '\App\Http\Controllers\DivisionController@add')->name('division.add.admin');
    Route::post('/store', '\App\Http\Controllers\DivisionController@store')->name('division.store.admin');
    Route::get('/edit/{id}', '\App\Http\Controllers\DivisionController@edit')->name('division.edit.admin');
    Route::post('/update/{id}', '\App\Http\Controllers\DivisionController@update')->name('division.update.admin');
    Route::get('/delete/{id}', '\App\Http\Controllers\DivisionController@update')->name('division.delete.admin');
});

Route::prefix('/department')->group(function() {
    Route::get('/', '\App\Http\Controllers\DepartmentController@index')->name('department.index.admin');
    Route::get('/index', '\App\Http\Controllers\DepartmentController@index')->name('department.list.admin');
    Route::get('/add', '\App\Http\Controllers\DepartmentController@add')->name('department.add.admin');
    Route::post('/store', '\App\Http\Controllers\DepartmentController@store')->name('department.store.admin');
    Route::get('/edit/{id}', '\App\Http\Controllers\DepartmentController@edit')->name('department.edit.admin');
    Route::post('/update/{id}', '\App\Http\Controllers\DepartmentController@update')->name('department.update.admin');
    Route::get('/delete/{id}', '\App\Http\Controllers\DepartmentController@update')->name('department.delete.admin');
});

Route::prefix('/grade')->group(function() {
    Route::get('/', '\App\Http\Controllers\GradeController@index')->name('grade.index.admin');
    Route::get('/index', '\App\Http\Controllers\GradeController@index')->name('grade.list.admin');
    #Route::get('/add', '\App\Http\Controllers\GradeController@add')->name('grade.add.admin');
    Route::post('/store', '\App\Http\Controllers\GradeController@store')->name('grade.store.admin');
    Route::get('/edit/{id}', '\App\Http\Controllers\GradeController@edit')->name('grade.edit.admin');
    Route::post('/update/{id}', '\App\Http\Controllers\GradeController@update')->name('grade.update.admin');
    Route::get('/delete/{id}', '\App\Http\Controllers\GradeController@update')->name('grade.delete.admin');
});

Route::prefix('/position')->group(function() {
    Route::get('/', '\App\Http\Controllers\PositionController@index')->name('position.index.admin');
    Route::get('/index', '\App\Http\Controllers\PositionController@index')->name('position.list.admin');
    #Route::get('/add', '\App\Http\Controllers\PositionController@add')->name('position.add.admin');
    Route::post('/store', '\App\Http\Controllers\PositionController@store')->name('position.store.admin');
    Route::get('/edit/{id}', '\App\Http\Controllers\PositionController@edit')->name('position.edit.admin');
    Route::post('/update/{id}', '\App\Http\Controllers\PositionController@update')->name('position.update.admin');
    Route::get('/delete/{id}', '\App\Http\Controllers\PositionController@update')->name('position.delete.admin');
});

Route::prefix('/function')->group(function() {
    Route::get('/', '\App\Http\Controllers\FunctionController@index')->name('function.index.admin');
    Route::get('/index', '\App\Http\Controllers\FunctionController@index')->name('function.list.admin');
    #Route::get('/add', '\App\Http\Controllers\FunctionController@add')->name('function.add.admin');
    Route::post('/store', '\App\Http\Controllers\FunctionController@store')->name('function.store.admin');
    Route::get('/edit/{id}', '\App\Http\Controllers\FunctionController@edit')->name('function.edit.admin');
    Route::post('/update/{id}', '\App\Http\Controllers\FunctionController@update')->name('function.update.admin');
    Route::get('/delete/{id}', '\App\Http\Controllers\FunctionController@update')->name('function.delete.admin');
});

Route::prefix('/leave')->group(function() {
    Route::get('/', '\App\Http\Controllers\LeaveController@leaveapply')->name('leave.apply.admin');
    Route::post('/store', '\App\Http\Controllers\LeaveController@store')->name('leave.policy.store.admin');
});
