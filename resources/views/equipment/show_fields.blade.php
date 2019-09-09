
<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:',['class' => 'col-sm-3 control-label']) !!}
    {!! Form::label('name', $equipment->name) !!}
</div>

<!-- Model Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Model', 'Model:',['class' => ' col-sm-3 control-label']) !!}
   {!! Form::label('model', $equipment->model) !!}
</div>

<!-- Brand Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('brand', 'Brand:',['class' => 'col-sm-3 control-label']) !!}
    {!! Form::label('brand', isset($brand->name)? $brand->name:'' ) !!}
</div>

<!-- Brand Id Field -->
<div class="form-group">
    {!! Form::label('brand_id', 'Brand Id:') !!}
    <p>{!! $equipment->brand_id !!}</p>
</div>

<!-- Serialnumber Field -->

<div class="form-group col-sm-6">
    {!! Form::label('serialnumber', 'Serial Number:',['class' => 'col-sm-3 control-label']) !!}
    {!! Form::label('serialnumber', $equipment->serialnumber) !!}
</div>

<!-- Equipment Type Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('equipment_type', 'Equipment Type:',['class' => 'col-sm-3 control-label']) !!}
    {!! Form::label('equipment_type', $equipment_type->name) !!}
</div>

<!-- Situation Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Situation', 'Situation:',['class' => 'col-sm-3 control-label']) !!}
    {!! Form::label('Situation', $situation->name) !!}

</div>

<!-- Situation Id Field -->
<div class="form-group">
    {!! Form::label('situation_id', 'Situation Id:') !!}
    <p>{!! $equipment->situation_id !!}</p>
</div>

<!-- Status Field -->

<div class="form-group col-sm-6">
    {!! Form::label('status', 'Status:',['class' => 'col-sm-3 control-label']) !!}
    {!! Form::label('status', $equipment->status) !!}

</div>


<!-- Computer Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('computer_name', 'Computer Name:',['class' => 'col-sm-3 control-label']) !!}
    {!! Form::label('computer_name', $equipment->computer_name) !!}
</div>

<!-- Mac Address Field -->
<div class="form-group col-sm-6">
    {!! Form::label('mac_address', 'Mac Address:',['class' => 'col-sm-3 control-label']) !!}
    {!! Form::label('mac_address', $equipment->mac_address) !!}
</div>

<!-- Ip Address Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ip_address', 'Ip Address:',['class' => 'col-sm-3 control-label']) !!}
    {!! Form::label('ip_address', $equipment->ip_address) !!}
</div>


<!-- Updated At Field -->
<div class="form-group col-sm-6">
    {!! Form::label('updated_at', 'Last Updated:',['class' => 'col-sm-3 control-label']) !!}
    {!! Form::label('updated_at', $equipment->updated_at) !!}
</div>

<!-- Comment Field -->
<div class="form-group col-sm-6">
    {!! Form::label('comment', 'Comment:',['class' => 'col-sm-3 control-label']) !!}
    {!! Form::label('comment', $equipment->comment) !!}
</div>

