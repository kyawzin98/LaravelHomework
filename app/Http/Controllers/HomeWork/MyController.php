<?php

namespace App\Http\Controllers\HomeWork;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MyController extends Controller
{
    public function showRoute(){
        return view('testing_route');
    }

    public function home(){
        return view('homework.home');
    }

    public function about(){
        return view('homework.about');
    }

    public function contactUs(){
        return view('homework.contactUs');
    }

    public function orders(){
        return view('homework.orders');
    }
}
