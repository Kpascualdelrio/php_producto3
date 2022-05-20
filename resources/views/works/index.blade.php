@extends('layouts.app')

@section('content')
<section class="section">
  <div class="section-header">
    <h3 class="page__heading">Works</h3>
  </div>
  <div class="section-body">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <a class="btn btn-warning" href="{{ route('works.create') }}">Nuevo</a>
            <table class="table responsive mt-2">
              <thead style="background-color:#6777ef">
                <th style="color:#fff;">id</th>
                <th style="color:#fff;">id_class</th>
                <th style="color:#fff;">id_student</th>
                <th style="color:#fff;">name</th>
                <th style="color:#fff;">mark</th>
                <th style="color:#fff;">created_at</th>
                <th style="color:#fff;">updated_at</th>
                <th style="color:#fff;">Acciones</th>
              </thead>
              <tbody>
                @foreach ($works as $works)
                <tr>

                  <td>{{ $works->id }}</td>
                  <td>{{ $works->id_class }}</td>
                  <td>{{ $works->id_student }}</td>
                  <td>{{ $works->name }}</td>
                  <td>{{ $works->mark }}</td>
                  <td>{{ $works->created_at }}</td>
                  <td>{{ $works->updated_at }}</td>

                  <td>
                    <form action="{{ route('works.destroy', $works->id) }}" method="POST">
                      <a class="btn btn-info" href="{{ route('works.edit', $works->id) }}">Editar</a>
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-danger">Borrar</button>
                    </form>
                  </td>
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