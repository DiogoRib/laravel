<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\CrudUserController;
use App\Http\Controllers\UserController;

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
    return view('auth.login');
});

Route::get('/login',[CustomAuthController::class,'login'])->middleware('alreadyLoggedIn');

Route::get('/registration',[CustomAuthController::class,'registration'])->middleware('alreadyLoggedIn');

Route::post('/register-user', [CustomAuthController::class, 'registerUser'])->name('register-user');
Route::post('/login-user', [CustomAuthController::class, 'loginUser'])->name('login-user');

Route::get('/dashboard',[CustomAuthController::class , 'dashboard'])->middleware('isLoggedIn');

Route::get('/logout',[CustomAuthController::class , 'logout']);

Route::get("/edit-user/{id}",[CrudUserController::class,"editUser"]);
Route::post("/edit-user",[CrudUserController::class,"updateUser"])->name('edit-user');

Route::get("/add-user",function(){
    return view("crud.addUser");
})->name("user.add");

Route::get("/delete-user/{id}",[CrudUserController::class,"deleteUser"])->name('user.delete');
