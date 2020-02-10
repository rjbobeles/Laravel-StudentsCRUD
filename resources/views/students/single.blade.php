@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body">
                <a href="{{ url('/students') }}" class="btn btn-info">Go Back</a>
                <a href="{{ url('/students/' . $student->id . '/edit') }}" class="btn btn-info">Edit</a>
                <a href="#" class="btn btn-info" onclick="event.preventDefault(); document.getElementById('student_delete').submit();">Delete</a>

                <form id="student_delete" method="POST" action="{{ url('/students/' . $student->id) }}">
                    @csrf
                    @method('DELETE')
                </form>

                <br><br>
                <b>Database ID:</b> {{ $student->id }} <br>
                <b>Student ID:</b> {{ $student->id_number }} <br>
                <b>Student Name:</b> {{ $student->last_name }}, {{ $student->first_name }} {{ $student->middle_name }} <br>
                <b>Email:</b> {{ $student->email }} <br> 
                <b>Course:</b> {{ $student->course }} <br>
                <b>Added By:</b> {{ $student->addedBy->username }} <br>
                <b>Created:</b> {{ $student->created_at }} <br>
                <b>Last Updated:</b> {{ $student->updated_at }} 
            </div>
        </div>
    </div>
@endsection