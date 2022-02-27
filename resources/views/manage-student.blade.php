@extends('master')

@section('title')
    manage Student Page
@endsection

@section('body')

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header bg-dark text-center text-white">All Student</div>
                        <div class="card-body">
                            <h3 class="text-success text-center">{{Session::get('massage')}}</h3>
                            <table class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>SL NO</th>
                                    <th>Student ID</th>
                                    <th>Student Name</th>
                                    <th>Student Email</th>
                                    <th>Student Mobile</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($students as $student)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$student->id}}</td>
                                        <td>{{$student->name}}</td>
                                        <td>{{$student->email}}</td>
                                        <td>{{$student->mobile}}</td>
                                        <td>
                                            <a href="{{route('edit-student', ['id' => $student->id])}}" class="btn btn-success btn-sm">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="" class="btn btn-danger btn-sm" onclick="deleteStudent({{$student->id}})">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                            <form method="POST" action="{{route('delete-student', ['id' =>$student->id])}}" id="deleteStudentForm{{$student->id}}">
                                                @csrf
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
    <script>
        function deleteStudent(id)
        {
            event.preventDefault();
            var check = confirm('Are you sure to delete this....');
            if(check)
            {
                document.getElementById('deleteStudentForm'+id).submit();
            }
        }
    </script>

@endsection
