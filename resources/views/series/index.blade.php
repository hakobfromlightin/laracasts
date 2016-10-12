@extends('layouts.layout')

@section('styles')
    <link rel="stylesheet" href="{{ asset('/components/datepicker-1.6.4/css/bootstrap-datepicker3.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/series.css') }}">
@stop

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <div class="panel panel-default">
                    <div class="panel-heading serie-panel">All Series
                        <a class="create-serie btn btn-success" href="{{ url('/series/create') }}">
                            <span>
                                <i class="fa fa-plus" aria-hidden="true"></i> Create Serie
                            </span>
                        </a>
                    </div>

                    <div class="panel-body">
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
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('/components/datepicker-1.6.4/js/bootstrap-datepicker.min.js') }}"></script>
@stop