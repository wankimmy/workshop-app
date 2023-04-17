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

Route::get('/', function () {
    return view('/auth/login');
});

Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');


Route::get('/reports', [App\Http\Controllers\ReportsController::class, 'index'])->name('reports');

Route::get('/vehicles', [App\Http\Controllers\VehiclesController::class, 'index'])->name('vehicles.index');
Route::get('/vehicles-datatable', [App\Http\Controllers\VehiclesController::class, 'vehiclesdatatable'])->name('vehicles.datatable');
Route::post('/vehicles/store', [App\Http\Controllers\VehiclesController::class, 'store'])->name('vehicles.store');
Route::get('/vehicles/create', [App\Http\Controllers\VehiclesController::class, 'create'])->name('vehicles.create');
Route::get('/vehicles/show/{id}', [App\Http\Controllers\VehiclesController::class, 'show'])->name('vehicles.show');
Route::post('vehicles/update', [App\Http\Controllers\VehiclesController::class, 'update']);
Route::delete('/vehicles/destroy/{id}', [App\Http\Controllers\VehiclesController::class, 'destroy'])->name('vehicles.destroy');
Route::get('/vehicles/edit/{id}', [App\Http\Controllers\VehiclesController::class, 'edit'])->name('vehicles.edit');