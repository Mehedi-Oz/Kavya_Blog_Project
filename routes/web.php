<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\CommentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;


//BlogController
Route::get('/', [BlogController::class, 'index'])->name('home');
Route::get('/details-blog/{id}', [BlogController::class, 'detailsBlog'])->name('details-blog');

//CustomerController
Route::get('/register-customer', [CustomerController::class, 'registerCustomer'])->name('register-customer');
Route::post('/new-customer', [CustomerController::class, 'saveCustomer'])->name('new-customer');
Route::get('/login-customer', [CustomerController::class, 'loginCustomer'])->name('login-customer');
Route::post('/login-customer', [CustomerController::class, 'loginCustomerCheck'])->name('login-customer');
Route::get('/customer-logout', [CustomerController::class, 'logoutCustomer'])->name('customer-logout');

//CommentController
Route::post('new-comment', [CommentController::class, 'saveComment'])->name('new-comment');

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

    //BlogController
    Route::get('/add-blog', [BlogController::class, 'addBlog'])->name('add-blog');
    Route::post('/new-blog', [BlogController::class, 'saveBlog'])->name('new-blog');
    Route::get('/manage-blog', [BlogController::class, 'manageBlog'])->name('manage-blog');
    Route::get('/edit-blog/{id}', [BlogController::class, 'editBlog'])->name('edit-blog');
    Route::post('/update-blog', [BlogController::class, 'updateBlog'])->name('update-blog');
    Route::get('/status-blog/{id}', [BlogController::class, 'statusBlog'])->name('status-blog');
    Route::post('/delete-blog', [BlogController::class, 'deleteBlog'])->name('delete-blog');

});
