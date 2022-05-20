<?php

namespace App\Http\Controllers;

use Spatie\Permission\Models\Role;

use App\Models\Classroom;
use Illuminate\Http\Request;

class ClassController extends Controller
{
    function __construct()
    {
        // $this->middleware('permission:ver-courses crear-courses|editar-courses|borrar-courses')->only=('index');
        // $this->middleware('permission:crear-courses',['only'=>['create','store']]);
        // $this->middleware('permission:editar-courses',['only'=>['edit','update']]);
        // $this->middleware('permission:borrar-courses',['only'=>['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $class = Classroom::paginate(5);
        return view('class.index', compact('class'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return view('courses.crear');
        $roles = Role::pluck('name', 'name')->all();
        return view('class.crear', compact('roles'));
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
            'name' => 'required',
            'description' => 'required'
        ]);

        Classroom::create($request->all());
        return redirect()->route('class.index');
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
    public function edit($id)
    {
        //
        $class = Classroom::find($id);
        $roles = Role::pluck('name', 'name')->all();
        // $courseRole=$course->roles->pluck('name','name')->all();

        return view('class.editar', compact('class'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        request()->validate([


            'id_class' => 'required',
            'id_teacher'  => 'required',
            'id_course' => 'required',
            'id_schedule'  => 'required',

        ]);

        $input = $request->all();
        // if (!empty($input['name'])){
        //     $input['name'] = Hash::make($input['name']);
        //     // $input=Arr::except($input,array('password'));
        // }else{
        //     $input=Arr::except($input,array('name'));
        // }

        $class = Classroom::find($id);
        $class->update($input);
       // DB::table('model_has_roles')->where('model_id', $id)->delete();

        $class->update($request->all());
        return redirect()->route('class.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $courses->delete();
        // return redirect()->route('courses.index');
        Classroom::find($id)->delete();
        return redirect()->route('class.index');
    }
}
