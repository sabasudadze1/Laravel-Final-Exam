<?php

use App\Http\Controllers\ClassRoomController;
use App\Http\Controllers\StudentController;
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
    $students = \App\Models\Student::with('classroom')->get();
    $classrooms = \App\Models\Classroom::with('students')->get();

    return view('welcome', compact('students', 'classrooms'));
});

Route::get('/students', [StudentController::class, 'index']);
Route::get('/class-room', [ClassRoomController::class, 'index']);
