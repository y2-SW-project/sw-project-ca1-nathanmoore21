<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\Admin\JobController as AdminJobController;
use App\Http\Controllers\User\JobController as UserJobController;

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
    return view('welcome');
});

Auth::routes();

//how do i get home? (what is the route?)
//the route taken to get /home is:
//'home' is accessed when a user or admin clicks a link <a href> web.php is searched to find the name
//in this case its ('home') so now laravel knows that it can find out further code&functionality in 
//App\Http\Controllers\HomeController::class, 'index'
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('admin/home', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('admin.home');
Route::get('user/home', [App\Http\Controllers\User\HomeController::class, 'index'])->name('user.home');
Route::get('/', [PageController::class, 'welcome'])->name('welcome');
Route::get('/about', [PageController::class, 'about'])->name('about');
//The user can view index and view by id - therefore there will be a route for each. 
Route::get('/user/jobs/', [UserJobController::class, 'index'])->name('user.jobs.index');
Route::get('/user/jobs/{id}', [UserJobController::class, 'show'])->name('user.jobs.show');
Route::get('/admin/jobs/', [AdminJobController::class, 'index'])->name('admin.jobs.index');
Route::get('/admin/jobs/create', [AdminJobController::class, 'create'])->name('admin.jobs.create');
//view by id (show)
//id will be passed in and call the show() in admin\JobController
Route::get('/admin/jobs/{id}', [AdminJobController::class, 'show'])->name('admin.jobs.show');
Route::post('/admin/jobs/store', [AdminJobController::class, 'store'])->name('admin.jobs.store');
Route::get('/admin/jobs/{id}/edit', [AdminJobController::class, 'edit'])->name('admin.jobs.edit');
//update the job and put it into the databse
Route::put('/admin/jobs/{id}', [AdminJobController::class, 'update'])->name('admin.jobs.update');
//delete job from database using the delete route
Route::delete('/admin/jobs/{id}', [AdminJobController::class, 'destroy'])->name('admin.jobs.destroy');

