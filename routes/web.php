<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/login',[
    App\Http\Controllers\LoginController::class,
    'index'
])->name('login');
// Route::get('/table',[
//     App\Http\Controllers\LoginController::class,
//     'table'
// ])->name('table');
// Route::get('/layout',[
//     App\Http\Controllers\LoginController::class,
//     'layout'
// ])->name('layout');
Route::get('/deduction',[
    App\Http\Controllers\DeductionController::class,
    'deduction'
])->name('deduction');
Route::get('/department',[
    App\Http\Controllers\DepartmentController::class,
    'department'
])->name('department');
Route::post('/department/save',[
    App\Http\Controllers\DepartmentController::class,
    'departmentSave'
])->name('department.save');
Route::get('/employees',[
    App\Http\Controllers\EmployeesController::class,
    'employees'
])->name('employees');
Route::get('/leaves',[
    App\Http\Controllers\LeavesController::class,
    'leaves'
])->name('leaves');
Route::get('/loans',[
    App\Http\Controllers\LoansController::class,
    'loans'
])->name('loans');
Route::get('/payslips',[
    App\Http\Controllers\PayslipsController::class,
    'payslips'
])->name('payslips');
Route::get('/timekeeping',[
    App\Http\Controllers\TimekeepingController::class,
    'timekeeping'
])->name('timekeeping');
Route::get('/settings',[
    App\Http\Controllers\SettingsController::class,
    'settings'
])->name('settings');
Route::get('/form',[
    App\Http\Controllers\DepartmentController::class,
    'form'
])->name('form');
Route::get('/department/create',[
    App\Http\Controllers\DepartmentController::class,
    'departmentCreate'
])->name('department.Create');
Route::get('/deduction/create',[
    App\Http\Controllers\DeductionController::class,
    'deductionCreate'
])->name('deduction.Create');
Route::get('/employees/create',[
    App\Http\Controllers\EmployeesController::class,
    'employeesCreate'
])->name('employees.Create');
Route::get('/leaves/create',[
    App\Http\Controllers\LeavesController::class,
    'leavesCreate'
])->name('leavesCreate');
Route::get('/loans/create',[
    App\Http\Controllers\LoansController::class,
    'loansCreate'
])->name('loans.Create');
Route::get('/payslips/create',[
    App\Http\Controllers\PayslipsController::class,
    'payslipsCreate'
])->name('payslips.Create');
Route::get('/settings/create',[
    App\Http\Controllers\SettingsController::class,
    'settingsCreate'
])->name('settings.Create');
Route::get('/timekeeping/create',[
    App\Http\Controllers\TimekeepingController::class,
    'timekeepingCreate'
])->name('timekeepingCreate');
Route::get('/attendance/create',[
    App\Http\Controllers\TimekeepingController::class,
    'attendanceCreate'
])->name('attendance.Create');
Route::get('/payslips/save',[
    App\Http\Controllers\PayslipsController::class,
    'payslipsSave'
])->name('payslips.Save');








