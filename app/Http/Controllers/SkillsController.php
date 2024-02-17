<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SkillsController extends Controller
{
    public function show(){
        return view('skills')
            ->with('skillone', 'Coding')
            ->with('skilltwo', 'Image and Video Editing')
            ->with('skillthree', 'Presenting')
            ->with('skillfour', 'Washing Dishes');
    }
}
