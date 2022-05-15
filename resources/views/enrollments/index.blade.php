@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">enrollments</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">


                            @can('crear-enrollments')
                                <a class="btn btn-warning" href="{{ route('enrollments.create') }}">Nuevo</a>
                            @endcan

                            <table class="table table-striped mt-2">
                                <thead style="background-color:#6777ef">
                                    <th style="display: none;">id</th>
                                    <th style="color:#fff;">id_student</th>
                                    <th style="color:#fff;">id_course</th>
                                    <th style="color:#fff;">status</th>
                                    <th style="color:#fff;">created_at</th>
                                    <th style="color:#fff;">updated_at</th>
                                    <th style="color:#fff;">Acciones</th>

                                </thead>
                                <tbody>
                                    @foreach ($enrollments as $enrollment)
                                        <tr>
                                            <td style="display: none;">{{ $enrollment->id }}</td>
                                            <td>{{ $enrollment->id_student }}</td>
                                            <td>{{ $enrollment->id_course }}</td>
                                            <td>{{ $enrollment->status }}</td>
                                            <td>{{ $enrollment->created_at }}</td>
                                            <td>{{ $enrollment->updated_at }}</td>
                                            <td>
                                                <form action="{{ route('enrollments.destroy', $enrollment->id) }}" method="POST">
                                                    @can('editar-enrollments')
                                                        <a class="btn btn-info"
                                                            href="{{ route('enrollments.edit', $enrollment->id) }}">Editar</a>
                                                    @endcan
                                                    @csrf
                                                    @method('DELETE')
                                                    @can('borrar-enrollments')
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
                                {{-- {!! $enrollments->links() !!} --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
