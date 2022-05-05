@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Students</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">                    
                            <a class="btn btn-warning" href="{{ route('students.create') }}">Nuevo </a>

                            <table class="table table-striped mt-2">
                                <thead style="background-color: #6777ef;">
                                <th style="display: none;">id</th>
                                    <th style="display: none;">username</th>
                                    <th style="display: none;">pass</th>
                                    <th style="color:#fff;">email</th>
                                    <th style="color:#fff;">name</th>                                    
                                    <th style="color:#fff;">surname</th> 
                                    <th style="color:#fff;">telephone</th> 
                                    <th style="color:#fff;">nif</th> 
                                    <th style="color:#fff;">date_registered</th> 
                                </thead>
                                <tbody> 
                                    @foreach ($students as $student)
                                    <tr>
                                        <td style="display: none;">{{ $student->id}}</td>  
                                        <td>{{ $student->username }}</td>
                                        <td>{{ $student->pass }}</td>
                                        <td>{{ $student->email }}</td>
                                        <td>{{ $student->name }}</td>
                                        <td>{{ $student->surname }}</td>
                                        <td>{{ $student->telephone }}</td>
                                        <td>{{ $student->nif }}</td>
                                        <td>
                                            @if(!empty($student->getStudentsName()))
                                                @foreach ($students->getStudents() as $studentsName)
                                                <h5><span class ="badge badge-dark">{{ $studentName }}</span></h5>
                                                @endforeach
                                            @endif
                                        </td>
                                        <td>
                                            <a class="btn btn-info" href="{{ route('students.edit', $student-<id) }}">Editar</a>                                        
                                            {!! Form::open(['method'=>'DELETE', 'route'=> ['students.destroy', $student->id], 'style'=>'display:inline']) !!}
                                                {!!Form::submit('Borrar', ['class'=>'btn btn-danger'])!!}
                                            {!!Form::close() !!}

                                        </td>


                                    </tr>
                                @endforeach    
                                </tbody>
                            </table>
                            <div class="pagination justify-content-end">
                                {!! $students->links() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection




































































<!--@include('partials/header')

<div class="container">

    {{-- Administración clase --}}
    <div id="accordion1">
        <div class="card">
            <div class="card-header" id="cabecera1">
                <h5 class="mb-0">
                    <button class="btn btn-link" data-toggle="collapse" data-target="#respuesta1"
                        aria-controls="respuesta1">
                        Students
                    </button>
                </h5>
            </div>
            <div id="respuesta1" class="collapse" aria-labelledby="cabecera1" data-parent="#accordion1">
                <div class="card-body margin-0">
                    <div class="container">
                    <h3 style="color: royalblue;">Students table</h3>
                        <div class="table-responsive">
                            <table class="table table-light table-striped table-bordered table-hover text-center">
                                <thead class="table-primary">able-primary">
                                    <tr>
                                        <th>id_student</th>
                                        <th>username</th>
                                        <th>pass</th>
                                        <th>email</th>
                                        <th>name</th>
                                        <th>surname</th>
                                        <th>telephone</th>
                                        <th>nif</th>
                                        <th>date_registered</th>
                                    </tr>
                                </thead>
                                <tbody class="table-success">
                                    @foreach ($students as $course)
                                        <tr>
                                            <td>
                                                {{ $course->id_student }}</td>
                                            <td>
                                                {{ $course->username }}</td>
                                            <td>
                                                {{ $course->pass }}</td>
                                            <td>
                                                {{ $course->email }}</td>
                                            <td>
                                                {{ $course->name }}</td>
                                            <td>
                                                {{ $course->surname }}</td>
                                            <td>
                                                {{ $course->telephone }}</td>
                                            <td>
                                                {{ $course->nif }}</td>
                                            <td>
                                                {{ $course->date_registered }}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                            </table>
                        </div>
                        <td> <a href="" class="btn btn-primary">Agregar estudiante</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Administración Estudiantes --}}
    <div id="accordion2">
        <div class="card">
            <div class="card-header" id="cabecera2">
                <h5 class="mb-0">
                    <button class="btn btn-link" data-toggle="collapse" data-target="#respuesta2"
                        aria-controls="respuesta2">
                        Manage student
                    </button>
                </h5>
            </div>

            <div id="respuesta2" class="collapse" aria-labelledby="cabecera2" data-parent="#accordion2">
                <div class="card-body margin-0">
                    <div class="container">
                        <h3 style="color: royalblue;">students table</h3>
                        <div class="table-responsive">
                            <table class="table table-light table-striped table-bordered table-hover text-center">
                                <thead class="table-primary">
                                    <tr>
                                        <th>Id</th>
                                        <th>Username</th>
                                        <th>Pass</th>
                                        <th>Email</th>
                                        <th>Name</th>
                                        <th>Surname</th>
                                        <th>Telephone</th>
                                        <th>Nif</th>
                                        <th>Date Registered</th>
                                        <th>Editar</th>
                                        <th>Eliminar</th>

                                    </tr>
                                </thead>
                                <tbody class="table-success">
                                    @foreach ($students as $students)
                                        <tr>
                                            <td>
                                                {{ $students->id }}</td>
                                            <td>
                                                {{ $students->username }}</td>
                                            <td>
                                                {{ $students->pass }}</td>
                                            <td>
                                                {{ $students->email }}</td>
                                            <td>
                                                {{ $students->name }}</td>
                                            <td>
                                                {{ $students->surname }}</td>
                                            <td>
                                                {{ $students->telephone }}</td>
                                            <td>
                                                {{ $students->nif }}</td>
                                            <td>
                                                {{ $students->date_registered }}</td>
                                            <td>
                                            </td>
                                            <td>
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    

</div>

@include('partials/footer') -->


                      