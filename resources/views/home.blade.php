@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        You are logged in!
                        <br><br>
                        <div class="row">
                            <div class="col">
                                <a href="{{route('test.newHome')}}" class="btn btn-sm btn-primary mt-2">Go to test
                                    Controller</a>
                            </div>
                            <div class="col">
                                <a href="{{route('show.route')}}" class="btn btn-sm btn-secondary mt-2">Testing URL with
                                    Route Name</a>
                            </div>
                            <div class="col">
                                <a href="{{route('homework.blank')}}" class="btn btn-sm btn-success mt-2">Go to Blank Page</a>
                            </div>
                            <div class="col">
                                <a href="{{route('ToDo.index')}}" class="btn btn-sm btn-warning mt-2">Go to ToDo App</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
