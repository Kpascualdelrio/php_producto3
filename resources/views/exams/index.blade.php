@extends('layouts.app')

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
                                    <th style="display: none;">ID_exam</th>
                                    <th style="display: none;">ID_class</th>
                                    <th style="display: none;">ID_studen</th>
                                    <th style="color:#fff;">name</th>
                                    <th style="color:#fff;">mark</th>                                    
                                    <th style="color:#fff;">Acciones</th>                                                                   
                              </thead>
                              <tbody>
                            @foreach ($exams as $exam)
                            <tr>
                                <td style="display: none;">{{ $exam->id_exam }}</td>                                
                                <!-- <td style="display: none;">{{ $exam->id_exam }}</td>                                
                                <td style="display: none;">{{ $exam->id_exam }}</td>-->
                                <td>{{ $exam->name }}</td>
                                <td>{{ $exam->mark }}</td>
                                <td>
                                    <form action="{{ route('exams.destroy',$exam->id_exam) }}" method="POST">                                        
                                        @can('editar-exam')
                                        <a class="btn btn-info" href="{{ route('exams.edit',$exam->id_exam) }}">Editar</a>
                                        @endcan

                                        @csrf
                                        @method('DELETE')
                                        @can('borrar-exam')
                                        <button type="submit" class="btn btn-danger">Borrar</button>
                                        @endcan
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>

                        <!-- Ubicamos la paginacion a la derecha -->
                        <div class="pagination justify-content-end">
                            {!! $exams->links() !!}
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection