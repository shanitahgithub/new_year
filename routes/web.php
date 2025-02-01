<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();


Route::resource('programs', App\Http\Controllers\ProgramController::class);
Route::resource('settings', App\Http\Controllers\SettingController::class);


Route::resource('users', App\Http\Controllers\UserController::class);


Route::resource('semesters', App\Http\Controllers\SemesterController::class);


Route::resource('cohorts', App\Http\Controllers\CohortsController::class);


// Route::get('/course-units', [App\Http\Controllers\CourseUnitController::class, 'index'])->name('course-units.index');

Route::resource('course-units', App\Http\Controllers\CourseUnitController::class);

Route::resource('lecturers', App\Http\Controllers\LecturerController::class);

Route::get('lecturers', [App\Http\Controllers\LecturerController::class, 'index'])->name('lecturers.index');

use App\Http\Controllers\StudentController;

Route::resource('students', StudentController::class);
use App\Http\Controllers\StudentApplicationController;

Route::resource('student_applications', StudentApplicationController::class);
Route::get('/student_applications', [StudentApplicationController::class, 'index'])->name('student_applications.index');


Route::resource('roles', App\Http\Controllers\RolesController::class);
