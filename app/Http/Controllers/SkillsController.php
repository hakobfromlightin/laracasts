<?php

namespace App\Http\Controllers;

use App\Skill;

use App\Http\Requests\StoreSerieRequest;
use App\Http\Requests\UpdateSkillRequest;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

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
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $image = $request->file('image')->store('public/images/skills');
        }

        $skill = new Skill();

        $skill->name = $request->input('name');
        $skill->image = @$image ?? null;
        $skill->description = $request->input('description') != '' ? $request->input('description') : null;
        $skill->completed = $request->input('completed') != '' ? $request->input('completed') : null;
        $skill->times_completed = $request->input('times_completed') != '' ? $request->input('times_completed') : null;
        if ($request->input('started_at') != '') {
            $skill->started_at = $request->input('started_at');
        }
        if ($request->input('completed_at') != '') {
            $skill->completed_at = $request->input('completed_at');
        }

        if(!$skill->save()){
            Session::flash('error_flash', 'Something went wrong!');

            return back();
        }

        Session::flash('success_flash', 'Skill is created!');

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
        $series = $skill->series;

        return view('skills.show', compact('skill', 'series'));
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
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $image = $request->file('image')->store('public/images/skills');
        }

        $skill->name = $request->input('name') != '' ? $request->input('name') : null;
        $skill->image = $image ?? null;
        $skill->description = $request->input('description') != '' ? $request->input('description') : null;
        $skill->completed = $request->input('completed') != '' ? $request->input('completed') : null;
        $skill->times_completed = $request->input('times_completed') != '' ? $request->input('times_completed') : null;
        $skill->started_at = $request->input('started_at') != '' ? $request->input('started_at') : null;
        $skill->completed_at = $request->input('completed_at') != '' ? $request->input('completed_at') : null;

        if (!$skill->save()) {
            Session::flash('error_flash', 'Something went wrong!');

            return back();
        }

        Session::flash('success_flash', 'Skill is updated!');

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

        Session::flash('success_flash', 'Skill is deleted!');

        return redirect('/skills');
    }
}
