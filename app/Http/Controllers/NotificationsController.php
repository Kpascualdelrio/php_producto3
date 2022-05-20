<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notifications;

class NotificationsController extends Controller
{

    // creamos constructor
    function __construct()
    {
        $this->middleware('permission:ver-notifications|crear-notifications|editar-notifications|borrar-notifications', ['only' => ['index']]);
        $this->middleware('permission:crear-notifications', ['only' => ['create', 'store']]);
        $this->middleware('permission:editar-notifications', ['only' => ['edit', 'update']]);
        $this->middleware('permission:borrar-notifications', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notifications = Notifications::paginate(5);
        return view('notifications.index', compact('notifications'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('notifications.crear');
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
            'id_student' => 'required',
            'work' => 'required',
            'exam' => 'required',
            'continuous_assessment' => 'required',
            'final_note' => 'required'
        ]);
        Notifications::create($request->all());
        return redirect()->route('notifications.index');
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
    public function edit(Notifications $notifications)
    {
        return view('notifications.editar', compact('notifications'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Notifications $notifications)
    {
        request()->validate([
            'id_student' => 'required',
            'work' => 'required',
            'exam' => 'required',
            'continuous_assessment' => 'required',
            'final_note' => 'required'
        ]);
        $notifications->update($request->all());
        return redirect()->route('notifications.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Notifications $notifications)
    {
        $notifications->delete();
        return redirect()->route('notifications.index');
    }
}
