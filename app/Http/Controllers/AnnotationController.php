<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnnotationController extends Controller
{
    public function index()
    {
        return view('annotations');
    }
}
