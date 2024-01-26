<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(Group $group,Student $student)
    {
      return view('student',['student'=>$student]);
    }
}
