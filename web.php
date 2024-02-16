<?php

use App\Http\Controllers\testapi;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('getnumber',[testapi::class,'getnumber']);
Route::get('/senddata/{point}/{id?}',[testapi::class,'senddata']);
Route::get('/addNav',[App\Http\Controllers\HomeController::class, 'addNav'])->name('addNav');
Route::post('/formNav',[App\Http\Controllers\HomeController::class, 'formNav'])->name('formNav');
Route::get('/slide',[App\Http\Controllers\HomeController::class, 'slide'])->name('slide');
Route::get('/game',[App\Http\Controllers\HomeController::class, 'game'])->name('game');
Route::get('/host',[App\Http\Controllers\HomeController::class, 'host'])->name('host');
Route::get('/form', [App\Http\Controllers\HomeController::class, 'form'])->name('form');

Route::get('/stutab', [App\Http\Controllers\HomeController::class, 'stutab'])->name('stutab');

Route::post('/register', [App\Http\Controllers\HomeController::class, 'register'])->name('register');
Route::get('/delete/{id}', [App\Http\Controllers\HomeController::class, 'delete'])->name('delete');
Route::get('/edit/{id}', [App\Http\Controllers\HomeController::class, 'edit'])->name('edit');
Route::post('/update/{id}', [App\Http\Controllers\HomeController::class, 'update'])->name('update');
Route::get('imageupload',[App\Http\Controllers\HomeController::class, 'imageupload'])->name('imageupload');
Route::post('upload',[App\Http\Controllers\HomeController::class, 'upload'])->name('upload');

Route::get('displayImage',[App\Http\Controllers\HomeController::class, 'displayImage'])->name('displayImage');
Route::get('/deleteimage/{id}',[App\Http\Controllers\HomeController::class, 'deleteimage'])->name('deleteimage');
Route::get('/editimage/{id}',[App\Http\Controllers\HomeController::class, 'editimage'])->name('editimage');
Route::post('/updateimage/{id}',[App\Http\Controllers\HomeController::class, 'updateimage'])->name('updateimage');


// Route::get('slide', function () {
//     return view('slide');
// });
Route::get('slide',[App\Http\Controllers\HomeController::class, 'slide'])->name('slide');

// Route::get('addimage',[App\Http\Controllers\HomeController::class, 'addimage'])->name('addimage');
Route::get('form1',[App\Http\Controllers\HomeController::class, 'form1'])->name('form1');
Route::post('/contact',[App\Http\Controllers\HomeController::class, 'contact'])->name('contact');
Route::get('/schoolinfo',[App\Http\Controllers\HomeController::class, 'schoolinfo'])->name('schoolinfo');

Route::post('/logo',[App\Http\Controllers\HomeController::class, 'logo'])->name('logo');
Route::get('/disp-name-logo',[App\Http\Controllers\HomeController::class, 'fetchschoolinfo'])->name('fetchschoolinfo');
Route::get('/editlogoname/{id}',[App\Http\Controllers\HomeController::class, 'editlogoname'])->name('editlogoname');
Route::post('/uploadnamelogo/{id}',[App\Http\Controllers\HomeController::class, 'uploadnamelogo'])->name('uploadnamelogo');
// Route::get('/addNav',[App\Http\Controllers\HomeController::class, 'addNav'])->name('addNav');

// Route::post('/formNav',[App\Http\Controllers\HomeController::class, 'formNav'])->name('formNav');


// Route::get('/sidebar',function(){
// return view('sidebar');
// });
Route::post('/getintouch',[App\Http\Controllers\HomeController::class, 'getintouch'])->name('getintouch');
Route::post('/subscribe',[App\Http\Controllers\HomeController::class, 'subscribe'])->name('subscribe');

Route::post('/uploadTestimonial',[App\Http\Controllers\HomeController::class, 'uploadTestimonial'])->name('uploadTestimonial');


