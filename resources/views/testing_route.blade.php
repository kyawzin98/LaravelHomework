@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="jumbotron bg-dark">
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <a href="{{route('homework.home')}}" type="button" class="btn btn-outline-success">Home Page</a>
                        <a href="{{route('homework.about')}}" type="button" class="btn btn-outline-warning">About</a>
                        <a href="{{route('homework.contactUs')}}" type="button" class="btn btn-outline-info">Contact Us</a>
                        <a href="{{route('homework.orders')}}" type="button" class="btn btn-outline-danger">Orders</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection