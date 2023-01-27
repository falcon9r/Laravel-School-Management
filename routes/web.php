<?php

use App\Http\Controllers\Admin\ClassesController;
use App\Http\Controllers\Admin\Dashboard;
use App\Http\Controllers\Admin\ScheduleController;
use App\Http\Controllers\Admin\StudentController;
use App\Http\Controllers\Admin\SubjectController;
use App\Http\Controllers\Admin\TeacherController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Landing\HomeController;
use Illuminate\Support\Facades\Route;

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


Route::get('login', [LoginController::class, 'show'])->name('login');
Route::post('login', [LoginController::class, 'login'])->name('login');

Route::prefix('{locale}')
    ->where(['locale' => '^|([a-zA-Z]{2})'])
    ->middleware('set-locale')
    ->group(function () {
        Route::get('/', [HomeController::class, 'index'])->name('home');
        Route::get('/photo-gallery', [\App\Http\Controllers\Landing\PhotoGalleryController::class, 'index'])->name('photo-gallery');
    });


Route::middleware('auth')->group(function () {
    Route::group(['prefix' => 'admin'], function () {
        Route::get('dashboard' , [ Dashboard::class, 'index' ])->name('admin.dashboard');
        Route::resource('classes' , ClassesController::class , ['names' => 'admin.classes']);
        Route::resource('subjects' , SubjectController::class , ['names' => 'admin.subjects' ]);
        Route::resource('teachers' , TeacherController::class , ['names' => 'admin.teachers']);
        Route::resource('students', StudentController::class , ['names' => 'admin.students'])->except(['create']);
        Route::get('students/{student_id}/create' , [StudentController::class, 'create'])->name('admin.students.create');
        Route::get('schedules/{class_id}/edit/{day_id}' , [ScheduleController::class , 'edit'])->name('admin.schedules.edit');
        Route::post('schedules' , [ScheduleController::class , 'store'])->name('admin.schedules.store');
        Route::resource('photo-gallery' , \App\Http\Controllers\Admin\PhotoGalleryController::class , ['names' => 'admin.photo-gallery']);
        Route::get('photo-gallery-archive', [\App\Http\Controllers\Admin\PhotoGalleryController::class , 'archive' ])->name('admin.photo-gallery.archive');
        Route::resource('news', \App\Http\Controllers\Admin\NewsController::class , ['names' => 'admin.news']);
        Route::resource('achievements',\App\Http\Controllers\Admin\AchievementController::class , ['names' => 'admin.achievements'] );
    });
});
