<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Program;
use App\Models\StudentApplication;
use Illuminate\Http\Request;

class StudentApplicationController extends Controller
{
    public function index()
    {
        $applications = StudentApplication::with(['program', 'user'])->get();
        return view('student_applications.index', compact('applications'));
    }

    public function create()
    {
        $users = User::all();
        $programs = Program::all() ; 
        return view('student_applications.create', compact('users','programs'));
        // return view('student_applications.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'date_of_birth' => 'required|date',
            'address' => 'required|string',
            'status' => 'required|in:pending,approved,rejected',
            'program_id' => 'required|exists:programs,id',
            'user_id' => 'required|exists:users,id',
            'nationality' => 'required|string',
            'guardian_name' => 'required|string',
            'guardian_contact' => 'required|string',
            'interview_date' => 'nullable|date',
            'interview_result' => 'required|in:pending,passed,failed',
            'submitted_documents' => 'required|string',
            'secondary_school' => 'required|string',
            'combination' => 'required|string',
            'points_scored' => 'required|integer',
            'uace_year_of_completion' => 'nullable|string'
        ]);
    //    This returns the success message including the user name
        StudentApplication::create($validatedData);
        $application = StudentApplication::create($request->all());
        $user = User::find($request->user_id);
        return redirect()->route('student_applications.index')
        ->with('success', "{$user->first_name} has been created successfully");

        // return redirect()->route('student_applications.index')->with('success', '{$user->first_name}has been created successfully');
    }

    public function show(StudentApplication $studentApplication)
    {
        return view('student_applications.show', compact('studentApplication'));
    }

    public function edit(StudentApplication $studentApplication)
    {
        return view('student_applications.edit', compact('studentApplication'));
    }

    public function update(Request $request, StudentApplication $studentApplication)
    {
        $validatedData = $request->validate([
            'date_of_birth' => 'required|date',
            'address' => 'required|string',
            'status' => 'required|in:pending,approved,rejected',
            'program_id' => 'required|exists:programs,id',
            'user_id' => 'required|exists:users,id',
            'nationality' => 'required|string',
            'guardian_name' => 'required|string',
            'guardian_contact' => 'required|string',
            'interview_date' => 'nullable|date',
            'interview_result' => 'required|in:pending,passed,failed',
            'submitted_documents' => 'required|string',
            'secondary_school' => 'required|string',
            'combination' => 'required|string',
            'points_scored' => 'required|integer',
            'uace_year_of_completion' => 'nullable|string'
        ]);
        //  dd($validatedData);
        $studentApplication->update($validatedData);

        session()->flash('success', "{$studentApplication->user->first_name} has been updated successfully");
    return redirect()->route('students.index');

        // return redirect()->route('student_applications.index')->with('success', 'Application updated successfully');
    }

    public function destroy(StudentApplication $studentApplication)
    {
        $studentApplication->delete();
        return redirect()->route('student_applications.index')->with('success', 'Application deleted successfully');
    }

    

    public function bulkDelete(Request $request)
    {
        // Get the selected application IDs
        $ids = explode(',', $request->input('ids'));

        // Delete the selected student applications
        StudentApplication::destroy($ids);

        return redirect()->route('student_applications.index')->with('success', 'Selected applications deleted.');
    }
}

