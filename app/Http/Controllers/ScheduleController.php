<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//
use App\Models\Schedule;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;

class ScheduleController extends Controller
{
    function __construct()
    {
        // $this->middleware('permission:ver-schedule |crear-schedule|editar-schedule|borrar-schedule', ['only' => ['index']]);
        // $this->middleware('permission:crear-schedule', ['only' => ['create', 'store']]);
        // $this->middleware('permission:editar-schedule', ['only' => ['edit', 'update']]);
        // $this->middleware('permission:borrar-schedule', ['only' => ['destroy']]);
    }      
        
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $schedule = Schedule::paginate(10);
        return view('schedule.index', compact('schedule'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::pluck('name', 'name')->all();
        return view('schedule.crear', compact('roles'));
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
            'id_schedule' => 'required',
            'id_class' => 'required',
            'time_start' => 'required',
            'time_end' => 'required',
            'day' => 'required'
            
        ]);
        Schedule::create($request->all());
        return redirect()->route('schedule.index');
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
        $schedule = Schedule::find($id);
        $roles = Role::pluck('name', 'name')->all();
        // $courseRole=$course->roles->pluck('name','name')->all();

        return view('schedule.editar', compact('schedule'));
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
            'id_schedule' => 'required',
            'id_class' => 'required',
            'time_start' => 'required',
            'time_end' => 'required',
            'day' => 'required'
        ]);
        $input = $request->all();

        $schedule = Schedule::find($id);
        $schedule->update($input);
        DB::table('model_has_roles')->where('model_id', $id)->delete();

        $schedule->update($request->all());
        return redirect()->route('schedule.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Schedule::find($id)->delete();
        return redirect()->route('schedule.index');
    }
}
