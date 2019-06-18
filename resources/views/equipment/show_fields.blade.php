<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $equipment->id !!}</p>
</div>

<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{!! $equipment->name !!}</p>
</div>

<!-- Model Field -->
<div class="form-group">
    {!! Form::label('model', 'Model:') !!}
    <p>{!! $equipment->model !!}</p>
</div>

<!-- Serialnumber Field -->
<div class="form-group">
    {!! Form::label('serialnumber', 'Serialnumber:') !!}
    <p>{!! $equipment->serialnumber !!}</p>
</div>

<!-- Equipment Type Id Field -->
<div class="form-group">
    {!! Form::label('equipment_type_id', 'Equipment Type Id:') !!}
    <p>{!! $equipment->equipment_type_id !!}</p>
</div>

<!-- Status Field -->
<div class="form-group">
    {!! Form::label('status', 'Status:') !!}
    <p>{!! $equipment->status !!}</p>
</div>

<!-- Deleted At Field -->
<div class="form-group">
    {!! Form::label('deleted_at', 'Deleted At:') !!}
    <p>{!! $equipment->deleted_at !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $equipment->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $equipment->updated_at !!}</p>
</div>

