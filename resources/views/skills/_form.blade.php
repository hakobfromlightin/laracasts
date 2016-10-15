<div class="input-group col-md-12">
    {{ Form::label('name', 'Name:', ['class' => 'col-md-4']) }}
    {{ Form::text('name', null, ['class' => 'col-md-8 form-control']) }}
</div>
<div class="input-group col-md-12">
    {{ Form::label('description', 'Description:', ['class' => 'col-md-4']) }}
    {{ Form::textarea('description', null, ['class' => 'col-md-8 form-control']) }}
</div>
<div class="input-group col-md-12">
    {{ Form::label('started_at', 'Started At:', ['class' => 'col-md-4']) }}
    {{ Form::text('started_at', @$skill->started_at ? $skill->started_at->format('d-m-Y H:i:s') : null, ['class' => 'col-md-8 form-control', 'id' => 'skills_started_at']) }}
</div>
<div class="input-group col-md-12">
    {{ Form::label('image', 'Image:', ['class' => 'col-md-4']) }}
    {{ Form::file('image', ['class' => 'col-md-8 form-control']) }}
</div>

<div class="input-group checkbox abc-checkbox abc-checkbox-success">
    {{ Form::checkbox('completed', 1, null, ['id' => 'checkbox1', 'class' => 'col-md-8 form-control']) }}
    {{ Form::label('checkbox1', 'Complete', ['class' => 'col-md-4']) }}
</div>
<div class="input-group col-md-12">
    {{ Form::label('times_completed', 'Times Completed:', ['class' => 'col-md-4']) }}
    {{ Form::number('times_completed', null, ['class' => 'col-md-8 form-control']) }}
</div>
<div class="input-group col-md-12">
    {{ Form::label('completed_at', 'Completed At:', ['class' => 'col-md-4']) }}
    {{ Form::text('completed_at', @$skill->completed_at ? $skill->completed_at->format('d-m-Y H:i:s') : null, ['class' => 'col-md-8 form-control', 'id' => 'skills_completed_at']) }}
</div>