<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
Use App\Models\Students;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\DB;
Use Illuminate\Support\Facades\Hash;
Use Illuminate\Support\Arr;

class StudentsController extends Controller
{    
    //creamos constructor
     function __construct()
     {
         $this->middleware('permission:ver-students|crear-students|editar-students|borrar-students',['only'=>['index']]);
         $this->middleware('permission:crear-students',['only'=>['create','store']]);
         $this->middleware('permission:editar-students',['only'=>['edit','update']]);
         $this->middleware('permission:borrar-students',['only'=>['destroy']]);
         
     }

       /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students=Students::paginate(5);
        return view('students.index', compact ('students'));
    }

      /**
     * Show the form for creating a new resource.
     * 
     * @return \Illuminate\Http\Response
     */
    public function create()
    {       
        return view('students.crear');    
    }

    /**
     * Store a newly created resource in storage.
     * @param \Illuminate\Http\Request
     * @return \Illuminate\Http\Response
     */

    public function store()
    {       
        request()->validate([
            'students'=>'required' 
            //
        ]);   
        Students::create($request->all());
        return redirect()->route('students.index');       
    }
     //aquí iría la function de show que no lo he hecho

    /**
     * Show the form for editing the specified resource
     * @param int $id
     * @return \Illuminate\Http\Response
     */

     public function edit(Students $students){

        $student = Students::find($id);
        $roles = Role::pluck('name','name')->all();
        //$studentRole = $student->roles->pluck('name', 'name')->all();

         return view('students.editar', compact('students'));
     }

    /**
     * Update the specified resource in storage.
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */


    public function update(Request $request,Students $students)
    {
        request()->validate([
            'students'=>'required'
            //creo que va algo más
        ]);
        $students->update($request->all());
        return redirect()->route('students.index');
    }
    /**
     * Remove the specified resource from storage. 
     * @param int $id
     * @return \Illuminate\Http\Response
     */

     public function destroy(Students $students)
     {
        $students->delete();
        return redirect()->route('students.index');
     }

}
