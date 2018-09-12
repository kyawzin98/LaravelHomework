<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class NewHomeController extends Controller
{
    //
    public function index(){
//        echo "This is from NewHomeController";
        return view('newhome');
    }

    public function show(){
        return view('show');
    }

    public function message(){
        echo "This is Message";
    }
}
