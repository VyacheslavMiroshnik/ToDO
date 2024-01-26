<?php

namespace App\Http\Controllers;

use App\Models\Group;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    public function index ()
    {
        $context = ['groups'=>Group::latest()->get()];
        return view('index',$context);
    }
    public function group(Group $group)
    {
        $context =['students'=>$group->student()->latest()->get()];
        return view('students',$context);
    }
}
