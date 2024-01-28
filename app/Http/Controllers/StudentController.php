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

    public function edit (Group $group,Student $student){
        return view('edit-student',['group'=>$group,'student'=>$student]);
    }
    public function update (Request $request,Group $group,Student $student)
    {
        $validated = $request->validate(self::STUDENT_VALIDATOR);
        $student->fill([
            'name'=>$validated['name'],
            'surname'=>$validated['surname'],
        ]);
        $student->save();
        return redirect()->route('student',['group'=>$group,'student'=>$student]);
    }

    public function clear(Group $group,Student $student)
    {
        return view('delete-student',['group'=>$group,'student'=>$student]);
    }
    public function delete(Group $group,Student $student)
    {
        $student->delete();
        return redirect()->route('group',['group'=>$group]);
    }
}
