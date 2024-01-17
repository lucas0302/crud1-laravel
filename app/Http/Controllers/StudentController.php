<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student; //add o models studaent - a data vem do banco de dados por meio dos models
class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::all();
        return view("students.index")->with("students", $students);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("students.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();
        Student::create($input);
        return redirect("student")->with("flash_message", "Student Addedd!");

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $student = Student::find($id);
        return view('students.show')->with('student',$student);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $student = Student::find($id);
        return view("students.edit")->with('students',$student);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $student = Student::find($id);
        $input = $request->all();
        $student->update($input);
        return redirect("student")->with("flash_message", "Student Updated!");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Student::destroy($id);
        return redirect("student")->with("flash_message", "Student deleted!");
    }
}
