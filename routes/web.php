<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentPreferenceController;

Route::get('/', function () {
    return view('homepage');
})->name('homepage');

Route::get('/about', function () {
    return view('about');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/contactus', function () {
    return view('contactus');
});

Route::get('/student', function () {
    return view('student');
});

Route::get('/studentpreference', function () {
    return view('studentpreference');
});

Route::get('/studentpreference/{profession}', [StudentPreferenceController::class, 'showProfessionList']);
