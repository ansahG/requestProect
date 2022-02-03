<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Crypt;

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

// guest Routes right here
Route::get('/', function () {
    return view('guestsViews/index');
});

Route::get('/Thank You', function () {
    return view('guestsViews.thankYou');
})->name('thankYou');


// this will load for us apage for the guest who is there to request for his project
// this is routed form the livewire component that works as the search function pnly if it finds a project matching the input data
Route::get('/request_Project/{projectId}', [App\Http\Controllers\admin\projectController::class , 'guestViewProject'])->name('loadFoundProject');



// admin Routes for the admin backend

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('adminDashboard/index');
        // return view('dashboard');

})->name('dashboard');



// guestRoutes
// Route::controller(OrderController::class)->group(function () {
//     Route::get('/orders/{id}', 'show');
//     Route::post('/orders', 'store');
// });

// // social routes for users
// Route::get('/facebook', [App\Http\Controllers\guestControllers\guestSocialInformationController::class , 'facebook'])->name('facebook');
// Route::get('/whatsapp', [App\Http\Controllers\guestControllers\guestSocialInformationController::class , 'whatsapp'])->name('whatsapp');
// Route::get('/linkedIn', [App\Http\Controllers\guestControllers\guestSocialInformationController::class , 'linkedIn'])->name('linkedIn');
// Route::get('/Instagram', [App\Http\Controllers\guestControllers\guestSocialInformationController::class , 'Instagram'])->name('Instagram');
// Route::get('/twitter', [App\Http\Controllers\guestControllers\guestSocialInformationController::class , 'twitter'])->name('twitter');


// Route::get('contact/{facebook}', [App\Http\Controllers\guestControllers\guestSocialInformationController::class , 'facebook'])->name('facebook');
// Route::get('contact/{whatsapp}', [App\Http\Controllers\guestControllers\guestSocialInformationController::class , 'whatsapp'])->name('whatsapp');
// Route::get('contact/{linkedIn}', [App\Http\Controllers\guestControllers\guestSocialInformationController::class , 'linkedIn'])->name('linkedIn');
// Route::get('contact/{Instagram}', [App\Http\Controllers\guestControllers\guestSocialInformationController::class , 'Instagram'])->name('Instagram');
// Route::get('contact/{twitter}', [App\Http\Controllers\guestControllers\guestSocialInformationController::class , 'twitter'])->name('twitter');






// admin routes
// set the auth route register to false in the config/fortify under featured, i just commented that feature out

Route::middleware(['auth:sanctum'])->get('/manage_website' , [App\Http\Controllers\admin\adminController::class , 'manageWebsite'])->name('manageWebsite');
Route::middleware(['auth:sanctum'])->get('/manage_website/'.config('app.name').'/{aboutus}' , [App\Http\Controllers\admin\adminController::class , 'aboutUseEdit'])->name('editAboutUs');
Route::middleware(['auth:sanctum'])->get('/manage_website/services' , [App\Http\Controllers\admin\adminController::class , 'services'])->name('adminServices');
Route::middleware(['auth:sanctum'])->get('/manage_website/services/{service}' , [App\Http\Controllers\admin\adminController::class , 'editService'])->name('editService');
    




// project routes
Route::middleware(['auth:sanctum'])->get('/project' , [App\Http\Controllers\admin\projectController::class , 'addProject'])->name('addProject');
Route::middleware(['auth:sanctum'])->get('/project/{project}' , [App\Http\Controllers\admin\projectController::class , 'AdminViewProject'])->name('viewProject');

// bookings for the site
// create bookings. from the visitors plartform;
// this does not use a controller because it is just a single function class
// Route::middleware(['auth:sanctum'])->get('/bookings' ,[App\Http\Livewire\MakeBookingComponent::class, 'render'])->name('makeBookingd');

Route::middleware(['auth:sanctum'])->get('/bookings/inbox' ,[App\Http\Controllers\admin\checkBookingsController::class, 'allBookings'])->name('checkBookings');
Route::middleware(['auth:sanctum'])->get('/bookings/message/{bookings}' ,[App\Http\Controllers\admin\checkBookingsController::class, 'readMessage'])->name('readMessage');


