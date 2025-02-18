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
Route::resource('referral_sources', App\Http\Controllers\ReferralSourceController::class);
Route::resource('referrals', App\Http\Controllers\StudentApplicationReferralSourceController::class);


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


Route::post('/apply', [StudentApplicationController::class, 'store']);
Route::post('/approve/{id}', [StudentApplicationController::class, 'approveStudent'])->middleware('auth'); // Ensure only admins approve
Route::resource('student_applications', StudentApplicationController::class);
// Route::put('/students/{students}', [StudentApplicationController::class, 'update'])->name('students.update');
// Route::delete('/students/{student}', [StudentApplicationController::class, 'destroy'])->name('students.destroy');
Route::post('/student-applications', [StudentApplicationController::class, 'store'])->name('student_applications.store');
Route::post('/applications/{id}/approve', [StudentApplicationController::class, 'approveStudent'])->name('applications.approve');
Route::put('/student_applications/{id}', [StudentApplicationController::class, 'update'])->name('student_applications.update');
// Route::delete('/courses/bulk-destroy', [CourseUnitController::class, 'bulkDestroy'])->name('courses.bulkDestroy');
Route::delete('/course-units/bulk-destroy', [App\Http\Controllers\CourseUnitController::class, 'bulkDestroy'])->name('course-units.bulkDestroy');


use App\Http\Controllers\RecentActivityController;

Route::get('/admin/dashboard', [RecentActivityController::class, 'index'])->name('admin.dashboard');
Route::post('/admin/recent-activities', [RecentActivityController::class, 'store'])->name('recent-activities.store');
Route::delete('/admin/recent-activities/{id}', [RecentActivityController::class, 'destroy'])->name('recent-activities.destroy');
