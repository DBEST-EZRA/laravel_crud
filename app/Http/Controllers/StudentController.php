<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index(){
        $students = Student::all();

        return view('students.index', ['students'=>$students]);       
    }

    public function create(){
        return view('students.create'); 
    }

    public function store(Request $request){
        $data = $request->validate([
            'studname' => 'required',
            'course' => 'required',
            'fee' => 'required',
        ]);

        $newStudent = Student::create($data);

        return redirect(route('student.index'))->with('success','Student Details added successfully');
    }

    public function show(Student $student){
        // return view('students.show', compact('student'));
    }

    public function edit(Student $student){
        return view('students.edit', ['student'=>$student]);
    }

    public function update(Request $request, Student $student){
        $data = $request->validate([
            'studname' => 'required',
            'course' => 'required',
            'fee' => 'required',
        ]);

        $student->update($data);

        return redirect(route('student.index'))->with('success','Student Details updated successfully');
        
    }

    public function destroy(Student $student){
        $student->delete();

        return redirect(route('student.index'))
        ->with('success','Student details deleted successfully');
    }
}
