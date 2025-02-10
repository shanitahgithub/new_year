<?php 

namespace App\Http\Controllers;

use App\Models\StudentApplication;
use Illuminate\Http\Request;
use App\Models\Program;
use App\Models\User;
use App\Models\Student;
use App\Models\Cohorts;
use Illuminate\Support\Str;

use Illuminate\Support\Facades\Log;

class StudentApplicationController extends Controller
{
    /**
     * Display a listing of the student applications (for admins).
     */
    public function index()
    {

        $applications = StudentApplication::with('program')->get();
        return view('student_applications.index', compact('applications'));
    }
    public function create()
    {
        $programs = Program::all();
        return view('student_applications.create', compact('programs'));
    }

    



public function store(Request $request)
{
    // Validate the incoming request data
    $request->validate([
        'firstname' => 'required|string|max:255',
        'lastname' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email', // Ensure email is unique in users table
        'phone_number' => 'required|string|max:20|unique:users,phone_number',
        'gender' => 'required|string|in:Male,Female,Other',
        'date_of_birth' => 'required|date',
        'address' => 'nullable|string',
        'program_id' => 'required|exists:programs,id',
        'nationality' => 'nullable|string',
        'guardian_name' => 'nullable|string',
        'guardian_contact' => 'nullable|string',
        'interview_date' => 'nullable|date',
        'interview_result' => 'nullable|string',
        'submitted_documents' => 'nullable|string',
        'secondary_school' => 'nullable|string',
        'combination' => 'nullable|string',
        'points_scored' => 'nullable|numeric',
        'uace_year_of_completion' => 'nullable|integer|min:1900|max:' . date('Y'),
    ]);

    // Create the user first
    $user = User::create([
        'first_name' => $request->firstname,
        'last_name' => $request->lastname,
        'email' => $request->email,
        'phone_number' => $request->phone_number,
        'password' => bcrypt('password123'), // Change this to generate or send a real password
        'role_id' => 6, // Assuming 6 is the role ID for students
        'gender' => $request->gender,
        'status' => 'active' // Set status as needed
    ]);

    // Now, create the student application and associate it with the created user
    $application = StudentApplication::create([
        'user_id' => $user->id, // Link the created user to the application
        'firstname' => $request->firstname,
        'lastname' => $request->lastname,
        'email' => $request->email,  // You can choose to store the email again or not
        'phone_number' => $request->phone_number,
        'gender' => $request->gender,
        'date_of_birth' => $request->date_of_birth,
        'address' => $request->address,
        'program_id' => $request->program_id,
        'nationality' => $request->nationality,
        'guardian_name' => $request->guardian_name,
        'guardian_contact' => $request->guardian_contact,
        'interview_date' => $request->interview_date,
        'interview_result' => $request->interview_result,
        'submitted_documents' => $request->submitted_documents,
        'secondary_school' => $request->secondary_school,
        'combination' => $request->combination,
        'points_scored' => $request->points_scored,
        'uace_year_of_completion' => $request->uace_year_of_completion,
    ]);

    // Redirect after successful form submission
    return redirect()->route('student_applications.index')->with('success', 'Student application submitted successfully.');
}




    /**
     * Display a specific student application.
     */
    public function show($id)
    {
        $application = StudentApplication::with('program')->find($id);

        if (!$application) {
            return redirect()->route('student_pplications.index')->with('error', 'Application not found.');
        }

        return view('student_applications.show', compact('application'));
    }


    public function edit($id)
    
    {
        $application = StudentApplication::findOrFail($id);
        
        
        $programs = Program::all(); // Fetch all available programs

        return view('student_applications.edit', compact('application', 'programs'));
    }





    /**
     * Update a student application (Admin use).
     */
    // public function update(Request $request, $id)
    // {
    //     $application = StudentApplication::find($id);

    //     if (!$application) {
    //         return redirect()->route('student_applications.index')->with('error', 'Application not found.');
    //     }

    //     $request->validate([
    //         'firstname' => 'required|string|max:255',
    //         'lastname' => 'required|string|max:255',
    //         'email' => 'required|email|unique:student_applications,email,' . $application->id,
    //         'phone_number' => 'required|string|max:20',
    //         'gender' => 'required|string|in:Male,Female,Other',
    //         'date_of_birth' => 'required|date',
    //         'program_id' => 'required|exists:programs,id',
    //     ]);

    //     $application->update($request->all());

    //     return redirect()->route('student_applications.index')->with('success', 'Student application updated successfully.');
    // }


//     public function update(Request $request, $id)
// {
//     $application = StudentApplication::find($id);

//     if (!$application) {
//         return redirect()->route('student_applications.index')->with('error', 'Application not found.');
//     }

//     // Validate incoming data
//     $request->validate([
//         'firstname' => 'required|string|max:255',
//         'lastname' => 'required|string|max:255',
//         'email' => 'required|email|unique:student_applications,email,' . $application->id,
//         'phone_number' => 'required|string|max:20',
//         'gender' => 'required|string|in:Male,Female,Other',
//         'date_of_birth' => 'required|date',
//         'program_id' => 'required|exists:programs,id',
//         'status' => 'required|string|in:approved,pending,rejected', // Added status validation
//     ]);

//     // Check if the status is updated to 'approved'
//     if ($request->status === 'approved' && $application->status !== 'approved') {
//         // Create the student record automatically
//         $student = Student::create([
//             'user_id' => $application->user_id,
//  // Generate a registration number (customize as needed)
//             'reg_number' => 'REG' . Str::upper(Str::random(10)),

//             'admission_date' => now(), // Current date as admission date
//             'status' => 'active', // Default status as 'active'
//             'cohort_id' => 1, // Assuming you have a default cohort or you can fetch it based on the program
//             'created_by' => auth()->user()->id, // The user performing the action
//             'student_application_id' => $application->id, // Link to the application
//         ]);
        
//         // Optionally log the student creation
//         Log::info("Student created for application ID: {$application->id}");
//     }

//     // Update the application with the new status
//     $application->update($request->all());

//     return redirect()->route('student_applications.index')->with('success', 'Student application updated successfully.');
// }


public function update(Request $request, $id)
{
    $application = StudentApplication::find($id);

    if (!$application) {
        return redirect()->route('student_applications.index')->with('error', 'Application not found.');
    }

    // Validate incoming data
    $request->validate([
        'firstname' => 'required|string|max:255',
        'lastname' => 'required|string|max:255',
        'email' => 'required|email|unique:student_applications,email,' . $application->id,
        'phone_number' => 'required|string|max:20',
        'gender' => 'required|string|in:Male,Female,Other',
        'date_of_birth' => 'required|date',
        'program_id' => 'required|exists:programs,id',
        'status' => 'required|string|in:approved,pending,rejected',
    ]);

    // Check if the status is updated to 'approved'
    if ($request->status === 'approved' && $application->status !== 'approved') {
        // Generate a custom registration number
        $year = date('Y'); // Getting current year (e.g., 2025)
        $departmentCode = 'DCSE'; // Adjusting based on the program
        $suffix = 'SS';

        // Get the last student's registration number and increment
        $lastStudent = Student::whereYear('admission_date', $year)->latest()->first();
        // $nextNumber = $lastStudent ? sprintf('%04d', (intval(substr($lastStudent->reg_number, -8, 4)) + 1)) : '0001';
        $nextNumber = $lastStudent ? sprintf('%04d', (intval(substr($lastStudent->reg_number, -4)) + 1)) : '0001';


        $regNumber = "REG NO. {$year}/{$departmentCode}/{$nextNumber}/{$suffix}";

        // Creating the student record automatically
        $student = Student::create([
            'user_id' => $application->user_id,
            'reg_number' => $regNumber, // Use the custom registration number
            'admission_date' => now(), // Current date as admission date
            'status' => 'active', // Default status as 'active'
            'cohort_id' => 1, // Assuming you have a default cohort or fetch based on the program
            'created_by' => auth()->user()->id, // The user performing the action
            'student_application_id' => $application->id, // Link to the application
        ]);

        // Log student creation
        Log::info("Student created with Reg Number: {$regNumber} for application ID: {$application->id}");
    }

    // Update the application with the new status
    $application->update($request->all());
    session()->flash('success', "{$application->user->first_name} has been updated successfully");

    return redirect()->route('student_applications.index');
}

 




    // In the update method of StudentApplicationController

    //
    //  * Delete a student application (Admin use).
    //  */
    public function destroy($id)
    {
        $application = StudentApplication::find($id);

        if (!$application) {
            return redirect()->route('student_applications.index')->with('error', 'Application not found.');
        }

        $application->delete();

        return redirect()->route('student_applications.index')->with('success', 'Student application deleted successfully.');
    }
}


