<?php

namespace App\Http\Controllers\HomeWork;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TemplateController extends Controller
{
    public function blankpage(){
        return view('template.blank');
    }
}
