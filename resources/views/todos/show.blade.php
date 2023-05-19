
@extends('layouts.app')

@section('content')
        <h1 class="text-center my-5"> The Todos Item</h1>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-header">{{ $todo->name }} <a href="/todos" class="btn btn-primary btn-sm float-right">View</a></div>
                    <div class="card-body">
                        {{ $todo->description }}
                        <br><br>
                        <i>Created At : {{ $todo->created_at }}</i>
                    </div>
                </div>
                <a href="/todos/{{ $todo->id }}/edit" class="btn btn-info btn-sm my-2">Edit</a>
            </div>
        </div>   
@endsection