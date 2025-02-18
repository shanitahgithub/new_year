<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\CourseUnit;

use App\Models\Semester;

class CourseUnitController extends Controller
{

    
    // Display all course units
    // public function index()
    // {
    //     $courseUnits = CourseUnit::all(); // Fetch all course units from the database
    //     return view('courses.index', compact('courseUnits'));
    // }

//     public function index()
// {
//     // Fetch course units with the 'semester_id' field using get() and select()
//     $courseUnits = CourseUnit::select('semester_id')->get();

//     return view('courses.index', compact('courseUnits'));
// }
public function index()
{
    // Fetch course units with the semester relationship loaded
    $courseUnits = CourseUnit::with('semester')->get();

    return view('courses.index', compact('courseUnits'));
}



    // Show the form for creating a new course unit
    // public function create()
    // {
        public function create()
{
    // Fetch all semesters to display in the dropdown
    $semesters = Semester::all(); // Make sure you have a Semester model

    return view('courses.create', compact('semesters'));
}

        // return view('courses.create');
    

    // Store a newly created course unit
    public function store(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'required|string',
        'semester_id' => 'required|exists:semesters,id', // Validate that semester_id exists in the semesters table
        'course_unit_code' => 'nullable|string|max:255',
        'status' => 'nullable|in:active,inactive',
        'credit_unit' => 'nullable|integer',
    ]);

    // Store the new course unit with the correct fields
    CourseUnit::create([
        'name' => $request->name,
        'description' => $request->description,
        'semester_id' => $request->semester_id,
        'course_unit_code' => $request->course_unit_code,
        'status' => $request->status ?? 'active',
        'credit_unit' => $request->credit_unit ?? 3,
        'created_by' => auth()->id(), // Automatically assign the current user
    ]);

    return redirect()->route('course-units.index')->with('success', 'Course Unit created successfully');
}

    // Show the form for editing the specified course unit
    // public function edit($id)
    // {
    //     $courseUnit = CourseUnit::findOrFail($id);
    //     return view('courses.edit', compact('courseUnit'));
    // }
    public function edit($id)
{
    // Fetch the course unit that needs to be edited
    $courseUnit = CourseUnit::findOrFail($id);
    
    // Pass the course unit data to the view
    return view('courses.edit', compact('courseUnit'));
}


    // Update the specified course unit
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            
            'course_unit_code' => 'nullable|string|max:255',
            'status' => 'nullable|in:active,inactive',
            'semester_id' => 'required|integer',
            'credit_unit' => 'nullable|integer',
            'created_by' => 'required|integer',
        ]);

        $courseUnit = CourseUnit::findOrFail($id);

        // Update the course unit with the new fields
        $courseUnit->update([
            'name' => $request->name,
            'description' => $request->description,
            
            'course_unit_code' => $request->course_unit_code,
            'status' => $request->status ?? 'active', // Default value for 'status'
            'semester_id' => $request->semester_id,
            'credit_unit' => $request->credit_unit ?? 3, // Default value for 'credit_unit'
            'created_by' => $request->created_by,
        ]);

        return redirect()->route('course-units.index')->with('success', 'Course Unit updated successfully');
    }

    // Delete the specified course unit
    public function destroy($id)
    {
        $courseUnit = CourseUnit::findOrFail($id);
        $courseUnit->delete();

        return redirect()->route('course-units.index')->with('success', 'Course Unit deleted successfully');
    }

    public function bulkDestroy(Request $request)
{
    $courseUnitIds = $request->input('ids');

    if (is_array($courseUnitIds) && count($courseUnitIds) > 0) {
        CourseUnit::whereIn('id', $courseUnitIds)->delete();
        return response()->json(['success' => 'Selected course units have been deleted.']);
    }

    return response()->json(['error' => 'No course units selected for deletion.'], 400);
}

}
