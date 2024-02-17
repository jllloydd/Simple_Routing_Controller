<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutMeController extends Controller
{
    public function show(){
        return view('aboutme')
            ->with('name', 'John Lloyd De Guzman')
            ->with('age', '22')
            ->with('course', 'Bachelor of Science in Information Technology')
            ->with('address', 'Bakakeng, Baguio City');
    }
}
