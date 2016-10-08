<?php

namespace App\Http\Controllers;

use App\Skill;

use App\Http\Requests\StoreSerieRequest;
use App\Http\Requests\UpdateSkillRequest;

use Illuminate\Http\Request;

class SkillsController extends Controller
{
    /**
     * Display a listing of the skills.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $skills = Skill::all();

        return view('skills.index', compact('skills'));
    }

    /**
     * Show the form for creating a new skill.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('skills.create');
    }

    /**
     * Store a newly created skill in storage.
     *
     * @param StoreSerieRequest|Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSerieRequest $request)
    {
        $skill = Skill::create($request->all());

        return redirect('/skills/' . $skill->id);
    }

    /**
     * Display the specified skill.
     *
     * @param Skill $skill
     * @return \Illuminate\Http\Response
     */
    public function show(Skill $skill)
    {
        return view('skills.show', compact('skill'));
    }

    /**
     * Show the form for editing the specified skill.
     *
     * @param Skill $skill
     * @return \Illuminate\Http\Response
     */
    public function edit(Skill $skill)
    {
        return view('skills.edit', compact('skill'));
    }

    /**
     * Update the specified skill in storage.
     *
     * @param UpdateSkillRequest|Request $request
     * @param Skill $skill
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSkillRequest $request, Skill $skill)
    {
        $skill->update($request->all());

        return redirect('skills/' . $skill->id);
    }

    /**
     * Remove the specified skill from storage.
     *
     * @param Skill $skill
     * @return \Illuminate\Http\Response
     */
    public function destroy(Skill $skill)
    {
        $skill->delete();

        return redirect('/skills');
    }
}
