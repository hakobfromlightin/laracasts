@extends('layouts.layout')

@section('styles')
    <link rel="stylesheet" href="{{ asset('/css/skills.css') }}">
@stop

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">View Skill</div>

                    <div class="panel-body">
                        <div class="row">
                            @foreach($series as $serie)
                                <div class="col-md-4 serie-container">
                                    <a href="{{ url('/series/' . $serie->id) }}">
                                        <div class="status-container"><h4>{{ $serie->skillCompletion() }}%</h4></div>
                                        <img class="serie-image" src="{{ asset($serie->image) }}"
                                             alt="{{ $serie->name }}">
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
