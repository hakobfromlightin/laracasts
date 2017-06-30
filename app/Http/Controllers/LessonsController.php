<?php

namespace App\Http\Controllers;

use App\Tag;
use App\Serie;
use App\Skill;
use App\Lesson;

use App\Http\Requests\StoreLessonRequest;
use App\Http\Requests\UpdateLessonRequest;

use Illuminate\Http\Request;

class LessonsController extends Controller
{
    /**
     * Display a listing of the lessons.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lessons = Lesson::latest()->get();

        return view('lessons.index', compact('lessons'));
    }

    /**
     * Show the form for creating a new lesson.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $skills = Skill::lists('name', 'id');
        $series = Serie::lists('name', 'id');
        $tags = Tag::lists('name', 'id');

        return view('lessons.create', compact('skills', 'series', 'tags'));
    }

    /**
     * Store a newly created lesson in storage.
     *
     * @param StoreLessonRequest|Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLessonRequest $request)
    {
        $lesson = Lesson::create($request->all());

        return redirect('/lesson/' . $lesson->id);
    }

    /**
     * Display the specified lesson.
     *
     * @param Lesson $lesson
     * @return \Illuminate\Http\Response
     */
    public function show(Lesson $lesson)
    {
        return view('lessons.show', compact('lesson'));
    }

    /**
     * Show the form for editing the specified lesson.
     *
     * @param Lesson $lesson
     * @return \Illuminate\Http\Response
     */
    public function edit(Lesson $lesson)
    {
        $skills = Skill::lists('name', 'id');
        $series = Serie::lists('name', 'id');
        $tags = Tag::lists('name', 'id');

        return view('lessons.edit', compact('lesson', 'skills', 'series', 'tags'));
    }

    /**
     * Update the specified lesson in storage.
     *
     * @param UpdateLessonRequest|Request $request
     * @param Lesson $lesson
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLessonRequest $request, Lesson $lesson)
    {
        $lesson->update($request->all());

        return redirect('lesson/' . $lesson->id);
    }

    /**
     * Remove the specified lesson from storage.
     *
     * @param Lesson $lesson
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lesson $lesson)
    {
        $lesson->delete();

        return redirect('/lessons');
    }
}
