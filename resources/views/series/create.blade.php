@extends('layouts.layout')

@section('styles')
    <link rel="stylesheet" href="{{ asset('/css/series.css') }}">
@stop

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Create Serie</div>

                    <div class="panel-body">
                        Create Serie Form.
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
