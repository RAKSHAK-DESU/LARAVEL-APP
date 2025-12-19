<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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
Route::get('about', [UserController::class, 'aboutUser']);
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
    Route::get('stdshow', 'show');
    Route::get('stdadd', 'add');
    Route::get('stddelete','delete');
    Route::get('notabout/{name}','notabout');
});
