@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Courses</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">

                            @can('crear-courses')
                            <a href="{{ route('courses.create') }}" class="btn btn-warning">Nuevo</a>
                            @endcan

                            <table class="table table-striped mt-2">
                                <thead style="background-color: #6777ef;">
                                    <th style="display: none;">ID_Course</th>
                                    <th style="color: #fff;">Name</th>
                                    <th style="color: #fff;">Description</th>
                                    <th style="color: #fff;">Date_start</th>
                                    <th style="color: #fff;">Date_end</th>
                                    <th style="color: #fff;">Active</th>
                                </thead>
                                <tbody>
                                    @foreach($courses as $course)
                                    <tr>
                                        <td style="display:none;">{{$course->id_course}}</td>
                                        <td>{{$course->name}}</td>
                                        <td>{{$course->description}}</td>
                                        <td>{{$course->date_start}}</td>
                                        <td>{{$course->date_end}}</td>
                                        <td>{{$course->active}}</td>
                                        <td>
                                           <form action="{{ route('courses.destroy', $course->id_course) }}" method="POST">
                                               @can('editar-courses')
                                               <a href="{{ route('courses.edit', $course->id_course) }}" class="btn btn-info">Editar</a>
                                               @endcan

                                                @csrf
                                                @method('DELETE')
                                                @can('borrar-courses')
                                                <button type="submit" class="btn btn-danger">Borrar</button>
                                                @endcan
                                           </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="pagination justify-content-end">
                               {!! $courses->links() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
