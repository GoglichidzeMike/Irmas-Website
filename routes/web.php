<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LeadController;
use Illuminate\Support\Facades\Route;


//some public routes

Route::get('/', [HomeController::class,'index'])->name('home');

Route::get('/blogs', [HomeController::class,'blogs_index'])->name('blogs');    
Route::get('/blogs/{slug}', [HomeController::class,'blogs_show'])->name('public_blogs.show');

Route::get('/events', [HomeController::class,'events_index'])->name('events');    // TODO: need to move this to public-blogs
Route::get('/events/{slug}', [HomeController::class,'events_show'])->name('public_event.show'); // TODO: need to move this to public-blogs


//dashboard route
Route::get('/dashboard', [DashboardController::class,'index'])->name('dashboard');


//blogs route
Route::get('/dashboard/blogs', [BlogsController::class,'index_dashboard'])->name('blog.dashboard');
Route::get('/dashboard/blogs/create', [BlogsController::class,'create'])->name('blog.create');
Route::get('/dashboard/blogs/{slug}', [BlogsController::class,'show'])->name('blog.show');
Route::get('/dashboard/blogs/edit/{id}', [BlogsController::class,'edit'])->name('blog.edit');
Route::post('/dashboard/blogs/update/{id}', [BlogsController::class,'update'])->name('blog.update');
Route::post('/dashboard/blogs/{id}', [BlogsController::class,'destroy'])->name('blog.destroy');
Route::post('/dashboard/blog/upload', [BlogsController::class,'image_upload']);
Route::post('/blogs', [BlogsController::class,'store']);


//event controllers

Route::get('/dashboard/event', [EventController::class,'index_dashboard'])->name('event.dashboard');
Route::get('/dashboard/event/create', [EventController::class,'create'])->name('event.create');
Route::get('/dashboard/event/{slug}', [EventController::class,'show'])->name('event.show');
Route::get('/dashboard/event/edit/{id}', [EventController::class,'edit'])->name('event.edit');
Route::post('/dashboard/event/update/{id}', [EventController::class,'update'])->name('event.update');
Route::post('/dashboard/event/{id}', [EventController::class,'destroy'])->name('event.destroy');
Route::post('/dashboard/event/upload', [EventController::class,'image_upload']);

Route::post('/events', [EventController::class,'store'])->middleware('auth');


// contact controllers
Route::get('/dashboard/leads', [LeadController::class, 'index'])->name('lead.dashboard')->middleware('auth');
Route::post('/contact', [LeadController::class,'store'])->name('contact');
Route::post('/contact/leads/{id}', [LeadController::class, 'destroy'])->name('lead.destroy')->middleware('auth');
Route::get('/leads/export', [LeadController::class, 'exportCsv'])->name('lead.export')->middleware('auth');
Route::get('/leads/{id}', [LeadController::class, 'show'])->name('lead.show')->middleware('auth');

//Auth routes
Route::get('/login', [LoginController::class,'index'])->name('login');
Route::post('/login', [LoginController::class,'store']);
Route::get('/register', [RegisterController::class,'index'])->name('register');
Route::post('/register', [RegisterController::class,'store']);
Route::post('/logout', [LogoutController::class,'store'])->name('logout');