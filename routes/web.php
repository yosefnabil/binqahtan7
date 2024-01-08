<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('index');
});
Route::get('/home',function(){
    return view('index');
});
Route::get('login',function(){
        return view('login');
})->name('login');
Route::get('/open-new-account',function(){
    if(!Auth::check())
    return  redirect()->route('login');
return view('open-supply');
})->name('new-account');

Route::post('create-user',[UserController::class,'getLogin'])->name('create-user');
Route::post('check-otp',[UserController::class, 'checkOtp'])->name('otp.getlogin');
