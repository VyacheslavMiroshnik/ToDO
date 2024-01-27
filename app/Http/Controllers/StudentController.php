<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    private const STUDENT_VALIDATOR = [
        'name'=>'required|max:40',
        'surname'=>'required|max:50',
    ];
    public function index(Group $group,Student $student)
    {

      return view('student',['student'=>$student]);
    }

    public function create(Group $group)
    {
        return view('create-student',['group'=>$group]);
    }

    public function post(Request $request,Group $group,)
    {

        $validated = $request->validate(self::STUDENT_VALIDATOR);
       $group->student()->create([
           'name'=>$validated['name'],
           'surname'=>$validated['surname'],
       ]);

       return redirect()->route('group',['group'=>$group]);
    }
}
