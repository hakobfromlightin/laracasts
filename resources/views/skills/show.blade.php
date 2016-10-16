@extends('layouts.layout')

@section('styles')
    <link rel="stylesheet" href="{{ asset('/css/skills.css') }}">
@stop

@section('content')
    <div class="container main">
        <div class="row">
            <div class="col-md-4">
                <div class="view overlay hm-white-light z-depth-1-half">
                    <img src="{{ $skill->imageUrl() }}"
                         class="img-fluid" alt="{{ $skill->name }}">
                    <div class="mask">
                    </div>
                </div>
                <br>
            </div>

            <div class="col-md-8">
                <h2 class="h2-responsive">{{ $skill->name }}</h2>
                <hr>
                <p>{{ $skill->description }}</p>
                <a href="{{ url('skills/' . $skill->id . '/edit') }}" class="btn btn-primary">Edit</a>
                <a href="" class="btn btn-danger">Delete</a>
            </div>
        </div>
        <hr class="extra-margins">

        @foreach ($series->chunk(4) as $chunk)
            <div class="row">
                @foreach ($chunk as $serie)
                    <div class="col-md-3">
                        <div class="card">
                            <div class="view overlay hm-white-slight">
                                <img src="{{ url($serie->imageUrl()) }}" class="img-fluid"
                                     alt="{{ $serie->name }}">
                                <a href="{{ url('series/' . $serie->id) }}">
                                    <div class="mask"></div>
                                </a>
                            </div>
                            <div class="card-block">
                                <h5 class="card-title">{{ $serie->name }}</h5>
                                {{--<p class="card-text">Some quick example</p>--}}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endforeach
    </div>
@endsection
