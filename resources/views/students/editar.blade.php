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
                                        <span class="badge badge-danger">{{ $error }}</span>
                                    @endforeach
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif


                            <form action="{{ route('students.update', $students->students) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <label for="username">Username</label>
                                            <input type="text" name="username" class="form-control"
                                                value="{{ $students->username }}">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">

                                        <div class="form-floating">
                                            <label for="pass">Pass</label>
                                            <input type="text" name="pass" class="form-control"
                                                value="{{ $students->pass }}">                                          
                                        </div>
                                        <br>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">

                                        <div class="form-floating">
                                            <label for="email">Email</label>
                                            <input type="text" name="email" class="form-control"
                                                value="{{ $students->email }}">                                          
                                        </div>
                                        <br>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">

                                        <div class="form-floating">
                                            <label for="name">Name</label>
                                            <input type="text" name="name" class="form-control"
                                                value="{{ $students->name }}">                                           
                                        </div>
                                        <br>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">

                                        <div class="form-floating">
                                            <label for="surname">Surname</label>
                                            <input type="text" name="surname" class="form-control"
                                                value="{{ $students->surname }}">                                  
                                        </div>
                                        <div class="form-floating">
                                            <label for="telephone">Telephone</label>
                                            <input type="text" name="telephone" class="form-control"
                                                value="{{ $students->telephone }}">                                  
                                        </div>
                                        <div class="form-floating">
                                            <label for="nif">Nif</label>
                                            <input type="text" name="nif" class="form-control"
                                                value="{{ $students->nif }}">                                  
                                        </div>
                                        <div class="form-floating">
                                            <label for="date_registered">date_registered</label>
                                            <input type="text" name="date_registered" class="form-control"
                                                value="{{ $students->date_registered }}">                                  
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
