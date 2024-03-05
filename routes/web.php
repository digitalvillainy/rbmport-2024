<?php

use App\Livewire\Blog;
use App\Livewire\Contact;
use App\Livewire\Hired;
use App\Livewire\Home;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', Home::class);
Route::get('/hire-a-dev', Hired::class);
Route::get('/contact', Contact::class);
Route::get('/blog', Blog::class);
