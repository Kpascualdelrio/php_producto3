@extends('layoutsStudents.app')

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

                         
                      

                            <table class="table table-striped mt-2">
                                <thead style="background-color: #6777ef;">
                                    <th style="color: #fff;">ID_Course</th>
                                    <th style="color: #fff;">Name</th>
                                    <th style="color: #fff;">Description</th>
                                    <th style="color: #fff;">Date_start</th>
                                    <th style="color: #fff;">Date_end</th>
                                    <th style="color: #fff;">Active</th>
                                    <th style="color: #fff;">Acciones</th>
                                </thead>
                                <tbody>
                                    @foreach($courses as $course)
                                    <tr>
                                        <td >{{$course->id}}</td>
                                        <td>{{$course->name}}</td>
                                        <td>{{$course->description}}</td>
                                        <td>{{$course->date_start}}</td>
                                        <td>{{$course->date_end}}</td>
                                        <td>{{$course->active}}</td>
                                        <td>
                                           <form action="{{ route('courses.destroy', $course->id) }}" method="POST">
                                             
                                               <a href="{{ route('courses.edit', $course->id) }}" class="btn btn-info">Editar</a>
                                            

                                                @csrf
                                                @method('DELETE')
                                                
                                                <button type="submit" class="btn btn-danger">Borrar</button>
                                             
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

