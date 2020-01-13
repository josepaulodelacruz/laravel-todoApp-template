@extends('layouts/app')

@section('title')
    Create Todo
@endsection

@section('content')

    <h1 class="text-center my-5">Todos Page</h1>
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card card-default">
                <div class="card-header">Edit Todo</div>
                <div class="card-body">
                    @if($errors->any())
                        <div class="alert alert-danger">
                            <ul class="list-group">
                                @foreach($errors->all() as $error)
                                    <li class="list-group-item">{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="/todos/{{ $todo->id }}/update-todos" method="POST">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Name" name="name" value="{{ $todo->name }}">
                        </div>
                        <div class="form-group">
                            <textarea type="text" class="form-control" cols="30" row="10" placeholder="Description" name="description">{{ $todo->description }}</textarea>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Edit Todo</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection


