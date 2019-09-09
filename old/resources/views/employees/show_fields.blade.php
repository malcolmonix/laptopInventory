<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $employee->id !!}</p>
</div>

<!-- Employee Id Field -->
<div class="form-group">
    {!! Form::label('employee_id', 'Employee Id:') !!}
    <p>{!! $employee->employee_id !!}</p>
</div>

<!-- Lastname Field -->
<div class="form-group">
    {!! Form::label('name', 'name:') !!}
    <p>{!! $employee->name !!}</p>
</div>


<!-- Deleted At Field -->
<div class="form-group">
    {!! Form::label('deleted_at', 'Deleted At:') !!}
    <p>{!! $employee->deleted_at !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $employee->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $employee->updated_at !!}</p>
</div>

