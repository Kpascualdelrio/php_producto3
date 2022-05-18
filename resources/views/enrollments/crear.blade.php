@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Crear Enrollment</h3>
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

                    <form action="{{ route('enrollments.store') }}" method="POST">
                        @csrf
                        <div class="row">                            
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                   <label for="id_course">Id_course</label>
                                   <input type="text" name="id_course" class="form-control">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                   <label for="id_student">Id_student</label>
                                   <input type="text" name="id_student" class="form-control">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                   <label for="created_at">created_at</label>
                                   <input type="date" name="created_at" class="form-control">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                   <label for="updated_at">Updated_at</label>
                                   <input type="date" name="updated_at" class="form-control">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                   <label for="status">Status</label>
                                   <input type="text" name="status" class="form-control">
                                </div>
                            </div>                            
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