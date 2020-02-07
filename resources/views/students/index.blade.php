@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body">
                @if(session('success'))
                    <div class="alert alert-success">
                        <strong>Success:</strong> {{ session('success') }} 
                    </div>
                @endif

                @if(session('error'))
                    <div class="alert alert-danger">
                        <strong>Error:</strong> {{ session('error') }} 
                    </div>
                @endif

                @if(count($students) > 0)
                    <a href="/students/create" class="btn btn-success" style="margin-bottom:20px">Add Record</a>
                    <div class="table-reponsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>ID Number</th>
                                    <th>Name (LN, FN MN)</th>
                                    <th>Course</th>
                                    <th>Email</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($students as $student)
                                    <tr>
                                        <td>{{ $student->id }}</td>
                                        <td>{{ $student->id_number }}</td>
                                        <td>{{ $student->last_name}}, {{$student->first_name}} {{$student->middle_name}}</td>
                                        <td>{{ $student->course }} </td>
                                        <td>{{ $student->email }}</td>
                                        <td>
                                            <a href="{{ url('/students/' . $student->id) }}" class="btn btn-info">View</a>
                                            <a href="{{ url('/students/' . $student->id . '/edit') }}" class="btn btn-info">Edit</a>
                                            <a href="#" class="btn btn-info" onclick="event.preventDefault(); document.getElementById('student_delete_{{ $student->id }}').submit();">Delete</a>

                                        <form id="student_delete_{{ $student->id }}" method="POST" action="{{ url('/students/' . $student->id) }}">
                                                @csrf
                                                @method('DELETE')
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @else
                    <div class="text-center">
                        <h1>No Student Records Found!</h1>
                        <a href="/students/create" class="btn btn-success">Add Record</a>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection