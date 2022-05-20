@extends('layouts.app')

@section('content')
<section class="section">
  <div class="section-header">
      <h3 class="page__heading">Schedule</h3>
  </div>
      <div class="section-body">
          <div class="row">
              <div class="col-lg-12">
                  <div class="card">
                      <div class="card-body">
                          <a class="btn btn-warning" href="{{ route('schedule.create') }}">Nuevo</a>

                            <table class="table table-striped mt-2">
                              <thead style="background-color:#6777ef">
                                 
                                  <th style="color:#fff;">id_schedule</th>
                                  <th style="color:#fff;">id_class</th>
                                  <th style="color:#fff;">time_start</th>
                                  <th style="color:#fff;">time_end</th>                                  
                                  <th style="color:#fff;">day</th>
                                  <th style="color:#fff;">Acciones</th>
                              </thead>
                              <tbody>
                                @foreach ($schedule as $schedule)
                                  <tr>
                                                                   
                                    <td>{{ $schedule->id_schedule }}</td>
                                    <td>{{ $schedule->id_class }}</td>
                                    <td>{{ $schedule->time_start }}</td>
                                    <td>{{ $schedule->time_end }}</td>
                                    <td>{{ $schedule->day }}</td>                                                                                                         
                                    <td>
                                    <form action="{{ route('schedule.destroy', $schedule->id_schedule) }}" method="POST">
                                                  
                                                        <a class="btn btn-info"
                                                            href="{{ route('schedule.edit', $schedule->id_schedule) }}">Editar</a>
                                                    
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
