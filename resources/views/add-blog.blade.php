@extends('master')

@section('title')
    Add Student Page
@endsection

@section('body')
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header bg-dark text-white text-center">Add Blog Form</div>
                        <div class="card-body bg-secondary text-white">
                            <h4 class="text-success text-center">{{Session::get('massage')}}</h4>
                            <form action="{{route('add-blog')}}" method="post">
                                @csrf
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Blog Title</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="title" value=""/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Author Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="author" value=""/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Blog Description</label>
                                    <div class="col-md-9">
                                        <textarea class="form-control" name="description" value=""></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label"></label>
                                    <div class="col-md-9">
                                        <input type="submit" class="btn btn-success" value="Create New Blog"/>
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
