<?php

namespace App\Http\Controllers;

use App\Skill;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $skills = Skill::all();

        return view('home', compact('skills'));
    }
}
