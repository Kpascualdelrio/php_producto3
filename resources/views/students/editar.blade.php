@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Editar Students</h3>
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
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span>
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            @endif

                            <form action="{{ route('students.update',$students->id_student) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-xs-12 col-sm12 col-md-12">
                                    <div class="form-group">
                                        <label for="username">username</label>
                                        <input type="text" name="username" class="form-control" value="{{ $students->username }}">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm12 col-md-12">
                                    <div class="form-group">
                                        <label for="pass">pass</label>
                                        <input type="password" name="pass" class="form-control" value="{{ $students->pass }}">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm12 col-md-12">
                                    <div class="form-group">
                                        <label for="email">email</label>
                                        <input type="text" name="email" class="form-control" value="{{ $students->email }}">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm12 col-md-12">
                                    <div class="form-group">
                                        <label for="name">name</label>
                                        <input type="text" name="email" class="form-control" value="{{ $students->name }}">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm12 col-md-12">
                                    <div class="form-group">
                                        <label for="surname">surname</label>
                                        <input type="text" name="surname" class="form-control" value="{{ $students->surname }}">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm12 col-md-12">
                                    <div class="form-group">
                                        <label for="telephone">telephone</label>
                                        <input type="number" name="telephone" class="form-control" value="{{ $students->telephone }}">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm12 col-md-12">
                                    <div class="form-group">
                                        <label for="nif">nif</label>
                                        <input type="text" name="nif" class="form-control" value="{{ $students->nif }}">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm12 col-md-12">
                                <div class="form-group">
                                        <label for="date_registered">date_registered</label>
                                        <input type="date" name="date_registered" class="form-control" value="{{ $students->date_registered }}">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Guardar</button>
                                <div>
                            </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

