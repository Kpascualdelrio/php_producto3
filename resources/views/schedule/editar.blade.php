@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Editar Schedule</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">

                            @if ($errors->any())
                                <div class="alert alert-dark alert-dismissible fade show" role="alert">
                                    <strong>¡Revise los campos!</strong>
                                    @foreach ($errors->all() as $error)
                                        <span class="badge badge-danger">{{ $error }}</span>
                                    @endforeach
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif


                            <form action="{{ route('schedule.update', $schedule->id_schedule) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <label for="id_schedule">id_schedule</label>
                                            <input type="text" name="id_schedule" class="form-control"
                                                value="{{ $schedule->id_schedule }}">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">

                                        <div class="form-floating">
                                            <label for="id_class">id_class</label>
                                            <input type="text" name="id_class" class="form-control"
                                                value="{{ $schedule->id_class }}">                                          
                                        </div>
                                        <br>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">

                                        <div class="form-floating">
                                            <label for="time_start">time_start</label>
                                            <input type="text" name="time_start" class="form-control"
                                                value="{{ $schedule->time_start }}">                                          
                                        </div>
                                        <br>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">

                                        <div class="form-floating">
                                            <label for="time_end">time_end</label>
                                            <input type="text" name="time_end" class="form-control"
                                                value="{{ $schedule->time_end }}">                                           
                                        </div>
                                        <br>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">

                                        <div class="form-floating">
                                            <label for="day">day</label>
                                            <input type="text" name="day" class="form-control"
                                                value="{{ $schedule->day }}">                                  
                                        </div>                                      
                                        <br>
                                        <button type="submit" class="btn btn-primary">Guardar</button>
                                    </div>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
