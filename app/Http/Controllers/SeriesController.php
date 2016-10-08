<?php

namespace App\Http\Controllers;

use App\Serie;
use App\Skill;

use App\Http\Requests\StoreSerieRequest;
use App\Http\Requests\UpdateSerieRequest;

use Illuminate\Http\Request;

class SeriesController extends Controller
{
    /**
     * Display a listing of the series.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $series = Serie::all();

        return view('series.index', compact('series'));
    }

    /**
     * Show the form for creating a new serie.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $skills = Skill::lists('name', 'id');

        return view('series.create', compact('skills'));
    }

    /**
     * Store a newly created serie in storage.
     *
     * @param StoreSerieRequest|Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSerieRequest $request)
    {
        $serie = Serie::create($request->all());

        return redirect('/serie/' . $serie->id);
    }

    /**
     * Display the specified serie.
     *
     * @param Serie $serie
     * @return \Illuminate\Http\Response
     */
    public function show(Serie $serie)
    {
        return view('series.show', compact('serie'));
    }

    /**
     * Show the form for editing the specified serie.
     *
     * @param Serie $serie
     * @return \Illuminate\Http\Response
     */
    public function edit(Serie $serie)
    {
        $skills = Skill::lists('name', 'id');

        return view('series.edit', compact('serie', 'skills'));
    }

    /**
     * Update the specified serie in storage.
     *
     * @param UpdateSerieRequest|Request $request
     * @param Serie $serie
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSerieRequest $request, Serie $serie)
    {
        $serie->update($request->all());

        return redirect('series/' . $serie->id);
    }

    /**
     * Remove the specified serie from storage.
     *
     * @param Serie $serie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Serie $serie)
    {
        $serie->delete();

        return redirect('/series');
    }
}
