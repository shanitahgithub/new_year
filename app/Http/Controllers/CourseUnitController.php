<?php
namespace App\Http\Controllers;

use App\Models\CourseUnit;
use Illuminate\Http\Request;

class CourseUnitController extends Controller
{
    // Display all course units
    public function index()
    {
        $courseUnits = CourseUnit::all(); // Fetch all course units from the database
        return view('courses.index', compact('courseUnits'));
    }

    // Show the form for creating a new course unit
    public function create()
    {
        return view('courses.create');
    }

    // Store a newly created course unit
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'semester' => 'required|string',
        ]);

        CourseUnit::create([
            'name' => $request->name,
            'description' => $request->description,
            'semester' => $request->semester
        ]);

        return redirect()->route('course-units.index')->with('success', 'Course Unit created successfully');
    }

    // Show the form for editing the specified course unit
    public function edit($id)
    {
        $courseUnit = CourseUnit::findOrFail($id);
        return view('courses.edit', compact('courseUnit'));
    }

    // Update the specified course unit
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'semester' => 'required|string',
        ]);

        $courseUnit = CourseUnit::findOrFail($id);
        $courseUnit->update([
            'name' => $request->name,
            'description' => $request->description,
            'semester' => $request->semester
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
}

// use Illuminate\Http\Request;

// class CourseUnitController extends Controller
// {
//     public function index()
//     {
//         $courseUnits = [
//             ['id' => 1, 'name' => 'Introduction to Programming', 'description' => 'Learn the basics of programming with Python.'],
//             ['id' => 2, 'name' => 'Web Development', 'description' => 'Master the fundamentals of building modern websites.'],
//             ['id' => 3, 'name' => 'Database Management', 'description' => 'Understand relational databases and SQL.'],
//             ['id' => 4, 'name' => 'Data Structures and Algorithms', 'description' => 'Enhance your problem-solving skills with algorithms.'],
//             ['id' => 5, 'name' => 'Machine Learning', 'description' => 'Explore the basics of AI and machine learning techniques.'],
//         ];

//         return view('courses.index', compact('courseUnits'));
//     }
// }
