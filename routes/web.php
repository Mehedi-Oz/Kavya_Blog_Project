<?php

use App\Http\Controllers\AuthorController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoryController;


//BlogController
Route::get('/', [BlogController::class, 'index'])->name('home');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    //DashboardController
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    //CategoryController
    Route::get('/add-category', [CategoryController::class, 'addCategory'])->name('add-category');
    Route::post('/new-category', [CategoryController::class, 'saveCategory'])->name('new-category');
    Route::get('/manage-category', [CategoryController::class, 'manageCategory'])->name('manage-category');
    Route::get('/edit-category/{id}', [CategoryController::class, 'editCategory'])->name('edit-category');
    Route::post('/update-category', [CategoryController::class, 'updateCategory'])->name('update-category');
    Route::get('/status-category/{id}', [CategoryController::class, 'statusCategory'])->name('status-category');
    Route::post('/delete-category', [CategoryController::class, 'deleteCategory'])->name('delete-category');


    //AuthorController
    Route::get('/add-author', [AuthorController::class, 'addAuthor'])->name('add-author');
    Route::post('/new-author', [AuthorController::class, 'saveAuthor'])->name('new-author');
    Route::get('/manage-author', [AuthorController::class, 'manageAuthor'])->name('manage-author');
    Route::get('/edit-author/{id}', [AuthorController::class, 'editAuthor'])->name('edit-author');
    Route::post('/update-author', [AuthorController::class, 'updateAuthor'])->name('update-author');
    Route::get('/status-author/{id}', [AuthorController::class, 'statusAuthor'])->name('status-author');
    Route::post('/delete-author', [AuthorController::class, 'deleteAuthor'])->name('delete-author');


});
