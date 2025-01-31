<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Cohorts;
use App\Models\User;
use App\Http\Requests\StoreStudentRequest;
use App\Http\Requests\UpdateLearnersRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::with(['user', 'cohort', 'studentApplication'])->get();
        return view('students.index', compact('students'));
    }

    // public function create()
    // {
    //     return view('students.create');
    // }
    public function create()
{
    $users = User::all();  // Get all users
    $cohorts = Cohorts::all();  // Get all cohorts
    $studentApplications = StudentApplication::all();  // Get all student applications

    return view('students.fields', compact('users', 'cohorts', 'studentApplications'));
}


    public function store(StoreStudentRequest $request)
    {
        Student::create($request->validated());
        Session::flash('success', 'Student created successfully.');
        return redirect()->route('students.index');
    }

    public function show(Student $student)
    {
        return view('students.show', compact('student'));
    }

    public function edit(Student $student)
    {
        return view('students.edit', compact('student'));
    }

    public function update(UpdateLearnersRequest $request, Student $student)
    {
        $student->update($request->validated());
        Session::flash('success', 'Student updated successfully.');
        return redirect()->route('students.index');
    }

    public function destroy(Student $student)
    {
        $student->delete();
        Session::flash('success', 'Student deleted successfully.');
        return redirect()->route('students.index');
    }
}
