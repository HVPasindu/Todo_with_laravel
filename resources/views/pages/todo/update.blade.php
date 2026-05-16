@extends('layouts.app')

@section('content')
    <div class="container text-center">
        <h1 class="page-title">Update Todo</h1>
    </div>

    <form class="ms-5 mt-4" style="max-width: 600px;" action="{{ route('todo.update', $task->id) }}" method="POST">
        @csrf

        <div class="row mb-3 align-items-center">
            <label for="name" class="col-sm-3 col-form-label">Name</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="name" name="name" value="{{ $task->name }}">
            </div>
        </div>

        <div class="row mb-3 align-items-center">
            <label for="address" class="col-sm-3 col-form-label">Address</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="address" name="address" value="{{ $task->address }}">
            </div>
        </div>

        <button type="submit" class="btn btn-success">Update</button>
        <a href="{{ route('todo') }}" class="btn btn-secondary">Back</a>
    </form>
@endsection

@push('css')
    <style>
        .page-title {
            padding-top: 5vh;
            color: #65c908;
            font-size: 5rem;
        }
    </style>
@endpush
