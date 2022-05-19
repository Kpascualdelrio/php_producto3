<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

//AGREGAMOS
use App\Models\Teachers;
use Spatie\Permission\Models\Role;
// use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\DB;
// use Symfony\Component\Console\Input\Input;

class TeachersController extends Controller
{
    function __construct()
    {
        // $this->middleware('permission:ver-teachers |crear-teachers|editar-teachers|borrar-teachers', ['only' => ['index']]);
        // $this->middleware('permission:crear-teachers', ['only' => ['create', 'store']]);
        // $this->middleware('permission:editar-teachers', ['only' => ['edit', 'update']]);
        // $this->middleware('permission:borrar-teachers', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teachers = Teachers::paginate(20);
        return view('teachers.index', compact('teachers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::pluck('name', 'name')->all();
        return view('teachers.crear', compact('roles'));
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
            'name' => 'required',
            'surname' => 'required',
            'telephone' => 'required',
            'nif' => 'required',
            'email' => 'required'
        ]);
        Teachers::create($request->all());
        return redirect()->route('teachers.index');
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
        $teachers = Teachers::find($id);
        $roles = Role::pluck('name', 'name')->all();
        // $courseRole=$course->roles->pluck('name','name')->all();

        return view('teachers.editar', compact('teachers'));
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
            'name' => 'required',
            'surname' => 'required',
            'telephone' => 'required',
            'nif' => 'required',
            'email' => 'required'
        ]);
        $input = $request->all();

        $teachers = Teachers::find($id);
        $teachers->update($input);
        DB::table('model_has_roles')->where('model_id', $id)->delete();

        $teachers->update($request->all());
        return redirect()->route('teachers.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Teachers::find($id)->delete();
        return redirect()->route('teachers.index');
    }
}
