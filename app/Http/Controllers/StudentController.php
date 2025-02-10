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
use Illuminate\Support\Facades\Log;
class StudentController extends Controller
{
    protected $studentsRepository;

    // Inject StudentRepository via constructor
    public function __construct(StudentRepository $studentsRepository)
    {
        $this->studentsRepository = $studentsRepository;
    }

    // public function index()
    // {
    //     $students = Student::with(['user', 'cohort', 'studentApplication'])->get();
    //     return view('students.index', compact('students'));
    // }

    public function index()
{
    $students = Student::with(['user', 'cohort', 'studentApplication'])
                        ->orderBy('created_at', 'desc') // Order by newest first
                        ->get();
    return view('students.index', compact('students'));
}

// FOREIGN KEYS TO BE DISPLAYED
    public function create()
    {
        $users = User::all();  // Get all users
        $cohorts = Cohorts::all();  // Get all cohorts
        $studentApplications = StudentApplication::all();  // Get all student applications

        return view('students.fields', compact('users', 'cohorts', 'studentApplications'));
    }

    // public function store(StoreStudentRequest $request)
    // {
    //     $input = $request->all();

    //     // Add the currently logged-in user's ID to the input array
    //     $input['created_by'] = Auth::id();

    //     // Use the repository to create the student
    //     $this->studentsRepository->create($input);

    //     $application = Student::create($request->all());
    //     $user = User::find($request->user_id);
    //     return redirect()->route('students.index')
    //     ->with('success', "{$user->first_name} has been created successfully");


    //     // Flash success message
    //     Session::flash('success', 'Student created successfully.');
    //     return redirect()->route('students.index');
    // }

    public function store(StoreStudentRequest $request)
{
    $input = $request->all();

    // Add the currently logged-in user's ID
    $input['created_by'] = Auth::id();

    // Use only one method to create the student
    $application = $this->studentsRepository->create($input);

    // Get the user
    $user = User::find($request->user_id);

    // Flash success message
    return redirect()->route('students.index')
        ->with('success', "{$user->first_name} has been created successfully.");
}


    public function show(Student $student)
    {
        return view('students.show', compact('student'));
    }

    // public function edit(Student $student)
    // {    $cohorts = Cohorts::all();// Explicitly allow access

        
        
       
        
    //     return view('students.edit', compact('student','cohorts'));
    // }

    public function edit(Student $student)
    {
        $cohorts = Cohorts::all();
        $studentApplications = StudentApplication::all();

        return view('students.edit', compact('student', 'cohorts', 'studentApplications'));
    }

    // public function update(UpdateLearnersRequest $request, Student $student)
    // {
    //     $student->update($request->validated());
    //     // Session::flash('success', 'Student updated successfully.');
    //     session()->flash('success', "{$student->user->first_name} has been updated successfully");
    //     return redirect()->route('students.index');
    // }

    public function update(UpdateLearnersRequest $request, Student $student)
{
    $validated = $request->validated();  // Ensure data is validated
    $student->update($validated);        // Update the student record

    session()->flash('success', "{$student->user->first_name} has been updated successfully");
    return redirect()->route('students.index');
}





  
    public function destroy(Student $student)
    {
        $student->delete();
        // Session::flash('success', 'Student deleted successfully.');
        session()->flash('success', "{$student->user->first_name} has been deleted successfully");
        return redirect()->route('students.index');
    }
}