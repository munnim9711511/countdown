<?php

use App\Http\Controllers\CountController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\NoticeController;
use App\Http\Controllers\SettingsController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use App\Models\Roles;
use App\Models\User;
use App\Models\Notice;
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

Route::get('/',[CountController::class,'index']);
Route::middleware('auth')->group(function(){
    Route::get('/set-count',[CountController::class,'setCount']);
    Route::post('/set-counter',[CountController::class,'post']);
    Route::get('/notice',[NoticeController::class,'index']);
    Route::post('/notice',[NoticeController::class,'post']);
    Route::get('/notice/{id}',[NoticeController::class,'delete']);
    Route::get('/notice/edit/{id}',[NoticeController::class,'edit']);
    Route::post('/notice/update',[NoticeController::class,'update']);
    Route::get('/settings',[SettingsController::class,'index']);
    Route::post('/settings/create',[SettingsController::class,'create']);
 
});

Route::get('/login',[LoginController::class,'index'])->name('login');
Route::post('/login',[LoginController::class,'login']);
Route::get('/logout',function(){
    Session::flush();

    Auth::logout();

    return redirect('login');
});
Route::get('/latest/get-latest', function () {
    $notice = new Notice();
    return $notice->latest()->first();
});
// Route::get('/creat-user',function(){

//     $user = new User();
//     $user->password = Hash::make('Welcome@123');
//     $user->name = 'admin';
//     $user->save();

//     $last = User::where('name','admin')->first();
//     $role = new Roles();
//     $role->user_id = $last->id;
//     $role->name ='Admin';
//     $role->save();
//     return 'user created';
// });


