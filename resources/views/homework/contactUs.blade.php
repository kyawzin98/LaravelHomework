@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="alert alert-info py-4">
                    {{"This is Contact Us"}}
                    <a href="{{route('show.route')}}" class="btn btn-info float-right">
                        <i class="fa fa-arrow-left">Back</i>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection