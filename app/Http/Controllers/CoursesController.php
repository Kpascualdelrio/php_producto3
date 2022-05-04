<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//AGREGAMOS
use App\Models\Courses;
// use Spatie\Permission\Models\Role;
// use Spatie\Permission\Models\Permission;
// use Illuminate\Support\Facades\DB;
// use Symfony\Component\Console\Input\Input;

class CoursesController extends Controller
{
    function __construct(){
        $this->middleware('permission:ver-courses crear-courses|editar-courses|borrar-courses')->only=('index');
        $this->middleware('permission:crear-courses',['only'=>['create','store']]);
        $this->middleware('permission:editar-courses',['only'=>['edit','update']]);
        $this->middleware('permission:borrar-courses',['only'=>['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $courses = Courses::paginate(5);
        return view('courses.index', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('courses.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        request()->validate([
            'name'=> 'required',
            'description'=> 'required'
        ]);

        Courses::create($request->all());
        return redirect()->route('courses.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Courses $courses)
    {
        //
        return view('courses.editar', compact('courses'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Courses $courses)
    {
        //
        request()->validate([
            'name'=> 'required',
            'description'=> 'required'
        ]);
        $courses->update($request->all());
        return redirect()->route('courses.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Courses $courses)
    {
        //
        $courses->delete();
        return redirect()->route('courses.index');
    }
}
