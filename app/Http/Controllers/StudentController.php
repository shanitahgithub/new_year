<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Repositories\StudentRepository;
use App\Models\Student;
use App\Models\Cohorts;
use App\Models\StudentApplication;
use App\Models\User;
use App\Http\Requests\StoreStudentRequest;
use App\Http\Requests\UpdateLearnersRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class StudentController extends Controller
{
    protected $studentsRepository;

    // Inject StudentRepository via constructor
    public function __construct(StudentRepository $studentsRepository)
    {
        $this->studentsRepository = $studentsRepository;
    }

    public function index()
    {
        $students = Student::with(['user', 'cohort', 'studentApplication'])->get();
        return view('students.index', compact('students'));
    }

    public function create()
    {
        $users = User::all();  // Get all users
        $cohorts = Cohorts::all();  // Get all cohorts
        $studentApplications = StudentApplication::all();  // Get all student applications

        return view('students.fields', compact('users', 'cohorts', 'studentApplications'));
    }

    public function store(StoreStudentRequest $request)
    {
        $input = $request->all();

        // Add the currently logged-in user's ID to the input array
        $input['created_by'] = Auth::id();

        // Use the repository to create the student
        $this->studentsRepository->create($input);

        $application = Student::create($request->all());
        $user = User::find($request->user_id);
        return redirect()->route('students.index')
        ->with('success', "{$user->first_name} has been created successfully");


        // Flash success message
        Session::flash('success', 'Student created successfully.');
        return redirect()->route('students.index');
    }

    public function show(Student $student)
    {
        return view('students.show', compact('student'));
    }

    public function edit(Student $student)
    {    // Explicitly allow access
       
        
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
