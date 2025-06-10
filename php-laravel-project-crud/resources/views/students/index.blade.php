@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Students</h1>
        <a href="{{ route('students.create') }}" class="btn btn-primary">Add Student</a>
        <!-- Student list will go here -->
    </div>
@endsection
