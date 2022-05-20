@extends('layoutsStudents.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Exams</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                
            
                        @can('crear-exam')
                        <a class="btn btn-warning" href="{{ route('exams.create') }}">Nuevo</a>
                        @endcan
            
                        <table class="table table-striped mt-2">
                                <thead style="background-color:#6777ef">                                     
                                    <th style="color:#fff;">ID_exam</th>
                                    <th style="color:#fff;">ID_class</th>
                                    <th style="color:#fff;">ID_student</th>
                                    <th style="color:#fff;">name</th>
                                    <th style="color:#fff;">mark</th>                                    
                                                                                                      
                              </thead>
                              <tbody>
                            @foreach ($exams as $exam)
                            <tr>
                                <td>{{ $exam->id_exam }}</td>                                
                                <td >{{ $exam->id_class }}</td>                                
                                <td >{{ $exam->id_student }}</td>
                                <td>{{ $exam->name }}</td>
                                <td>{{ $exam->mark }}</td>
                                
                            </tr>
                            @endforeach
                            </tbody>
                        </table>

                       
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection