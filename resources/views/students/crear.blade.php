@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Alta Students</h3>
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

                            <form action="{{ route('students.store') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-xs-12 col-sm12 col-md-12">
                                    <div class="form-group">
                                        <label for="name">username</label>
                                        <input type="text" name="name" class="form-control">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm12 col-md-12">
                                    <div class="form-group">  
                                        <label for="name">pass</label>
                                        {!!Form::password('pass', null, array('class'=>'form-control'))!!}
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm12 col-md-12">
                                    <div class="form-group">
                                        <label for="name">email</label>
                                        {!!Form::text('email', null, array('class'=>'form-control'))!!}
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm12 col-md-12">
                                    <div class="form-group">
                                        <label for="name">name</label>
                                        {!!Form::text('name', null, array('class'=>'form-control'))!!}
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm12 col-md-12">
                                    <div class="form-group">
                                        <label for="name">surname</label>
                                        {!!Form::text('surname', null, array('class'=>'form-control'))!!}
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm12 col-md-12">
                                    <div class="form-group">
                                        <label for="name">telephone</label>
                                        {!!Form::text('telephone', null, array('class'=>'form-control'))!!}
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm12 col-md-12">
                                    <div class="form-group">
                                        <label for="name">nif</label>
                                        {!!Form::text('nif', null, array('class'=>'form-control'))!!}
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm12 col-md-12">
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

