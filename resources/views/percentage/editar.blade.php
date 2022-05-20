@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Editar Courses</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">

                        @if ($errors->any())
                            <div class="alert alert-dark alert-dismissible fade show" role="alert">
                            <strong>¡Revise los campos!</strong>
                                @foreach ($errors->all() as $error)
                                    <span class="badge badge-danger">{{ $error }}</span>
                                @endforeach
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                        @endif

<!-- 	id_percentage	id_course	id_class	continuous_assessment	exams	created_at	updated_at -->

                    <form action="{{ route('percentage.update',$copercentage->id_percentage) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                   <label for="id_course">id_course</label>
                                   <input type="text" name="id_course" class="form-control" value="{{ $percentage->id_course }}">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                   <label for="id_course">id_class</label>
                                   <input type="text" name="id_class" class="form-control" value="{{ $percentage->id_class }}">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                   <label for="continuous_assessment">continuous_assessment</label>
                                   <input type="text" name="continuous_assessment" class="form-control" value="{{ $percentage->continuous_assessment }}">

                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                   <label for="exams">exams</label>
                                   <input type="text" name="exams" class="form-control" value="{{ $percentage->exams }}">
                                </div>
                            </div>


                            <!--  -->
                                      <br>
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>
                    </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
