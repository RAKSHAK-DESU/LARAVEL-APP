<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\EloquentUserController;
use App\Http\Controllers\ChildrenController;
use App\Http\Controllers\HttpController;
use App\Http\Controllers\SessionUserController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\FlashUserController;
use App\Http\Middleware\AgeCheck;
use App\Http\Middleware\CountryCheck;
use App\Http\Middleware\GenderCheck;
use Illuminate\Support\Facades\Route;
use PHPUnit\Framework\Constraint\Count;

Route::get('/', function () {
    return view('home');
});
Route::get('/pricing', function () {
    return view('pricing');
});
Route::get('/about/{name}', function ($name) {

    return view('about', ['name' => $name]);
});
// Route::view('/price','pricing');
Route::get('/testimonials/{client}', function ($client) {
    return view('testimonials', ['client' => $client]);
});
Route::get('/contact', function () {
    return view('contact');
});
route::redirect('/hme', '/pricing');

Route::get('user', [UserController::class, 'getUser']);
Route::get('about', [UserController::class, 'aboutUser'])->middleware('check1');
Route::get('user/{name}', [UserController::class, 'getUserName']);
Route::get('price/{name}', [UserController::class, 'ShowPricing']);
Route::get('login', [UserController::class, 'adminLogin']);

// Calling View
Route::view('/out', 'out');

Route::get('user-out', [UserController::class, 'userEscape']);

Route::prefix('student')->group(function () {
    Route::view('/home', 'homee');
    Route::get('/show', [HomeController::class, 'show']);
    Route::get('/add', [HomeController::class, 'add']);
});

Route::prefix('student/Japan')->group(function () {
    Route::view('/home', 'homee');
    Route::get('/show', [HomeController::class, 'show']);
    Route::get('/add', [HomeController::class, 'add']);
});

Route::controller(StudentController::class)->group(function () {
    Route::get('stdshow', 'show')->middleware([AgeCheck::class,CountryCheck::class,GenderCheck::class]);
    Route::get('stdadd', 'add');
    Route::get('stddelete','delete');
    Route::get('notabout/{name}','notabout');
});

Route::get('users1',[UserController::class,'users1']);
Route::get('students',[StudentController::class,'getStudent']);
Route::get('uszzr',[UserController::class,'getUser1']);

Route::get('getusers',[UsersController::class,'queries']);
Route::get('eloquentUser',[EloquentUserController::class,'queries']); 
Route::get('children',[ChildrenController::class,'any']);
Route::post('children',[ChildrenController::class,'any']);
Route::put('children',[ChildrenController::class,'any']);
Route::delete('children',[ChildrenController::class,'any']);

Route::any('children',[ChildrenController::class,'any']);

Route::match(['post','get'],'/children',[ChildrenController::class,'group1']);
Route::match(['put','delete'],'/children',[ChildrenController::class,'group2']);

Route::post('httpuser',[HttpController::class,'login']);
Route::view('httpform','HttpUser');
Route::view('sessionlogin','SessionLogin');
Route::post('sessionlogin',[SessionUserController::class,'login']);

Route::view('sessionprofile','sessionprofile');
Route::get('sessionlogout',[SessionUserController::class,'logout']);

Route::view('flashuser','FlashUser');
Route::post('flashadd',[FlashUserController::class,'addUser']);

Route::view('upload','upload');
Route::post('upload',[UploadController::class,'upload']);