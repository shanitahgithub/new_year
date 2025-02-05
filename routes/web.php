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




Route::resource('course-units', App\Http\Controllers\CourseUnitController::class);


Route::resource('lecturers', App\Http\Controllers\LecturerController::class);

Route::get('lecturers', [App\Http\Controllers\LecturerController::class, 'index'])->name('lecturers.index');

use App\Http\Controllers\StudentController;

Route::resource('students', StudentController::class);
use App\Http\Controllers\StudentApplicationController;

Route::resource('student_applications', StudentApplicationController::class);
Route::get('/student_applications', [StudentApplicationController::class, 'index'])->name('student_applications.index');


Route::resource('roles', App\Http\Controllers\RolesController::class);
use App\Http\Controllers\EnrollmentController;

Route::resource('enrollments', EnrollmentController::class);

// Route for bulk delete



Route::delete('students/bulk-delete', [StudentController::class, 'bulkDelete'])
    ->name('students.bulk-delete');
Route::post('/student_applications/bulk-delete', [StudentApplicationController::class, 'bulkDelete'])->name('student_applications.bulk-delete');
Route::post('/roles/bulk-delete', [App\Http\Controllers\RolesController::class, 'bulkDelete'])->name('roles.bulk-delete');
Route::post('/programs/bulk-delete', [App\Http\Controllers\ProgramController::class, 'bulkDelete'])->name('programs.bulk-delete');
Route::post('/semesters/bulk-delete', [App\Http\Controllers\SemesterController::class, 'bulkDelete'])->name('semesters.bulk-delete');
Route::post('/cohorts/bulk-delete', [App\Http\Controllers\CohortsController::class, 'bulkDelete'])->name('cohorts.bulk-delete');

Route::delete('/lecturers/bulk-delete', [App\Http\Controllers\LecturerController::class, 'bulkDelete'])->name('lecturers.bulkDelete');



Route::delete('course-units/bulk-delete', [App\Http\Controllers\CourseUnitController::class, 'bulkDelete'])->name('course-units.bulkDelete');

Route::post('/semesters/bulk-delete', [App\Http\Controllers\SemesterController::class, 'bulkDelete'])->name('semesters.bulk-delete');



Route::resource('enrollments', App\Http\Controllers\EnrollmentController::class);
// In routes/web.php
Route::delete('/users/bulk-destroy', [App\Http\Controllers\UserController::class, 'bulkDestroy'])->name('users.bulkDestroy');
