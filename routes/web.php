<?php

use Illuminate\Support\Facades\Route;

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

