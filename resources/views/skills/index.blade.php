@extends('layouts.layout')

@section('styles')
    <link rel="stylesheet" href="{{ asset('/css/skills.css') }}">
@stop

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <div class="panel panel-default">
                    <div class="panel-heading skill-panel">All Skills
                        <a class="btn-create-skill btn btn-success" href="{{ url('/skills/create') }}">
                            <span>
                                <i class="fa fa-plus" aria-hidden="true"></i> Create Skill
                            </span>
                        </a>
                    </div>

                    <div class="panel-body">
                        <div class="row">
                            @foreach($skills as $skill)
                                <div class="col-md-4 skill-container">
                                    <a href="{{ url('/skills/' . $skill->id) }}">
                                        <div class="status-container"><h4>{{ $skill->completion() }}%</h4></div>
                                        <img class="skill-image" src="{{ asset($skill->imageUrl()) }}"
                                             alt="{{ $skill->name }}">
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
