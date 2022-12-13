<?php

use App\Http\Controllers\Settings\RoleController;
use App\Http\Controllers\Users\AttendanceController;
use App\Http\Controllers\Users\CustomerController;
use App\Http\Controllers\Users\EmployeeController;
use App\Http\Controllers\Users\SalaryController;
use App\Http\Controllers\Users\SupplierController;
use App\Http\Controllers\Users\UsersController;
use App\Models\Employee;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->group(function(){

    Route::controller(UsersController::class)->prefix('users')->group(function(){
        Route::get('/profile/{username}', 'index')->name('backend.user.index');
        Route::get('/allusers-view', 'allusers')->name('backend.user.all');
        Route::post('/store', 'store')->name('backend.users.store');
        Route::post('/destroy', 'destroy')->name('backend.users.destroy');
        Route::post('/autoauth', 'autoauth')->name('backend.user.autoauth');
        Route::get('/autoallusers', 'autoallusers')->name('backend.user.autoallusers');
        Route::post('/update', 'update')->name('backend.user.update');
        Route::post('/getuserdata', 'getuserdata')->name('user.getuserdata');
        Route::post('/password-change', 'password_change')->name('user.password.change');
    });


    Route::controller(EmployeeController::class)->prefix('employee')->group(function(){
        Route::get('/', 'index')->name('backend.employee.index');
        Route::post('/store', 'store')->name('backend.employee.store');
        Route::post('/edit', 'edit')->name('backend.employee.edit');
        Route::post('/destroy', 'destroy')->name('backend.employee.destroy');
        Route::get('/autoemployees', 'autoemployees')->name('autoemployees');

    });

    Route::controller(AttendanceController::class)->prefix('attendance')->group(function(){
        Route::get('/', 'index')->name('backend.attendance.index');
        Route::post('/store', 'store')->name('backend.attendance.store');
        Route::post('/edit', 'edit')->name('backend.attendance.edit');
        Route::post('/destroy', 'destroy')->name('backend.attendance.destroy');
        Route::get('/autoattendances', 'autoattendances')->name('autoattendances');

    });


    Route::controller(CustomerController::class)->prefix('customers')->group(function(){
        Route::get('/', 'index')->name('backend.customers.index');
        Route::post('/store', 'store')->name('backend.customers.store');
        Route::post('/edit', 'edit')->name('backend.customers.edit');
        Route::post('/destroy', 'destroy')->name('backend.customers.destroy');
        Route::get('/autocustomers', 'autocustomers')->name('autocustomers');

    });


    Route::controller(SalaryController::class)->prefix('salary')->group(function(){
        Route::get('/', 'index')->name('backend.salary.index');
        Route::post('/store', 'store')->name('backend.salary.store');
        Route::post('/edit', 'edit')->name('backend.salary.edit');
        Route::post('/destroy', 'destroy')->name('backend.salary.destroy');
        Route::get('/autosalaries', 'autosalaries')->name('autosalaries');
        Route::post('/getsalary', 'getsalary')->name('backend.employee.getsalary');

    });

    Route::controller(RoleController::class)->prefix('role')->group(function(){
        Route::get('/', 'index')->name('backend.role.index');
        Route::post('/store', 'store')->name('backend.role.store');
        Route::post('/edit', 'edit')->name('backend.role.edit');
        Route::post('/update', 'update')->name('backend.role.update');
        Route::post('/destroy', 'destroy')->name('backend.role.destroy');
        Route::get('/autoroles/all', 'autoroles')->name('autoroles');
        Route::post('/getrole', 'getrole')->name('role.getrole');

    });


});
