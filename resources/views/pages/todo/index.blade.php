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
    <table class="table table-style table-bordered border-primary table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Address</th>
                <th scope="col">status</th>
                <th scope="col">Action</th>
                <th scope="col">Status Update</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($tasks as $key => $task)
                <tr>
                    <th scope="row">{{ ++$key }}</th>
                    <td>{{ $task->name }}</td>
                    <td>{{ $task->address }}</td>
                    <td>
                        @if ($task->done ==0)
                            <span class="badge bg-danger text-white">Note Completed</span>
                        @else
                            <span class="badge bg-success  text-white">Completed</span>
                        @endif</td>
                    <td>
                        <a href="{{ route('todo.delete',$task->id) }}"><i class="fa-regular fa-trash-can"></i></a>
                        <a href="{{ route('updates',$task->id) }}"><i class="fa-solid fa-file-arrow-up"></i></a>

                    </td>
                    <td>
                        <a href="{{ route('todo.done',$task->id) }}"><i class="fa-brands fa-microblog"></i></a>
                    </td>
                </tr>
            @endforeach


        </tbody>
    </table>
@endsection

@push('css')
    <style>
        .page-title {
            padding-top: 5vh;
            color: #65c908;
            font-size: 5rem
        }

        .table-style {
            margin-top: 5vh;
        }
    </style>
@endpush
