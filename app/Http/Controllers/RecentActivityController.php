<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RecentActivity;

class RecentActivityController extends Controller
{
    public function index()
    {
        $activities = RecentActivity::latest()->get();
        return view('admin.dashboard', compact('activities'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        RecentActivity::create($request->all());
        return redirect()->back()->with('success', 'Activity added successfully!');
    }

    public function destroy($id)
    {
        $activity = RecentActivity::findOrFail($id);
        $activity->delete();
        return redirect()->back()->with('success', 'Activity deleted successfully!');
    }
}
