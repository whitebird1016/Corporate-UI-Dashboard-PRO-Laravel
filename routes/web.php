<?php

use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ResetPasswordController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\ItemController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return redirect('/dashboard');
})->middleware('auth');

Route::get('/register', [RegisterController::class, 'create'])
    ->middleware('guest')
    ->name('register');

Route::post('/register', [RegisterController::class, 'store'])
    ->middleware('guest');

Route::get('/login', [LoginController::class, 'create'])
    ->middleware('guest')
    ->name('login');

Route::post('/login', [LoginController::class, 'store'])
    ->middleware('guest');


Route::post('/logout', [LoginController::class, 'destroy'])
    ->middleware('auth')
    ->name('logout');

Route::get('/forgot-password', [ForgotPasswordController::class, 'create'])
    ->middleware('guest')
    ->name('password.request');

Route::post('/forgot-password', [ForgotPasswordController::class, 'store'])
    ->middleware('guest')
    ->name('password.email');

Route::get('/reset-password/{token}', [ResetPasswordController::class, 'create'])
    ->middleware('guest')
    ->name('password.reset');

Route::post('/reset-password', [ResetPasswordController::class, 'store'])
    ->middleware('guest');

Route::put('/laravel-examples/user-profile/update', [ProfileController::class, 'update'])->name('users.update');
Route::put('/laravel-examples/user-profile/updatePassword', [ProfileController::class, 'updatePassword'])->name('users.updatePassword');


Route::group(['middleware' => 'auth'], function () {
    Route::get('/laravel-examples/users-management', [UserController::class, 'index'])->name('users-management');
    Route::get('/laravel-examples/role-management', [RoleController::class, 'index'])->name('role-management');
    Route::get('/laravel-examples/category-management', [CategoryController::class, 'index'])->name('category-management');
    Route::get('/laravel-examples/tag-management', [TagController::class, 'index'])->name('tag-management');
    Route::get('/laravel-examples/item-management', [ItemController::class, 'index'])->name('item-management');
});


Route::get('/laravel-examples/create-user-management', [UserController::class, 'create'])->name('user-management.create');
Route::post('/laravel-examples/create-user-management', [UserController::class, 'store'])->name('user-management.store');
Route::get('/laravel-examples/edit-user-management/{id}', [UserController::class, 'edit'])->name('user-management.edit');
Route::put('/laravel-examples/edit-user-management/{id}', [UserController::class, 'update'])->name('user-management.update');
Route::post('/laravel-examples/delete-user-management/{id}', [UserController::class, 'destroy'])->name('user-management.destroy');


Route::get('/laravel-examples/create-role-management', [RoleController::class, 'create'])->name('role-management.create');
Route::post('/laravel-examples/create-role-management', [RoleController::class, 'store'])->name('role-management.store');
Route::get('/laravel-examples/edit-role-management/{id}', [RoleController::class, 'edit'])->name('role-management.edit');
Route::put('/laravel-examples/edit-role-management/{id}', [RoleController::class, 'update'])->name('role-management.update');
Route::post('/laravel-examples/delete-role-management/{id}', [RoleController::class, 'destroy'])->name('role-management.destroy');


Route::get('/laravel-examples/create-category-management', [CategoryController::class, 'create'])->name('category-management.create');
Route::post('/laravel-examples/create-category-management', [CategoryController::class, 'store'])->name('category-management.store');
Route::get('/laravel-examples/edit-category-management/{id}', [CategoryController::class, 'edit'])->name('category-management.edit');
Route::put('/laravel-examples/edit-category-management/{id}', [CategoryController::class, 'update'])->name('category-management.update');
Route::post('/laravel-examples/delete-category-management/{id}', [CategoryController::class, 'destroy'])->name('category-management.destroy');

Route::get('/laravel-examples/create-tag-management', [TagController::class, 'create'])->name('tag-management.create');
Route::post('/laravel-examples/create-tag-management', [TagController::class, 'store'])->name('tag-management.store');
Route::get('/laravel-examples/edit-tag-management/{id}', [TagController::class, 'edit'])->name('tag-management.edit');
Route::put('/laravel-examples/edit-tag-management/{id}', [TagController::class, 'update'])->name('tag-management.update');
Route::post('/laravel-examples/delete-tag-management/{id}', [TagController::class, 'destroy'])->name('tag-management.destroy');

Route::get('/laravel-examples/create-item-management', [ItemController::class, 'create'])->name('item-management.create');
Route::post('/laravel-examples/create-item-management', [ItemController::class, 'store'])->name('item-management.store');
Route::get('/laravel-examples/edit-item-management/{id}', [ItemController::class, 'edit'])->name('item-management.edit');
Route::put('/laravel-examples/edit-item-management/{id}', [ItemController::class, 'update'])->name('item-management.update');
Route::post('/laravel-examples/delete-item-management/{id}', [ItemController::class, 'destroy'])->name('item-management.destroy');


Route::get('/laravel-examples/user-profile', function () {
    return view('laravel-examples.user-profile');
})->middleware(['auth'])->name('user-profile');

Route::get('/dashboard', function () {
    return view('static-pages.dashboards.default');
})->name('default');

Route::get('/automotive', function () {
    return view('static-pages.dashboards.automotive');
})->name('automotive');

Route::get('/smart_home', function () {
    return view('static-pages.dashboards.smart_home');
})->name('smart_home');

Route::get('/CRM', function () {
    return view('static-pages.dashboards.CRM');
})->name('CRM');

Route::get('/billing', function () {
    return view('static-pages.pages.account.billing');
})->name('billing');

Route::get('/settings', function () {
    return view('static-pages.pages.account.settings');
})->name('settings');

Route::get('/invoice', function () {
    return view('static-pages.pages.account.invoice');
})->name('invoice');

Route::get('/security', function () {
    return view('static-pages.pages.account.security');
})->name('security');

Route::get('/new-user', function () {
    return view('static-pages.pages.users.new-user');
})->name('new-user');

Route::get('/reports', function () {
    return view('static-pages.pages.users.reports');
})->name('reports');

Route::get('/overview', function () {
    return view('static-pages.pages.profile.overview');
})->name('overview');

Route::get('/teams', function () {
    return view('static-pages.pages.profile.teams');
})->name('teams');

Route::get('/all_projects', function () {
    return view('static-pages.pages.profile.all_projects');
})->name('all_projects');

Route::get('/general', function () {
    return view('static-pages.pages.projects.general');
})->name('general');

Route::get('/timeline', function () {
    return view('static-pages.pages.projects.timeline');
})->name('timeline');

Route::get('/new_projects', function () {
    return view('static-pages.pages.projects.new_projects');
})->name('new_projects');

Route::get('/pricing-page', function () {
    return view('static-pages.pages.pricing-page');
})->name('pricing-page');

Route::get('/messages', function () {
    return view('static-pages.pages.messages');
})->name('messages');

Route::get('/widgets', function () {
    return view('static-pages.pages.widgets');
})->name('widgets');

Route::get('/charts', function () {
    return view('static-pages.pages.charts');
})->name('charts');

Route::get('/sweet-alerts', function () {
    return view('static-pages.pages.sweet-alerts');
})->name('sweet-alerts');

Route::get('/notifications', function () {
    return view('static-pages.pages.notifications');
})->name('notifications');

Route::get('/kanban', function () {
    return view('static-pages.applications.kanban');
})->name('kanban');

Route::get('/wizard', function () {
    return view('static-pages.applications.wizard');
})->name('wizard');

Route::get('/wallet', function () {
    return view('static-pages.applications.wallet');
})->name('wallet');

Route::get('/datatables', function () {
    return view('static-pages.applications.datatables');
})->name('datatables');

Route::get('/calendar', function () {
    return view('static-pages.applications.calendar');
})->name('calendar');

Route::get('/analytics', function () {
    return view('static-pages.applications.analytics');
})->name('analytics');

Route::get('/overview-ecommerce', function () {
    return view('static-pages.ecommerce.overview-ecommerce');
})->name('overview-ecommerce');

Route::get('/referral', function () {
    return view('static-pages.ecommerce.referral');
})->name('referral');

Route::get('/details', function () {
    return view('static-pages.ecommerce.orders.details');
})->name('details');

Route::get('/list', function () {
    return view('static-pages.ecommerce.orders.list');
})->name('list');

Route::get('/edit-product', function () {
    return view('static-pages.ecommerce.products.edit-product');
})->name('edit-product');

Route::get('/new-product', function () {
    return view('static-pages.ecommerce.products.new-product');
})->name('new-product');

Route::get('/product-page', function () {
    return view('static-pages.ecommerce.products.product-page');
})->name('product-page');

Route::get('/products-list', function () {
    return view('static-pages.ecommerce.products.products-list');
})->name('products-list');

Route::get('/404', function () {
    return view('static-pages.authentication.error.404');
})->name('404');

Route::get('/500', function () {
    return view('static-pages.authentication.error.500');
})->name('500');

Route::get('/basic-signin', function () {
    return view('static-pages.authentication.signin.basic-signin');
})->name('basic-signin');

Route::get('/cover-signin', function () {
    return view('static-pages.authentication.signin.cover-signin');
})->name('cover-signin');

Route::get('/illustration-signin', function () {
    return view('static-pages.authentication.signin.illustration-signin');
})->name('illustration-signin');

Route::get('/basic-signup', function () {
    return view('static-pages.authentication.signup.basic-signup');
})->name('basic-signup');

Route::get('/cover-signup', function () {
    return view('static-pages.authentication.signup.cover-signup');
})->name('cover-signup');

Route::get('/illustration-signup', function () {
    return view('static-pages.authentication.signup.illustration-signup');
})->name('illustration-signup');

Route::get('/basic-reset-password', function () {
    return view('static-pages.authentication.reset-password.basic-reset-password');
})->name('basic-reset-password');

Route::get('/cover-reset-password', function () {
    return view('static-pages.authentication.reset-password.cover-reset-password');
})->name('cover-reset-password');

Route::get('/illustration-reset-password', function () {
    return view('static-pages.authentication.reset-password.illustration-reset-password');
})->name('illustration-reset-password');

Route::get('/basic-lock', function () {
    return view('static-pages.authentication.lock.basic-lock');
})->name('basic-lock');

Route::get('/cover-lock', function () {
    return view('static-pages.authentication.lock.cover-lock');
})->name('cover-lock');

Route::get('/illustration-lock', function () {
    return view('static-pages.authentication.lock.illustration-lock');
})->name('illustration-lock');

Route::get('/basic-validation', function () {
    return view('static-pages.authentication.validation.basic-validation');
})->name('basic-validation');

Route::get('/cover-validation', function () {
    return view('static-pages.authentication.validation.cover-validation');
})->name('cover-validation');

Route::get('/illustration-validation', function () {
    return view('static-pages.authentication.validation.illustration-validation');
})->name('illustration-validation');
