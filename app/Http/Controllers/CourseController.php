<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use Inertia\Inertia;

class CourseController extends Controller
{
    public function getAllCourses(){
        $courses = Course::all();
        echo $courses;
        return Inertia::render("courses", [
            'courses' => $courses
            ]
        );
    }
}
