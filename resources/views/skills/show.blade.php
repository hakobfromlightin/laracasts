@extends('layouts.layout')

@section('styles')
    <link rel="stylesheet" href="{{ asset('/css/skills.css') }}">
@stop

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4 skill_picture">
                <img src="{{ $skill->imageUrl() }}" alt="{{ $skill->name }}">
            </div>
            <div class="col-md-6 col-md-offset-1 skill_description">
                <div>
                    <h3>{{ $skill->name }}</h3>
                    <a href="{{ url('skills/' . $skill->id . '/edit') }}" class="btn btn-info btn-edit-skill">Edit</a>
                </div>
                <p>
                    {{ $skill->description }}
                </p>
            </div>
        </div>
        <div class="row">
            @foreach($series as $serie)
                <div class="col-md-4 serie-container">
                    <a href="{{ url('/series/' . $serie->id) }}">
                        <div class="status-container"><h4>{{ $serie->completion() }}%</h4></div>
                        <img class="serie-image" src="{{ asset($serie->image) }}"
                             alt="{{ $serie->name }}">
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
