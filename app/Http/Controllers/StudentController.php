<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentRequest;
use App\Models\Student;
use App\StudentTrait;

class StudentController extends Controller
{
    use StudentTrait;
    public function student(StudentRequest $request){
        $validated = $request->validated();
        $student = Student::create($validated);
        return $this->sendresponse("The Student data added sucessfully", $student,200);
    }
}
