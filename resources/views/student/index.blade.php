@extends('layouts.master')
@section('title' ,'Home')
@section('main_content')
    <div class="row">
        <div class="col-12">
            <h1 class="text-center">Repository Design Pattern CRUD</h1>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                Add New Data
            </button>
            <hr>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>SL</th>
                    <th>Name</th>
                    <th>Roll</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @forelse($students as $key => $student)
                    <tr>
                        <td>{{++$key}}</td>
                        <td>{{$student->name}}</td>
                        <td>{{$student->roll}}</td>
                        <td>
                            <a href="{{route('student.view',$student->id)}}" class="btn btn-sm btn-info">Edit</a>
                            <a href="{{route('student.delete',$student->id)}}" class="btn btn-sm btn-danger">Delete</a>
                        </td>
                    </tr>
                @empty
                @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add New Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{route('student.store')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" placeholder="Enter Name" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="roll" placeholder="Enter Roll" required>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-block btn-success">Add New Data</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop