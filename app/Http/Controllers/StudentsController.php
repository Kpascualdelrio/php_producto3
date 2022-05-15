<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//
use App\Models\Students;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;

class StudentsController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:ver-students |crear-students|editar-students|borrar-students', ['only' => ['index']]);
        $this->middleware('permission:crear-students', ['only' => ['create', 'store']]);
        $this->middleware('permission:editar-students', ['only' => ['edit', 'update']]);
        $this->middleware('permission:borrar-students', ['only' => ['destroy']]);
    }      
        
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Students::paginate(10);
        return view('students.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::pluck('name', 'name')->all();
        return view('students.crear', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'username' => 'required',
            'pass' => 'required',
            'email' => 'required',
            'name' => 'required',
            'surname' => 'required',
            'telephone' => 'required',
            'nif' => 'required',
            'date_registered' => 'required' 
        ]);
        Students::create($request->all());
        return redirect()->route('students.index');
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
        $students = Students::find($id);
        $roles = Role::pluck('name', 'name')->all();
        // $courseRole=$course->roles->pluck('name','name')->all();

        return view('students.editar', compact('students'));
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
        $this->validate($request, [
            'username' => 'required',
            'pass' => 'required',
            'email' => 'required',
            'name' => 'required',
            'surname' => 'required',
            'telephone' => 'required',
            'nif' => 'required',
            'date_registered' => 'required' 
        ]);
        $input = $request->all();

        $students = Students::find($id);
        $students->update($input);
        DB::table('model_has_roles')->where('model_id', $id)->delete();

        $students->update($request->all());
        return redirect()->route('students.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Students::find($id)->delete();
        return redirect()->route('students.index');
    }
}
