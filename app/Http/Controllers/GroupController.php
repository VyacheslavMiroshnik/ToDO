<?php

namespace App\Http\Controllers;

use App\Models\Group;
use Illuminate\Http\Request;

class GroupController extends Controller
{

    private const GROUP_VALIDATOR = [
        'title'=>'required|max:40',
        'start_from'=>'required',

    ];
    public function index ()
    {
        $context = ['groups'=>Group::get(),];
        return view('index',$context);
    }
    public function group(Group $group)
    {
        $context =['group'=>$group];
        return view('students',$context);
    }
    public function create()
    {
    return view('create-group');
    }
    public function post(Request $request)
    {
        $validated = $request->validate(self::GROUP_VALIDATOR);
            Group::create([
                'title'=>$validated['title'],
                'start_from'=>$validated['start_from'],
                'isActive'=>$request->isActive === 'on' ? true : false,
            ]);
            return redirect()->route('index');
    }


    public function edit(Group $group){
        return view('edit-group',['group'=>$group]);
    }
    public function update(Request $request,Group $group)
    {
        $validated = $request->validate(self::GROUP_VALIDATOR);
        $group->fill([
            'title'=>$validated['title'],
            'start_from'=>$validated['start_from'],
            'isActive'=>$request->isActive === 'on' ? true : false,
        ]);
        $group->save();
        return redirect()->route('group',['group'=>$group->id]);
    }
    public function clear(Group $group)
    {
        return view('delete-group',['group'=>$group]);
    }
    public function delete(Group $group)
    {
        $group->delete();
        return redirect()->route('index');
    }


}
