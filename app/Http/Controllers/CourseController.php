<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Course;

class CourseController extends Controller
{
    public function store(Request $request)
    {
        $course = Course::create([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        return $course;
    }
}
