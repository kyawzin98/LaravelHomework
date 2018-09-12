@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Testing Controllers</div>

                    <div class="card-body">
                        <form method="POST" action="{{route('message.show')}}">
                            @csrf
                            <input type="text" name="message" class="form-control" placeholder="Type Something ....">
                            <button type="submit" class="btn btn-success mt-3">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection