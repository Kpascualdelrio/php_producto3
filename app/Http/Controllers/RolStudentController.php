<?php

namespace App\Http\Controllers;
use App\Models\Classroom;
use App\Models\Students;
use App\Models\Courses;
use App\Models\Exams;
use App\Models\Percentage;
use App\Models\Works;

use Illuminate\Http\Request;

class RolStudentController extends Controller
{
    public function index(){

        $class = Classroom::all();
        $students = Students::all();
        $courses = Courses::all();
        $exams = Exams::all();
        $works = Works::all();
        $percentage = Percentage::all();


        return view('index', array('class' => $class, 'students' => $students, 'courses' => $courses, 'exams' => $exams, 'percentage' => $percentage, 'works' => $works));
    }
}


