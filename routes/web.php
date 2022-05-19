<?php

use Illuminate\Support\Facades\Route;
//agregamos los controladores
use App\Http\Controllers\ListController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\ExamsController;
use App\Http\Controllers\TeachersController;
use App\Http\Controllers\EnrollmentsController;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\RolStudentController;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\CoursesController;


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

Route::get('/', [HomeController::class, 'index'])->middleware('admin.auth');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')
->middleware('admin.auth');

Route::group(['middleware' => ['auth']], function () {
    Route::resource('roles', RolController::class);
    Route::resource('usuarios', UsuarioController::class);
    Route::resource('exams', ExamsController::class);
    Route::resource('teachers', TeachersController::class);
    Route::resource('courses', CoursesController::class);
    Route::resource('enrollments', EnrollmentsController::class);
    Route::resource('students', StudentsController::class);
    
});

Route::get('/homestudent', [RolStudentController::class, 'index'])
->middleware('student.auth')
->name('student.index');