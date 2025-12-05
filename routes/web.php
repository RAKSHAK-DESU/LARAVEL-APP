<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('home');
});
Route::get('/pricing',function(){
    return view('pricing');
}); 
 Route::get('/about/{name}',function($name){
   
    return view('about',['name'=>$name]);
});
//Route::view('/price','pricing');
Route::get('/testimonials/{client}',function($client){
    return view('testimonials',['client'=>$client]);
});
Route::get('/contact',function(){
    return view('contact');
});
route::redirect('/home','/pricing');

Route::get('user',[UserController::class,'getUser']); 
Route::get('about',[UserController::class,'aboutUser']);
Route::get('user/{name}',[UserController::class,'getUserName']);
Route::get('price/{name}',[UserController::class,'ShowPricing']);
Route::get('login',[UserController::class,'adminLogin']);

//Calling View
Route::view('/out','out'); 

Route::get('user-out',[UserController::class,'userEscape']);