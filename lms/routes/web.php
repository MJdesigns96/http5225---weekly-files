<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get(
    'students/trash/{id}',
    [StudentController::class, 'trash']
) -> name('students.trash');

Route::get(
    'students/trashed',
    [StudentController::class, 'trashed']
) -> name('students.trashed');

Route::get(
    'students/restore/{id}',
    [StudentController::class, 'restore']
) -> name('students.restore');

//courses
Route::get(
    'courses/trash/{id}',
    [CourseController::class, 'trash']
) -> name('courses.trash');

Route::get(
    'courses/trashed',
    [CourseController::class, 'trashed']
) -> name('courses.trashed');

Route::get(
    'courses/restore/{id}',
    [CourseController::class, 'restore']
) -> name('courses.restore');

Route::resource('students', StudentController::class)->middleware('auth');
Route::resource('courses', CourseController::class);

Route::get(
    'students/destroy/{id}',
    [StudentController::class, 'destroy']
) -> name('students.destroy');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('courses', CourseController::class);
Route::resource('faculties', FacultyController::class);

require __DIR__.'/auth.php';
