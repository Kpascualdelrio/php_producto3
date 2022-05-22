@extends('layoutsStudents.app')

@section('content')
<section class="section">
    <div class="section-header">
        <h3 class="page__heading">class</h3>
    </div>
    <div class="section-body">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">




                        <table class="table">
                            <thead style="background-color: #6777ef;">
                                <th style="color: #fff;">id_class</th>
                                <th style="color: #fff;">id_teacher</th>
                                <th style="color: #fff;">id_course</th>
                                <th style="color: #fff;">id_schedule</th>
                                <th style="color: #fff;">name</th>
                                <th style="color: #fff;">color</th>
                           

                            </thead>
                            <tbody>
                                @foreach($class as $class)
                                <tr>
                                    <td>{{$class->id_class}}</td>
                                    <td>{{$class->id_teacher}}</td>
                                    <td>{{$class->id_course}}</td>
                                    <td>{{$class->id_schedule}}</td>
                                    <td>{{$class->name}}</td>
                                    <td>{{$class->color}}</td>
                                
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection