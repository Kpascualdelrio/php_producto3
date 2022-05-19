<?php

namespace App\Http\Controllers;
use App\Models\Classroom;
use App\Models\Students;
use App\Models\Courses;
use App\Models\Exams;
use App\Models\Percentage;
use App\Models\User;

use Illuminate\Http\Request;

class RolStudentController extends Controller
{
    public function index(){

        // $usuarios = User::all();

        return view('homeStudent');

    }

    public function show($id){

        $usuarios = User::where('id','=',($id))->first();
        return view('homeStudent',compact('usuarios'));
    }
}


