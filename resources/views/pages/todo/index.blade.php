@extends('layouts.app')


@section('content')
    <div class="container text-center ma">
        <div class="row">
            <div class="col">
                <h1 class="page-title">Todo Page</h1>
            </div>



        </div>


    </div>

    <form class="ms-5 mt-4" style="max-width: 600px;" action="{{ route('todo.store') }}" method="POST" enctype="multipart/form">
        @csrf
        <div class="row mb-3 align-items-center">
            <label for="name" class="col-sm-3 col-form-label">Name</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="name" name="name">
            </div>
        </div>

        <div class="row mb-3 align-items-center">
            <label for="address" class="col-sm-3 col-form-label">Address</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="address" name="address">
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>

    </form>
@endsection

@push('css')
    <style>
        .page-title {
            padding-top: 5vh;
            color: #65c908;
            font-size: 5rem
        }
    </style>
@endpush
