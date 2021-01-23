@extends('layouts.master')
@section('title' ,'Edit')
@section('main_content')
    <div class="row justify-content-center">
        <div class="col-6">
            <h2 class="text-center">Edit User</h2>
            <hr>
            <form action="{{route('user.update',$user->id)}}" method="post">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <input type="text" class="form-control" name="name"value="{{$user->name}}">
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" name="email" value="{{$user->email}}">
                </div>
                <div class="form-group">
                    <button class="btn btn-block btn-success">Add New Data</button>
                </div>
            </form>
            <a href ="{{route('user.index')}}" class="btn btn-block btn-info">Back</a>
        </div>
    </div>
@stop