@extends('layouts.layout')

@section('styles')
    <link rel="stylesheet" href="{{ asset('/css/skills.css') }}">
@stop

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <div class="panel panel-default">
                    <div class="panel-heading">Create Skill</div>

                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12">
                                {{ Form::open(['url' => url('/skills'), 'method' => 'POST', 'files' => true ]) }}
                                    @include('skills._form')
                                <div class="input-group col-md-12">
                                    {{ Form::submit('Save', ['class' => 'btn btn-default btn-store-skill']) }}
                                </div>
                                {{ Form::close() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $('#skills_started_at').datepicker({
            format: "d/m/yyyy",
            weekStart: 1,
            endDate: "today",
            todayBtn: true
        });

        $('#skills_completed_at').datepicker({
            format: "d/m/yyyy",
            weekStart: 1,
            endDate: "today",
            todayBtn: true
        });
    </script>
@stop