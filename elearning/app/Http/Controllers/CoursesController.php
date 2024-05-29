<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
    public function index()
{
    $courses = Course::all();

    return view('admin.contents.courses.index', compact('courses'));
}

public function create()
{
    return view('courses.create');
}

public function store(Request $request)
{
    $request->validate([
        'name' => 'required',
        'category' => 'required',
        'desc' => 'required',
    ]);

    Course::create($request->all());

    return redirect()->route('courses.index')
                        ->with('success','Course created successfully.');
}

public function edit(Course $course)
{
    return view('courses.edit',compact('course'));
}

public function update(Request $request, Course $course)
{
    $request->validate([
        'name' => 'required',
        'category' => 'required',
        'desc' => 'required',
    ]);

    $course->update($request->all());

    return redirect()->route('courses.index')
                        ->with('success','Course updated successfully');
}

}
