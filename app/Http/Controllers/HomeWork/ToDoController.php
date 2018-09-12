<?php

namespace App\Http\Controllers\HomeWork;

use App\ToDo;
use function Couchbase\defaultDecoder;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ToDoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['todolists']=ToDo::all();
        return view('todo.todo')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('todo.add_new_task');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=$request->except(['_token','add']);

//        $data=[
//            'title'=>$request->title,
//            'description'=>$request->description,
//            'user_by'=>1,
//            'completed'=>false
//        ];

        ToDo::create($data);
        return redirect(route('ToDo.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['todo']=ToDo::find($id);
        return view('todo.edit_new_task')->with($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $todo=ToDo::find($id);

        $data=$request->except(['_token','add']);
        $todo->update($data);

        return redirect(route('ToDo.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ToDo::destroy($id);
        return redirect()->back();
    }
}
