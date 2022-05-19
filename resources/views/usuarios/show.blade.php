@extends('layoutsStudents.app')

@section('content')
<section class="section">
  <div class="section-header">
      <h3 class="page__heading">Usuarios</h3>
  </div>
      <div class="section-body">
          <div class="row">
              <div class="col-lg-12">
                  <div class="card">
                      <div class="card-body">
                          <a class="btn btn-warning" href="{{ route('usuarios.create') }}">Nuevo</a>

                            <table class="table table-striped mt-2">
                              <thead style="background-color:#6777ef">
                                  <th style="display: none;">ID</th>
                                  <th style="color:#fff;">Nombre</th>
                                  <th style="color:#fff;">E-mail</th>
                                  <th style="color:#fff;">Rol</th>
                                  <th style="color:#fff;">Acciones</th>
                              </thead>
                              <tbody>
                              
                                  <tr>
                                    <td style="display: none;">{{ $usuarios->id }}</td>
                                    <td>{{ $usuarios->name }}</td>
                                    <td>{{ $usuarios->email }}</td>
                                    <td>
                                   
                                      <h5><span class="badge badge-dark">{{ $usuarios->role}}</span></h5>
                                    

                                    </td>

                                   
                                  </tr>
                               
                              </tbody>
                            </table>
                          

                      </div>
                  </div>
              </div>
          </div>
      </div>
    </section>
@endsection
