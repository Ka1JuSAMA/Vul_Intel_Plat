<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Backend\AssetController;


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

Route::get('/', function () {
    return view('auth/login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/News_Feed', function () {
    return view('/admin/news_feed');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::middleware(['auth','role:admin'])->group(function (){

    Route::get('/admin/dashboard', [AdminController::class, 'AdminDashboard'])->name('admin.dashboard');

    Route::get('/admin/logout', [AdminController::class, 'AdminLogout'])->name('admin.logout');

    Route::get('/admin/profile', [AdminController::class, 'AdminProfile'])->name('admin.profile');

    Route::post('/admin/profile/store', [AdminController::class, 'AdminProfileStore'])->name('admin.profile.store');

    Route::get('/admin/change/password', [AdminController::class, 'AdminChangePassword'])->name('admin.change.password');

    Route::post('/admin/update/password', [AdminController::class, 'AdminUpdatePassword'])->name('admin.update.password');

    //Asset route
    Route::controller(AssetController::class)->group(function(){

        Route::get('/all/asset', 'AllAsset')->name('all.asset');

        Route::get('/add/asset', 'AddAsset')->name('add.asset');

        Route::post('/store/asset', 'StoreAsset')->name('store.asset');

        Route::get('/edit/asset/{id}', 'EditAsset')->name('edit.asset');

        Route::post('/update/asset', 'UpdateAsset')->name('update.asset');

        Route::get('/delete/asset/{id}', 'DeleteAsset')->name('delete.asset');

    });

    //Business context route
    Route::controller(AssetController::class)->group(function(){

        Route::get('/all/context', 'AllContext')->name('all.context');

        Route::get('/add/context', 'AddContext')->name('add.context');

        Route::post('/store/context', 'StoreContext')->name('store.context');

        Route::get('/edit/context/{id}', 'EditContext')->name('edit.context');

        Route::post('/update/context', 'UpdateContext')->name('update.context');

        Route::get('/delete/context/{id}', 'DeleteContext')->name('delete.context');

    });


    //Post route
    Route::controller(AssetController::class)->group(function(){

        Route::get('/all/post', 'AllPost')->name('all.post');

        Route::get('/add/post', 'AddPost')->name('add.post');

        Route::post('/store/post', 'StorePost')->name('store.post');

        Route::get('/edit/post/{id}', 'EditPost')->name('edit.post');

        Route::post('/update/post', 'UpdatePost')->name('update.post');

        Route::get('/delete/post/{id}', 'DeletePost')->name('delete.post');

    });
});
