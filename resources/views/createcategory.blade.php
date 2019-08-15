@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create a new category</div>
                    <div class="card-body">
                        <form action="/categories/store" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="newcatname">Name</label>
                                <input type="text" class="form-control" name="newcatname">
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-success">Create!</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
