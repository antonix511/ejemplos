<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Company\CompanyCreateController;
use App\Http\Controllers\Company\CompanyUpdateController;
use App\Http\Controllers\Company\CompanyDeleteController;
use App\Http\Controllers\Company\CompanyListController;
use App\Http\Controllers\Company\CompanyGetController;

use App\Http\Controllers\Employee\EmployeeListController;
use App\Http\Controllers\Employee\EmployeeDeleteController;
use App\Http\Controllers\Employee\EmployeeGetController;
use App\Http\Controllers\Employee\EmployeeUpdateController;
use App\Http\Controllers\Employee\EmployeeCreateController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('company')->group(function () {
    Route::get('/', [CompanyListController::class, '__invoke'])->name('company.list');
    Route::post('/', [CompanyCreateController::class, '__invoke'])->name('company.create');
    Route::get('/{identificationNumber}', [CompanyGetController::class, '__invoke'])->name('company.get');
    Route::put('/{identificationNumber}', [CompanyUpdateController::class, '__invoke'])->name('company.update');
    Route::delete('/{identificationNumber}', [CompanyDeleteController::class, '__invoke'])->name('company.delete');
});

Route::prefix('employee')->group(function () {
    Route::get('/', [EmployeeListController::class, '__invoke'])->name('employee.list');
    Route::post('/', [EmployeeCreateController::class, '__invoke'])->name('employee.create');
    Route::get('/{documentNumber}', [EmployeeGetController::class, '__invoke'])->name('employee.get');
    Route::put('/{documentNumber}', [EmployeeUpdateController::class, '__invoke'])->name('employee.update');
    Route::delete('/{documentNumber}', [EmployeeDeleteController::class, '__invoke'])->name('employee.delete');
});
