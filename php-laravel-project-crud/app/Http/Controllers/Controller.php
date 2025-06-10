<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Controller extends Controller
{
    public function index()
    {
        return view('students.index');
    }

    public function create()
    {
        return view('students.create');
    }

    public function store(Request $request)
    {
        // You can store data in DB here
        return back()->with('success', 'Student created successfully!');
    }
}

