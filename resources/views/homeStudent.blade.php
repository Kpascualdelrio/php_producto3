@include('partials/header')

<div class="container">

    {{-- Administración clase --}}
    <div id="accordion1">
        <div class="card">
            <div class="card-header" id="cabecera1">
                <h5 class="mb-0">
                    <button class="btn btn-link" data-toggle="collapse" data-target="#respuesta1"
                        aria-controls="respuesta1">
                        Manage class
                    </button>
                </h5>
            </div>
            <div id="respuesta1" class="collapse" aria-labelledby="cabecera1" data-parent="#accordion1">
                <div class="card-body margin-0">
                    <div class="container">
                        <h3 style="color: royalblue;">class table</h3>
                        <div class="table-responsive">
                            <table class="table table-light table-striped table-bordered table-hover text-center">
                                <thead class="table-primary">
                                    <tr>
                                        <th>id_class</th>
                                        <th>id_teacher</th>
                                        <th>id_course</th>
                                        <th>id_schedule</th>
                                        <th>name</th>
                                        <th>color</th>
                                    </tr>
                                </thead>
                                <tbody class="table-success">
                                    @foreach ($class as $course)
                                        <tr>
                                            <td>
                                                {{ $course->id_class }}</td>
                                            <td>
                                                {{ $course->id_teacher }}</td>
                                            <td>
                                                {{ $course->id_course }}</td>
                                            <td>
                                                {{ $course->id_schedule }}</td>
                                            <td>
                                                {{ $course->name }}</td>
                                            <td>
                                                {{ $course->color }}</td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                        <td> <a href="" class="btn btn-primary">Agregar curso</a>
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
                        <td> <a href="" class="btn btn-primary">Agregar Profesor</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Administración cursos --}}
    <div id="accordion3">
        <div class="card">
            <div class="card-header" id="cabecera3">
                <h5 class="mb-0">
                    <button class="btn btn-link" data-toggle="collapse" data-target="#respuesta3"
                        aria-controls="respuesta3">
                        Manage Course
                    </button>
                </h5>
            </div>
            <div id="respuesta3" class="collapse" aria-labelledby="cabecera1" data-parent="#accordion3">
                <div class="card-body margin-0">
                    <div class="container">
                        <h3 style="color: royalblue;">Course table</h3>
                        <div class="table-responsive">
                            <table class="table table-light table-striped table-bordered table-hover text-center">
                                <thead class="table-primary">
                                    <tr>
                                        <th>id_course</th>
                                        <th>name</th>
                                        <th>description</th>
                                        <th>date_start</th>
                                        <th>date_end</th>
                                        <th>activate</th>
                                        <th>Editar</th>
                                        <th>Eliminar</th>
                                    </tr>
                                </thead>
                                <tbody class="table-success">
                                    @foreach ($courses as $course)
                                        <tr>
                                            <td>
                                                {{ $course->id_course }}
                                            </td>
                                            <td>
                                                {{ $course->name }}</td>
                                            <td>
                                                {{ $course->description }}</td>
                                            <td>
                                                {{ $course->date_start }}</td>
                                            <td>
                                                {{ $course->date_end }}</td>
                                            <td>
                                                {{ $course->active }}</td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                        <!-- <td> <a href="" class="btn btn-primary">Agregar curso</a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Administración examenes --}}
    <div id="accordion4">
        <div class="card">
            <div class="card-header" id="cabecera4">
                <h5 class="mb-0">
                    <button class="btn btn-link" data-toggle="collapse" data-target="#respuesta4"
                        aria-controls="respuesta4">
                        Manage Exams
                    </button>
                </h5>
            </div>
            <div id="respuesta4" class="collapse" aria-labelledby="cabecera1" data-parent="#accordion4">
                <div class="card-body margin-0">
                    <div class="container">
                        <h3 style="color: royalblue;">Exams table</h3>
                        <div class="table-responsive">
                            <table class="table table-light table-striped table-bordered table-hover text-center">
                                <thead class="table-primary">
                                    <tr>
                                        <th>id_exam</th>
                                        <th>id_class</th>
                                        <th>id_student</th>
                                        <th>name</th>
                                        <th>mark</th>
                                        <th>Editar</th>
                                        <th>Eliminar</th>
                                    </tr>
                                </thead>
                                <tbody class="table-success">
                                    @foreach ($exams as $exams)
                                        <tr>
                                            <td>
                                                {{ $course->id_exam }}
                                            </td>
                                            <td>
                                                {{ $course->id_class }}</td>
                                            <td>
                                                {{ $course->id_student }}</td>
                                            <td>
                                                {{ $course->name }}</td>
                                            <td>
                                                {{ $course->mark }}</td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                        <!-- <td> <a href="" class="btn btn-primary">Agregar examen</a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Administración trabajos --}}
    <div id="accordion5">
        <div class="card">
            <div class="card-header" id="cabecera5">
                <h5 class="mb-0">
                    <button class="btn btn-link" data-toggle="collapse" data-target="#respuesta5"
                        aria-controls="respuesta5">
                        Manage Works
                    </button>
                </h5>
            </div>
            <div id="respuesta5" class="collapse" aria-labelledby="cabecera1" data-parent="#accordion5">
                <div class="card-body margin-0">
                    <div class="container">
                        <h3 style="color: royalblue;">Works table</h3>
                        <div class="table-responsive">
                            <table class="table table-light table-striped table-bordered table-hover text-center">
                                <thead class="table-primary">
                                    <tr>
                                        <th>id_works</th>
                                        <th>id_class</th>
                                        <th>id_students</th>
                                        <th>name</th>
                                        <th>mark</th>
                                        <th>Editar</th>
                                        <th>Eliminar</th>
                                    </tr>
                                </thead>
                                <tbody class="table-success">
                                    @foreach ($works as $works)
                                        <tr>
                                            <td>
                                                {{ $works->id_works }}
                                            </td>
                                            <td>
                                                {{ $works->id_class }}</td>
                                            <td>
                                                {{ $works->id_students }}</td>
                                            <td>
                                                {{ $works->name }}</td>
                                            <td>
                                                {{ $works->mark }}</td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                        <!-- <td> <a href="" class="btn btn-primary">Agregar nota</a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Administración porcentajes --}}
    <div id="accordion6">
        <div class="card">
            <div class="card-header" id="cabecera6">
                <h5 class="mb-0">
                    <button class="btn btn-link" data-toggle="collapse" data-target="#respuesta6"
                        aria-controls="respuesta3">
                        Manage Percentage
                    </button>
                </h5>
            </div>
            <div id="respuesta6" class="collapse" aria-labelledby="cabecera1" data-parent="#accordion6">
                <div class="card-body margin-0">
                    <div class="container">
                        <h3 style="color: royalblue;">Percentage table</h3>
                        <div class="table-responsive">
                            <table class="table table-light table-striped table-bordered table-hover text-center">
                                <thead class="table-primary">
                                    <tr>
                                        <th>id_percentage</th>
                                        <th>id_course</th>
                                        <th>id_class</th>
                                        <th>continuous_assessment</th>
                                        <th>exams</th>
                                        <th>Editar</th>
                                        <th>Eliminar</th>
                                    </tr>
                                </thead>
                                <tbody class="table-success">
                                    @foreach ($percentage as $percentage)
                                        <tr>
                                            <td>
                                                {{ $percentage->id_percentage }}
                                            </td>
                                            <td>
                                                {{ $percentage->id_course }}</td>
                                            <td>
                                                {{ $percentage->id_class }}</td>
                                            <td>
                                                {{ $percentage->continuous_assessment }}</td>
                                            <td>
                                                {{ $percentage->exams }}</td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                        <!-- <td> <a href="" class="btn btn-primary">Agregar porcentage</a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@include('partials/footer')
