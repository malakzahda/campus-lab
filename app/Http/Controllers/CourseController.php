<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function students($courseId) {
        return 'Students for Course ID: ' . $courseId;
    }
}