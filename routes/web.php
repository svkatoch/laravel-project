<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/login', function (Request $request) {
    $username = $request->input('username');
    $password = $request->input('password');

    if ($username === 'svkatoch' && $password === '12345') {
        return redirect()->route('products.index');
    } else {
        return redirect()->back()->with('error', 'Invalid username or password');
    }
})->name('login');

Route::resource('products', ProductController::class);
