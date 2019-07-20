<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Model Field -->
<div class="form-group col-sm-6">
    {!! Form::label('model', 'Model:') !!}
    {!! Form::text('model', null, ['class' => 'form-control']) !!}
</div>

<!-- Serialnumber Field -->
<div class="form-group col-sm-6">
    {!! Form::label('serialnumber', 'Serial Number:') !!}
    {!! Form::text('serialnumber', null, ['class' => 'form-control']) !!}
</div>

<!-- Equipment Type Id Field -->
<div class="form-group col-sm-6">
        {!! Form::label('equipment_type_id', 'Equipment Type:') !!}
        {!! Form::select('equipment_type_id', $equipment_type, null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('comment', 'Comment:') !!}
    {!! Form::text('comment', null, ['class' => 'form-control']) !!}
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('equipment.index') !!}" class="btn btn-default">Cancel</a>
</div>
