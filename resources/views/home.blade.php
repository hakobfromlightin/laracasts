@extends('layouts.layout')

@section('styles')
    <style>
        .skill-container {
            position: relative;
            margin: 10px 0;
        }

        .skill-container a{
            overflow: hidden;
        }

        .skill-image {
            height: auto;
            width: 100%;
        }

        .skill-container a {
            display: block;
        }

        .status-container {
            display: flex;
            justify-content: center;
            align-items: center;
            opacity: 0;
            background: rgba(255, 255, 255, 0.7);
            transition: 0.2s ease;
            position: absolute;
            top: 0;
            bottom: 0;
            left: 15px;
            right: 15px;
            z-index: 2;
        }

        .status-container h4 {
            font-size: 50px;
            font-weight: bold;
            color: rgba(0, 0, 0, 0.50);
        }

        .skill-container:hover .skill-image {
            filter: blur(1px);
        }

        .skill-container:hover .status-container {
            opacity: 1;
        }
    </style>
@stop

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Skills</div>

                    <div class="panel-body">
                        <div class="row">
                            @foreach($skills as $skill)
                                <div class="col-md-4 skill-container">
                                    <a href="{{ url('/skills/' . $skill->id) }}">
                                        <div class="status-container"><h4>{{ $skill->skillCompletion() }}%</h4></div>
                                        <img class="skill-image" src="{{ asset($skill->image) }}"
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
