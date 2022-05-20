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
    Route::resource('class', ClassController::class);
    
});

Route::get('/homestudent', [RolStudentController::class, 'index'])
->middleware('student.auth')
->name('student.index');
// Route::get('/homestudent/{id}', [RolStudentController::class, 'show']);


//Route::get('/homestudent/usuarios', [UsuarioController::class, 'index']);
Route::get('/homestudent/usuarios/{id}', [UsuarioController::class, 'show']);

//Route::get('/homestudent/exams', [ExamsController::class, 'index']);
Route::get('/homestudent/exams/{id}', [ExamsController::class, 'show']);

//Route::get('/homestudent/courses', [Controller::class, 'index']);
Route::get('/homestudent/class/{id}', [ClassController::class, 'show']);

//Route::get('/homestudent/enrollments', [UsuarioController::class, 'index']);
Route::get('/homestudent/enrollments/{id}', [EnrollmentsController::class, 'show']);


