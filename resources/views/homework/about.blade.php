@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="alert alert-warning py-4">
                    {{"This is About"}}
                    <a href="{{route('show.route')}}" class="btn btn-warning float-right">
                        <i class="fa fa-arrow-left">Back</i>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection