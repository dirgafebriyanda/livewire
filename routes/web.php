<?php
use App\Livewire\Home;
use App\Livewire\About;
use App\Livewire\Gallery;
use App\Livewire\Policy;
use App\Livewire\Auth\Register;
use App\Livewire\Auth\Login;
use App\Livewire\Dashboard\Logout;
use App\Livewire\Dashboard\Customer;
use App\Livewire\Dashboard\Dashboard;
use App\Livewire\Dashboard\User;
use App\Livewire\Dashboard\Product;
use App\Livewire\Dashboard\Profile;
use App\Livewire\Employee;
use App\Livewire\Product as LivewireProduct;
use Illuminate\Support\Facades\Route;

Route::get('/', Home::class)->name('home');
Route::get('/product', LivewireProduct::class)->name('product');
Route::get('/about', About::class)->name('about');
Route::get('/gallery', Gallery::class)->name('gallery');
Route::get('/policy', Policy::class)->name('policy');
Route::get('/employee', Employee::class);

Route::get('/dashboard', Dashboard::class)->name('dashboard')->middleware('auth');
Route::get('/dashboard/product', Product::class)->name('dashboard.product')->middleware('auth', 'role:Admin,Super-admin');
Route::get('/dashboard/customer', Customer::class)->name('dashboard.customer')->middleware('auth', 'role:Admin,Super-admin');
Route::get('/dashboard/user', User::class)->name('dashboard.user')->middleware('auth','role:Super-admin');
Route::get('/profile', Profile::class)->name('profile')->middleware('auth');
Route::get('/logout', Logout::class)->name('logout')->middleware('auth');

Route::middleware(['guest'])->group(function () {
    Route::get('/register', Register::class)->name('register');
    Route::get('/login', Login::class)->name('login');
});
