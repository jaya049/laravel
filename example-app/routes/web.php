<?php

use Illuminate\Support\Facades\Route;
use App\HTTP\Controllers\UserController;//setting controller path
use App\HTTP\Controllers\MemberController;
use App\HTTP\Controllers\ProductController;
use App\HTTP\Controllers\UserAuthController;



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
/*
Route::get('/{n}', function ($name) {
    echo $name;
    return view('welcome');
});
*/
Route::get('/about', function () {
    return view('welcome');
});
Route::get('/contact', function () {
    return view('welcome');
});

Route::view('/about','about');
// setting route to our controller 
//Route::get('user',[UserController::class,'index']);
Route::get('user',[UserController::class,'about']);
Route::get('user1/{name}',[UserController::class,'url']);
Route::get('login/',function(){
    return view('login');
});
Route::view('mem','member');
Route::get('table',[MemberController::class,'memberadd']);//Insert form data into db table
Route::get('list',[MemberController::class,'memberview']);//view table data
Route::get('delete/{id}',[MemberController::class,'delete']); //delete action
Route::get('update/{id}',[MemberController::class,'update_form_view']);//update action
Route::post('/update_action',[MemberController::class,'update']);

//work2
Route::view('form','product_form');
Route::post('insert',[ProductController::class,'insert']);//insert form data into db
Route::get('product_list',[ProductController::class,'product_view_list']);//view table data
Route::get('product_update/{id}',[ProductController::class,'product_updates']);//view table data
Route::post('/proupdate_action',[ProductController::class,'proupdate']);
Route::get('prodelete/{id}',[ProductController::class,'prodelete']);
//Login form2
Route::view('/login_form','login_form');
Route::get('welcomepage',[ProductController::class,'welcomepage']);
Route::view('profile','welcomepage');
//work auth

Route::view('sample','sample');

Route::view('loginform3','auth/loginform3');
Route::view('registration','auth/registrationform3');
Route::view('dashboard','auth/dashboard');
Route::get('regist',[UserAuthController::class,'validate_reg']);
Route::get('check',[UserAuthController::class,'check']);
