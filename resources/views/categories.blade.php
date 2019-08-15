@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card">
                    <div class="card-header">Current categories on the list</div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            @foreach($categories as $category)
                                <li class="list-group-item">{{ $category->name }}
                                    <a class="btn btn-danger float-right btn-sm ml-2" href="/categories/{{ $category->id }}/delete">Delete</a>
                                    <a class="btn btn-info float-right btn-sm" href="/categories/{{ $category->id }}/edit">Edit</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
