<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class StudentController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'verified'], ['except' => ['index', 'show']]);
    }

    public function index(){
        $students = Student::orderBy('last_name', 'ASC')->orderBy('first_name', 'ASC')->paginate(20);
        return View('students.index')->With('students', $students);
    }

    public function create() {
        return View('students.create');
    }

    public function store(Request $request) {
        $validatedData = $request->validate([
            'id_number' => 'required',
            'last_name' => 'required',
            'first_name' => 'required',
            'middle_name' => 'required',
            'email' => 'required',
            'course' => 'required',
        ]);

        $student = new Student();
        $student->id_number = $request->input('id_number');
        $student->last_name = $request->input('last_name');
        $student->first_name = $request->input('first_name');
        $student->middle_name = $request->input('middle_name');
        $student->email = $request->input('email');
        $student->course = $request->input('course');
        $student->added_by = auth()->user()->id;
        $student->save();

        return Redirect('/students/')->With('success', 'Student data has been inserted!');
    }

    public function show($id) {
        $student = Student::find($id);
        return View('students.single')->With('student', $student);
    }

    public function edit($id) {
        $student = Student::Find($id);
        return View('students.edit')->With('student', $student);
    }

    public function update(Request $request, $id) {
        $validatedData = $request->validate([
            'id_number' => 'required',
            'last_name' => 'required',
            'first_name' => 'required',
            'middle_name' => 'required',
            'email' => 'required',
            'course' => 'required',
        ]);

        $student = Student::find($id);
        $student->id_number = $request->input('id_number');
        $student->last_name = $request->input('last_name');
        $student->first_name = $request->input('first_name');
        $student->middle_name = $request->input('middle_name');
        $student->email = $request->input('email');
        $student->course = $request->input('course');
        $student->save();

        return Redirect('/students/')->With('success', 'Student data has been inserted!');
    }

    public function destroy($id) {
        $student = Student::find($id);
        $student->delete();

        return Redirect('/students/')->With('success', 'Student data has been deleted!');
    }
}
