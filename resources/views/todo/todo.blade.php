@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <h2>List of Task To Do</h2>
                    </div>
                    <div class="col-md-6">
                        <a href="{{route('ToDo.create')}}" class="btn btn-success float-right">Add New Task</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>User_By</th>
                            <th>Completed</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($todolists as $todolist)
                            <tr>
                                <td>{{$todolist->id}}</td>
                                <td>{{$todolist->title}}</td>
                                <td>{{$todolist->description}}</td>
                                <td>{{$todolist->user->email}}</td>
                                <td>
                                    @if($todolist->completed)
                                        <span class="badge badge-success">Complete</span>
                                        @else
                                        <span class="badge badge-danger">Incomplete</span>
                                    @endif

                                </td>
                                <td>
                                    <a href="{{route('ToDo.edit',$todolist->id)}}" class="btn btn-primary">Edit</a>
                                </td>
                                <td>
                                    <a href="javascript:" class="btn btn-danger"
                                       onclick="event.preventDefault();document.getElementById('delete_task_{{$todolist->id}}').submit();">
                                        Delete
                                    </a>
                                    <form id="delete_task_{{$todolist->id}}" action="{{ route('ToDo.destroy',$todolist->id) }}" method="POST" style="display: none;">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
@endsection