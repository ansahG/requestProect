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
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('adminDashboard/index');
})->name('dashboard');



// admin routes
Route::middleware(['auth:sanctum'])->get('/manage_website' , [App\Http\Controllers\admin\adminController::class , 'manageWebsite'])->name('manageWebsite');
Route::middleware(['auth:sanctum'])->get('/manage_website/services' , [App\Http\Controllers\admin\adminController::class , 'services'])->name('adminServices');
Route::middleware(['auth:sanctum'])->get('/manage_website/services/{service}' , [App\Http\Controllers\admin\adminController::class , 'editService'])->name('editService');

Route::middleware(['auth:sanctum'])->get('/contact/{user}/{contact}' , [App\Http\Controllers\admin\contactController::class , 'editContact'])->name('contactInfo');
// project routes
Route::middleware(['auth:sanctum'])->get('/project' , [App\Http\Controllers\admin\projectController::class , 'addProject'])->name('addProject');
Route::middleware(['auth:sanctum'])->get('/project/{project}' , [App\Http\Controllers\admin\projectController::class , 'viewProject'])->name('viewProject');

