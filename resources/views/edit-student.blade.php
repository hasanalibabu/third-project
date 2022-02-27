@extends('master')

@section('title')
    Edit Student Page
@endsection

@section('body')
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header bg-dark text-white text-center">Edit Student Form</div>
                        <div class="card-body bg-secondary text-white">
                            <h4 class="text-success text-center">{{Session::get('massage')}}</h4>
                            <form action="{{route('update-student', ['id' =>$student->id])}}" method="post">
                                @csrf
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="name" value="{{$student->name}}"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Email</label>
                                    <div class="col-md-9">
                                        <input type="email" class="form-control" name="email" value="{{$student->email}}"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Mobile</label>
                                    <div class="col-md-9">
                                        <input type="number" class="form-control" name="mobile" value="{{$student->mobile}}"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label"></label>
                                    <div class="col-md-9">
                                        <input type="submit" class="btn btn-success" value="Update New Student"/>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
