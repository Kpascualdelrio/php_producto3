@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Percentatge</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">

                         
                            <a href="{{ route('percentage.create') }}" class="btn btn-warning">Nuevo</a>
                      
                            <table class="table table-striped mt-2">
                                <thead style="background-color: #6777ef;">
                                    <th style="color: #fff;">id_percentage</th>
                                    <th style="color: #fff;">id_course</th>
                                    <th style="color: #fff;">id_class</th>
                                    <th style="color: #fff;">continuous_assessment</th>
                                    <th style="color: #fff;">exams</th>
                                    <th style="color: #fff;">created_at</th>
                                    <th style="color: #fff;">updated_at</th>
                                    <th style="color: #fff;">Acciones</th>
                                </thead>
                                <tbody>
                                    @foreach($percentage as $percentatge)
                                    <tr>
                                        <td>{{$percentatge->id_percentage}}</td>
                                        <td>{{$percentatge->id_course}}</td>
                                        <td>{{$percentatge->id_class}}</td>
                                        <td>{{$percentatge->continuous_assessment}}</td>
                                        <td>{{$percentatge->exams}}</td>
                                        <td>{{$percentatge->created_at}}</td>
                                        <td>{{$percentatge->updated_at}}</td>
                                                                   
                                        <td>
                                           <form action="{{ route('percentage.destroy', $percentatge->id_percentage) }}" method="POST">
                                             
                                               <a href="{{ route('percentage.edit', $percentatge->id_percentage) }}" class="btn btn-info">Editar</a>
                                            

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

