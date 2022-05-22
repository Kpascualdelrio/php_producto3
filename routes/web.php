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
use App\Http\Controllers\NotificationsController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\WorksController;
use App\Http\Controllers\PercentageController;


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
    Route::resource('schedule', ScheduleController::class);    
    Route::resource('notifications', NotificationsController::class);
    Route::resource('works', WorksController::class);
    Route::resource('percentage', PercentageController::class);
});

//rutas rol estudent

Route::get('/homestudent', [RolStudentController::class, 'index'])
->middleware('student.auth')
->name('student.index');

Route::get('/homestudent/usuarios/{id}', [UsuarioController::class, 'show']);
Route::get('/homestudent/usuarios/edit/{id}', [UsuarioController::class, 'editStudent'])->name('studentedit');

Route::get('/homestudent/exams/{id}', [ExamsController::class, 'show']);

Route::get('/homestudent/class', [ClassController::class, 'show']);

Route::get('/homestudent/enrollments/{id}', [EnrollmentsController::class, 'show']);

Route::get('/homestudent/works/{id}', [WorksController::class, 'show']);

Route::get('homestudent/percentage', [PercentageController::class, 'show']);
