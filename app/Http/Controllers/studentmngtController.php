<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentMngtController extends Controller
{
    // Add your methods here
    public function index()
    {
        return view('student.index');
    }
}
