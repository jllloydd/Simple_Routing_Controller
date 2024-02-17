<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HobbiesController extends Controller
{
    public function show(){
        return view('hobbies')
            ->with('hobbyone', 'Hiking')
            ->with('hobbytwo', 'Playing Videogames')
            ->with('hobbythree', 'Listening to Music')
            ->with('hobbyfour', 'Sleeping');
    }
}   