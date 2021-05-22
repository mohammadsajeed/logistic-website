<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\sliderController;
use App\Http\Controllers\serviceController;
use App\Http\Controllers\projectController;
use App\Http\Controllers\aboutController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\adController;



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

Route::get('/home', function () {
    return view('index');
})->middleware(['auth'])->name('index');
 Route::get('slider', [sliderController::class, 'red_slider'])->middleware(['auth'])->name('slider');
 Route::post('add_slider', [sliderController::class, 'add_slider'])->middleware(['auth'])->name('add_slider');
 Route::post('"slider_delete/{id}', [sliderController::class, 'slider_delete']);
 Route::get('/service', [serviceController::class, 'red_service'])->middleware(['auth'])->name('service');
 Route::post('add_service', [serviceController::class, 'add_service'])->middleware(['auth'])->name('add_service');
 Route::get('service_delete/{id}', [serviceController::class, 'service_delete'])->middleware(['auth'])->name('service_delete');
 Route::get('/project', [projectController::class, 'red_project'])->middleware(['auth'])->name('project');
 Route::post('add_project', [projectController::class, 'add_project'])->middleware(['auth'])->name('add_porject');
 Route::get('project_delete/{id}', [projectController::class, 'delete_project'])->middleware(['auth'])->name('project_delete');
 Route::get('/about', [aboutController::class, 'red_about'])->middleware(['auth'])->name('about');
 Route::post('add_about', [aboutController::class, 'add_about'])->middleware(['auth'])->name('add_about');
 Route::get('about_delete/{id}', [aboutController::class, 'about_delete'])->middleware(['auth'])->name('about_delete');
 Route::get('contact', [contactController::class, 'contact_red'])->middleware(['auth'])->name('contact_red');
 Route::post('add_contact',[contactController::class,'add_contact'])->middleware(['auth'])->name('add_contact');
 Route::get('contact_delete/{id}', [contactController::class, 'delete_contcat'])->middleware(['auth'])->name('delete_contact');
 Route::get('advisor', [adController::class, 'red_advisor'])->middleware(['auth'])->name('red_advisor');
 Route::post('add_adviser', [adController::class, 'add_adviser'])->middleware(['auth'])->name('add_adviser');
 Route::get('delete_ad/{id}', [adController::class, 'delete_ad'])->middleware(['auth'])->name('delete_ad');
   // after  this   front end routs
     
   Route::get('/get', [aboutController::class, 'web_red']);
   Route::get('/getad', [adController::class, 'web_red']);
   Route::get('/getservice', [serviceController::class, 'getservice']);
   Route::get('/getproject', [projectController::class, 'getproject']);
   Route::get('/getadvisor', [adController::class, 'front_red']);
   Route::get('/get_advisor', [adController::class, 'web_red']);
   Route::get('/getcontact', [contactController::class, 'getcontact']);
   Route::post('/sendemail', [contactController::class, 'sendemail']);
   Route::get('/get_service/{id}', [serviceController::class, 'get_service']);
   Route::get('/get_about', [aboutController::class, 'get_about']);
   Route::get('/get_service', [serviceController::class, 'red_service_front']);
   Route::get('/team', [adController::class, 'get_team_front']);
   Route::get('/get_project', [projectController::class, 'get_project']);
   Route::get('get_slider', [sliderController::class, 'get_slider']);
Route::view('/','welcome');

require __DIR__.'/auth.php';
