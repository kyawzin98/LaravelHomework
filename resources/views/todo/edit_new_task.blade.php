@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <h5 class="card-header text-center">
                To Do List App
            </h5>
            <div class="card-body">
                <form action="{{route('ToDo.update',$todo->id)}}" method="post">
                    @csrf
                    @method('PATCH')
                    <input type="hidden" value="{{auth()->id()}}" name="user_by">
                    <input type="hidden" value="0" name="completed">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="">Title</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" class="form-control" value="{{$todo->title}}" name="title" id="" placeholder="Type title name">
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-4">
                                <label for="">Description</label>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <textarea class="form-control" name="description" id="" rows="3">{{$todo->description}}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 mx-auto">
                            <button type="submit" class="btn btn-primary" name="add">Add to List</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection