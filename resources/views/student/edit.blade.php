@extends('layouts.master')
@section('title' ,'Edit')
@section('main_content')
    <div class="row justify-content-center">
        <div class="col-6">
            <h2 class="text-center">Edit Student</h2>
            <hr>
            <form action="{{route('student.update',$student->id)}}" method="post">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <input type="text" class="form-control" name="name"value="{{$student->name}}">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="roll" value="{{$student->roll}}">
                </div>
                <div class="form-group">
                    <button class="btn btn-block btn-success">Add New Data</button>
                </div>
            </form>
            <a href ="{{route('student.index')}}" class="btn btn-block btn-info">Back</a>
        </div>
    </div>
@stop