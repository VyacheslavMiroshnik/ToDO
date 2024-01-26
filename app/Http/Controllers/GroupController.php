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
}
