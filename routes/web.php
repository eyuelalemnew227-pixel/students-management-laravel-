<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get("about-us", function () {
//     return view("aboutus");    
// });

// Route::get('about-us/{name?}/{id?}', function ($name = null, $id = null) {
//     return view('aboutus', compact('name', 'id'));
// });
Route::get('contact-us/{name?}/{id?}', function ($name = null, $id = null) {
    return view('contactus', compact('name', 'id'));
});


Route::controller(StudentController::class)->group(function(){
    route::get('student', 'index');
    route::get('about-us/{id}/{name}', 'aboutus');
});