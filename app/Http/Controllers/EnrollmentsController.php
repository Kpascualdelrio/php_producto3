<?php

namespace App\Http\Controllers;

use App\Models\Enrollment;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;

// use Spatie\Permission\Models\Enrollment;

class EnrollmentsController extends Controller
{
    function __construct()
    {
        // $this->middleware('permission:ver-enrollment |crear-enrollments|editar-enrollments|borrar-enrollments', ['only' => ['index']]);
        // $this->middleware('permission:crear-enrollments', ['only' => ['create', 'store']]);
        // $this->middleware('permission:editar-enrollments', ['only' => ['edit', 'update']]);
        // $this->middleware('permission:borrar-enrollments', ['only' => ['destroy']]);
    }




    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $enrollments = Enrollment::paginate(5);
        return view('enrollments.index', compact('enrollments'));
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
        return view('enrollments.crear', compact('roles'));
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

        Enrollment::create($request->all());
        return redirect()->route('enrollments.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $enrollments = [];
        $enrollments = User::where('users.id', '=', $id)
            ->join('enrollments', 'enrollments.id_student', '=', 'users.id')
            ->get();

        return view('enrollments.show', compact('enrollments'));
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
        $enrollments = Enrollment::find($id);
        $roles = Role::pluck('name', 'name')->all();
        // $enrollments = Enrollment::pluck('status', 'status')->all();
        return view('enrollments.editar', compact('enrollments'));
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
        $input = $request->all();

        $enrollments = Enrollment::find($id);
        $enrollments->update($input);
        DB::table('model_has_roles')->where('model_id', $id)->delete();

        $enrollments->update($request->all());
        return redirect()->route('enrollments.index');
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
        Enrollment::find($id)->delete();
        return redirect()->route('enrollments.index');
    }
}
