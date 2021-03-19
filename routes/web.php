<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

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


Route::get('/dashboard', [EmployeeController::class, 'index'] )->middleware(['auth'])->name('dashboard');
Route::get('/create_employee', [EmployeeController::class, 'createEmployee'] )->middleware(['auth'])->name('create_employee');
Route::post('/add_employee', [EmployeeController::class, 'addEmployee'] )->name('add_employee');
Route::get('/update_employee/{id}', [EmployeeController::class, 'updateEmployee'] )->middleware(['auth'])->name('update_employee');
Route::post('/updated', [EmployeeController::class, 'updated'] )->name('updated');
Route::get('/employee_detail', [EmployeeController::class, 'employeeDetail'] )->middleware(['auth'])->name('employee_detail');
Route::get('/remove/{id}', [EmployeeController::class, 'remove'] )->middleware(['auth'])->name('remove');

require __DIR__.'/auth.php';
