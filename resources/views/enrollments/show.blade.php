@extends('layoutsStudents.app')

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
                        <table class="table table-striped mt-2">
                            <thead style="background-color:#6777ef">
                                <th style="color:#fff;">id</th>
                                <th style="color:#fff;">id_student</th>
                                <th style="color:#fff;">id_course</th>
                                <th style="color:#fff;">status</th>
                          
                            </thead>
                            <tbody>
                                @foreach ($enrollments as $enrollment)
                                <tr>
                                    <td>{{ $enrollment->id }}</td>
                                    <td>{{ $enrollment->id_student }}</td>
                                    <td>{{ $enrollment->id_course }}</td>
                                    <td>{{ $enrollment->status }}</td>
                                  
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