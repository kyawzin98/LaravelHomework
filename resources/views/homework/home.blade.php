@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="alert alert-success py-4">
                    {{"This is Home Page"}}
                    <a href="{{route('show.route')}}" class="btn btn-success float-right">
                        <i class="fa fa-arrow-left"></i>Back
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection