<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Models\Article;
use App\Models\Category;
use App\Models\Contribution;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Payment;
use App\Models\Product;
use App\Models\User;


Route::get('/home', [HomeController::class, 'displayHome'])->name('home');



Route::get('/', [AuthController::class, 'redirect'])->name('login');
Route::get('/login', [AuthController::class, 'goToLogin'])->name('login');
Route::get('/register', [AuthController::class, 'goToRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.submit');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');




Route::get('/article', function () {
    $articles = Article::all(); // Fetch all articles from the database
    return view('article', compact('articles')); // Pass the articles to the view
})->name('article'); // Add a name to this route

Route::get('/merchandise', function () {
    return view('merchandise');
})->name('merchandise');

Route::get('/contribute', function () {
    return view('contribute');
})->name('contribute');

Route::get('/account', function () {
    return view('account');
})->name('account');

Route::get('/profile', function () {
    return view('profile');
})->name('profile');

Route::get('/profileUpdate', function () {
    return view('profileUpdate');
})->name('profileUpdate');

Route::get('/contact', [ContactController::class, 'showForm'])->name('contact.form');
Route::post('/contact', [ContactController::class, 'submitForm'])->name('contact.submit');
Route::get('/logout', [AuthController::class, 'logout'])->name('profile.logout');
Route::post('/profile-delete', [AuthController::class, 'deleteAccount'])->name('profile.delete');




