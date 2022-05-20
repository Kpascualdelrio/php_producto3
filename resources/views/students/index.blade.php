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
                          <a class="btn btn-warning" href="{{ route('students.create') }}">Nuevo</a>

                            <table class="table table-striped mt-2">
                              <thead style="background-color:#6777ef">
                                  <th style="color:#fff;">ID</th>
                                  <th style="color:#fff;">ID_Students</th>
                                  <th style="color:#fff;">Name</th>
                                  <th style="color:#fff;">Mark</th>
                              </thead>
                              <tbody>
                                @foreach ($students as $students)
                                  <tr>
                                    <td style="display: none;">{{ $work->id }}</td>
                                    <td>{{ $work->id_student }}</td>
                                    <td>{{ $work->name }}</td>
                                    <td>{{ $work->mark }}</td>
                                    <td>
                                    <form action="{{ route('works.destroy', $work->id) }}" method="POST">

                                                        <a class="btn btn-info"
                                                            href="{{ route('works.edit', $work->id) }}">Editar</a>

                                                    @csrf
                                                    @method('DELETE')

                                                        <button type="submit" class="btn btn-danger">Borrar</button>

                                    </form>
                                    </td>
                                  </tr>
                                @endforeach
                              </tbody>
                            </table>
                            <!-- Centramos la paginacion a la derecha -->
                          <div class="pagination justify-content-end">
                            {!! $works->links() !!}
                          </div>

                      </div>
                  </div>
              </div>
          </div>
      </div>
    </section>
@endsection
