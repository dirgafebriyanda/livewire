<?php

use App\Livewire\Home;
use App\Livewire\About;
use App\Livewire\Contact;
use App\Livewire\Faq;
use App\Livewire\Auth\Register;
use App\Livewire\Auth\Login;
use App\Livewire\Dashboard\Customer;
use App\Livewire\Dashboard\Dashboard;
use App\Livewire\Dashboard\User;
use App\Livewire\Dashboard\Product;
use App\Livewire\Employee;
use App\Livewire\Product as LivewireProduct;
use Illuminate\Support\Facades\Route;

Route::get('/', Home::class)->name('home');
Route::get('/product', LivewireProduct::class);
Route::get('/about', About::class);
Route::get('/contact', Contact::class);
Route::get('/faq', Faq::class);
Route::get('/employee', Employee::class);

// Route::group(['middleware' => 'auth'], function () {
//     Route::get('/dashboard', Dashboard::class);
//     Route::get('/dashboard/user', User::class);
// });
Route::get('/dashboard', Dashboard::class)->name('dashboard');
Route::get('/dashboard/user', User::class)->name('dashboard.user');
Route::get('/dashboard/product', Product::class)->name('dashboard.product');
Route::get('/dashboard/customer', Customer::class)->name('dashboard.customer');

Route::group(['middleware' => 'guest'], function () {
    Route::get('/register', Register::class)->name('register');
    Route::get('/login', Login::class)->name('login');
});
