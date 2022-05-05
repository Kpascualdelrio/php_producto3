<?php

namespace App\Http\Controllers;

use App\Models\Exams;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;

class ExamsController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:ver-exam |crear-exam|editar-exam|borrar-exam', ['only' => ['index']]);
        $this->middleware('permission:crear-exam', ['only' => ['create', 'store']]);
        $this->middleware('permission:editar-exam', ['only' => ['edit', 'update']]);
        $this->middleware('permission:borrar-exam', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $exams = Exams::paginate(5);
        return view('exams.index', compact('exams'));
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
        return view('exams.crear', compact('roles'));
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
        request()->validate([
            'name' => 'required',
            'mark' => 'required'
        ]);
        Exams::create($request->all());
        return redirect()->route('exams.index');
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
        $exams = Exams::find($id);
        $roles = Role::pluck('name', 'name')->all();
        //
        return view('exams.editar', compact('exams'));
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
            'name' => 'required',
            'mark' => 'required'
        ]);
        $input = $request->all();

        $exams = Exams::find($id);
        $exams->update($input);
        DB::table('model_has_roles')->where('model_id', $id)->delete();

        $exams->update($request->all());
        return redirect()->route('exams.index');

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
        Exams::find($id)->delete();
        return redirect()->route('exams.index');
    }
}
