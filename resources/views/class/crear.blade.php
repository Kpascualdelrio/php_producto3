@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Crear Courses</h3>
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
                                <span class="badge badge-danger">{{$error}}</span>
                            @endforeach
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        @endif

                        <form action="{{ route('class.store') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="id_class">id_class</label>
                                        <input type="text" name="id_class" class="form-control">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                    <label for="id_teacher">id_teacher</label>
                                        <textarea class="form-control" name="id_teacher" style="height: 100px"></textarea>
                                    </div>
                                </div>                                
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form">
                                        <label for="id_course">id_course</label>
                                        <input class="form-control" type=date name="id_course">
                                    </div>
                                    <div class="form">
                                        <label for="id_schedule">id_schedule</label>
                                        <input class="form-control" type=date name="id_schedule">
                                    </div>

                                    <div class="form">
                                        <label for="name">name</label>
                                        <input class="form-control" type=date name="name">
                                    </div>

                                    <div class="form">
                                        <label for="id_schedule">Fecha id_schedule</label>
                                        <input class="form-control" type=date name="id_schedule">
                                    </div>

                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                    
                                </div>
                                <div class="form-group">
                                        <label for="active">Active</label>
                                        <input type="text" name="active" class="form-control">
                                    </div>

                                    <button type="submit" class="btn btn-primary">Guardar</button>
                                </div>

                            </div>
                        </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

