<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStudentRequest;
use App\Http\Requests\UpdateStudentRequest;
use App\Models\Student;
use App\Models\Courses;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('courses.index', ['courses' =>Courses::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('courses.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCourseRequest $request)
    {
        Courses::create($request->validate());
        return redirect() - route('courses.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Courses $course, $id)
    {
        return view('courses.show', compact('course'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Course $course)
    {
       return view('courses.edit', compact('course'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCourseRequest $request, Course $course)
    {
        $course -> update($request -> validated());
        return redirect() -> route('course.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function trash($id)
    {
        Courses::destroy($id);
        return redirect() -> route('courses.index');
    }
     /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $course = Courses::withTrashed() -> where('id', $id) -> first();
        $course -> forceDelete();
        return redirect() -> route('courses.trashed');
    }

    public function restore($id)
    {
        $course = Courses::withTrashed() -> where('id', $id) -> first();
        $course -> restore();
        return redirect() -> route('courses.index');
    }
}
