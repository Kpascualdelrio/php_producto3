@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">teachers</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">


                            
                                <a class="btn btn-warning" href="{{ route('teachers.create') }}">Nuevo</a>
                          

                            <table class="table table-striped mt-2">
                                <thead style="background-color:#6777ef">
                                    <th style="display: none;">id_teacher</th>
                                    <th style="color:#fff;">Name</th>
                                    <th style="color:#fff;">Surname</th>
                                    <th style="color:#fff;">Telephone</th>
                                    <th style="color:#fff;">Nif</th>
                                    <th style="color:#fff;">Email</th>
                                    <th style="color:#fff;">Acciones</th>

                                </thead>
                                <tbody>
                                    @foreach ($teachers as $teachers)
                                        <tr>
                                            <td style="display: none;">{{ $teachers->id_teacher }}</td>
                                            <td>{{ $teachers->name }}</td>
                                            <td>{{ $teachers->surname }}</td>
                                            <td>{{ $teachers->telephone }}</td>
                                            <td>{{ $teachers->nif }}</td>
                                            <td>{{ $teachers->email }}</td>
                                            <td>
                                                <form action="{{ route('teachers.destroy', $teachers->id_teacher) }}" method="POST">
                                                   
                                                        <a class="btn btn-info"
                                                            href="{{ route('teachers.edit', $teachers->id_teacher) }}">Editar</a>
                                                  
                                                    @csrf
                                                    @method('DELETE')
                                                    
                                                        <button type="submit" class="btn btn-danger">Borrar</button>
                                                   
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                            <!-- Ubicamos la paginacion a la derecha -->
                            <div class="pagination justify-content-end">
                                {{-- {!! $teachers->links() !!} --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
