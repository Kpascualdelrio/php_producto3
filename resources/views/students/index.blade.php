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
                                  <th style="display: none;">ID</th>
                                  <th style="color:#fff;">username</th>
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
                                    <td style="display: none;">{{ $student->id }}</td>
                                    <td>{{ $student->id }}</td>
                                    <td>{{ $student->username }}</td>
                                    <td>{{ $student->email }}</td>
                                    <td>{{ $student->name }}</td>
                                    <td>{{ $student->surname }}</td>
                                    <td>{{ $student->telephone }}</td>
                                    <td>{{ $student->nif }}</td>
                                    <td>{{ $student->date_registered }}</td>                                                                      
                                    <td>
                                    <form action="{{ route('students.destroy', $student->id) }}" method="POST">
                                                    @can('editar-students')
                                                        <a class="btn btn-info"
                                                            href="{{ route('students.edit', $student->id) }}">Editar</a>
                                                    @endcan
                                                    @csrf
                                                    @method('DELETE')
                                                    @can('borrar-students')
                                                        <button type="submit" class="btn btn-danger">Borrar</button>
                                                    @endcan
                                    </form>                                                     
                                    </td>                                   
                                  </tr>
                                @endforeach
                              </tbody>
                            </table>
                            <!-- Centramos la paginacion a la derecha -->
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
