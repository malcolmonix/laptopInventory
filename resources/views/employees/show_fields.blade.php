

<!-- Employee Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('employee_id', 'Staff Id:',['class' => 'col-sm-3 control-label']) !!}
    {!! Form::label('employee_id', $employee->employee_id) !!}
</div>

<!-- Lastname Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:',['class' => 'col-sm-3 control-label']) !!}
    {!! Form::label('name', $employee->name) !!}
</div>

<!-- Position Field -->
<div class="form-group col-sm-6">
    {!! Form::label('position', 'Position:',['class' => 'col-sm-3 control-label']) !!}
    {!! Form::label('position', $employee->position) !!}
</div>

<!-- Position Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Project', 'Project:',['class' => 'col-sm-3 control-label']) !!}
    {!! Form::label('project', $project->name) !!}
</div>
<!-- Created At Field -->
<div class="form-group col-sm-6">
    {!! Form::label('created_at', 'Created Date:',['class' => 'col-sm-3 control-label']) !!}
    <p>{!! $employee->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group col-sm-6">
    {!! Form::label('updated_at', 'Last Updated:',['class' => 'col-sm-3 control-label']) !!}
    {!! Form::label('updated_at', $employee->updated_at) !!}
</div>

