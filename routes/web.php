<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectsController;
use Illuminate\Support\Facades\Route;

// home
Route::get('/', [HomeController::class, 'index'])->name('home.index');

// about
Route::get('/about', [AboutController::class, 'index'])->name('about.index');

// contact
Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
Route::post('/contact', [ContactController::class, 'send'])->name('send');

// projects
Route::get('/projects', [ProjectsController::class, 'index'])->name('projects.index');

// projects - development
Route::get('/projects/web-development/citas', [ProjectsController::class, 'citasweb'])->name('projects.citasweb');
Route::get('/projects/web-development/citas-api', [ProjectsController::class, 'citasapi'])->name('projects.citasapi');
Route::get('/projects/web-development/blog', [ProjectsController::class, 'blog'])->name('projects.blog');
Route::get('/projects/web-development/portfolio', [ProjectsController::class, 'portfolio'])->name('projects.portfolio');

// projects - design
Route::get('projects/ux-ui-design/portfolio', [ProjectsController::class, 'designPortfolio'])->name('projects.designportfolio');
Route::get('projects/ux-ui-design/onstore-app', [ProjectsController::class, 'designOnstore'])->name('projects.designonstore');