<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Works;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;

class WorksController extends Controller
{
    function __construct()
    {
        // $this->middleware('permission:ver-exam |crear-exam|editar-exam|borrar-exam', ['only' => ['index']]);
        // $this->middleware('permission:crear-exam', ['only' => ['create', 'store']]);
        // $this->middleware('permission:editar-exam', ['only' => ['edit', 'update']]);
        // $this->middleware('permission:borrar-exam', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $works = Works::paginate(20);
        return view('works.index', compact('works'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $roles = Role::pluck('name', 'name')->all();
        return view('works.crear', compact('roles'));
        // return view('exams.crear');
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
        // request()->validate([
        //     'name' => 'required',

        //     'mark' => 'required'

        // ]);
        Works::create($request->all());
        return redirect()->route('works.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $works = [];
        $works = User::where('id', '=', $id)
            ->join('works', 'works.id_class', '=', 'users.id')
            ->get();

        return view('works.show', compact('works'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $works = Works::find($id);
        $roles = Role::pluck('name', 'name')->all();
        //
        return view('works.editar', compact('works'));
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
        // request()->validate([
        //     'name' => 'required',
        //     'mark' => 'required'
        // ]);
        $input = $request->all();

        $works = Works::find($id);
        $works->update($input);
        DB::table('model_has_roles')->where('model_id', $id)->delete();

        $works->update($request->all());
        return redirect()->route('works.index');

        // $exams=Exams::find($id);
        // Exams::update($request->all());
        // return redirect()->route('exams.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Works::find($id)->delete();
        return redirect()->route('works.index');
    }
}
