<?php

use App\Http\Controllers\ConsultationController;
use App\Http\Controllers\MailBox\ContactMailController;
use App\Http\Controllers\users\JobBoardController;
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
        Route::post('/edit', 'edit')->name('backend.users.edit');
        Route::post('/autoauth', 'autoauth')->name('backend.user.autoauth');
        Route::get('/autoallusers', 'autoallusers')->name('backend.user.autoallusers');
        Route::post('/update', 'update')->name('backend.user.update');
        Route::post('/allupdate', 'allupdate')->name('backend.user.allupdate');
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

    Route::controller(JobBoardController::class)->prefix('jobboard')->group(function(){
        Route::get('/', 'index')->name('backend.jobboard.index');
        Route::get('/create', 'create')->name('backend.jobboard.create');
        Route::post('/store', 'store')->name('backend.jobboard.store');
        Route::get('/edit/{id}', 'edit')->name('backend.jobboard.edit');
        Route::post('/update', 'update')->name('backend.jobboard.update');
        Route::post('/destroy', 'destroy')->name('backend.jobboard.destroy');
        Route::get('/alljobboard/all', 'alljobboard')->name('backend.jobboard.alljobboard');
        Route::post('/getjobboard', 'getjobboard')->name('jobboard.getjobboard');
    });

    Route::controller(ConsultationController::class)->prefix('consultation')->group(function(){
        Route::get('/', 'index')->name('consultation.index');
        Route::get('/show/{id}', 'show')->name('consultation.show');
        Route::post('/update', 'update')->name('consultation.update');
        Route::get('/complete', 'complete_index')->name('consultation.complete');
        Route::get('/destory/{id}', 'destory')->name('consultation.destory');
        Route::get('/settings', 'settings')->name('consultation.settings');
    });

    Route::controller(ContactMailController::class)->prefix('briefmail')->group(function(){
        Route::get('/', 'index')->name('briefmail.index');
        Route::get('/show/{id}', 'show')->name('briefmail.show');
        Route::post('/update', 'update')->name('briefmail.update');
        Route::get('/complete', 'complete_index')->name('briefmail.complete');
        Route::get('/destory/{id}', 'destory')->name('briefmail.destory');
    });


});
