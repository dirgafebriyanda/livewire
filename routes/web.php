<?php

use App\Livewire\Home;
use App\Livewire\Product;
use App\Livewire\About;
use App\Livewire\Contact;
use App\Livewire\Faq;
use App\Livewire\Auth\Register;
use App\Livewire\Auth\Login;
use App\Livewire\Dashboard\Dashboard;
use App\Livewire\Dashboard\User;
use Illuminate\Support\Facades\Route;

Route::get('/', Home::class);
Route::get('/product', Product::class);
Route::get('/about', About::class);
Route::get('/contact', Contact::class);
Route::get('/faq', Faq::class);

// Route::group(['middleware' => 'auth'], function () {
//     Route::get('/dashboard', Dashboard::class);
//     Route::get('/dashboard/user', User::class);
// });
Route::get('/dashboard', Dashboard::class);
Route::get('/dashboard/user', User::class);

Route::group(['middleware' => 'guest'], function () {
    Route::get('/register', Register::class)->name('register');
    Route::get('/login', Login::class)->name('login');
});
