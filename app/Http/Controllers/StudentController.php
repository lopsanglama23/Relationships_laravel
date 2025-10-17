<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentRequest;
use App\Models\Student;

class StudentController extends Controller
{
    public function student(StudentRequest $request){
        $validated = $request->validated();
        $student = Student::create($validated);
    }
}
