@extends('layouts.layout')

@section('styles')
    <link rel="stylesheet" href="{{ asset('/css/skills.css') }}">
@stop

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Edit Skill</div>

                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12">
                                {{ Form::model($skill, ['url' => url('/skills/' . $skill->id), 'method' => 'PUT', 'files' => true ]) }}
                                @include('skills._form')
                                <div class="input-group col-md-12">
                                    {{ Form::submit('Update', ['class' => 'btn btn-default btn-update-skill']) }}
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
            format: "dd/mm/yyyy",
            weekStart: 1,
            endDate: "today",
            todayBtn: true
        });

        $('#skills_completed_at').datepicker({
            format: "dd/mm/yyyy",
            weekStart: 1,
            endDate: "today",
            todayBtn: true
        });
    </script>
@stop
