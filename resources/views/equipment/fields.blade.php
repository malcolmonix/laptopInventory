{{ Form::hidden('user_id', Auth::user()->id) }}


<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Device Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Model Field -->
<div class="form-group col-sm-6">
    {!! Form::label('model', 'Model:') !!}
    {!! Form::text('model', null, ['class' => 'form-control', 'placeholder' => 'Enter model of device']) !!}
</div>

<!-- Brand Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('brand_id', 'Brand:') !!}
    {!! Form::select('brand_id',  $brand, null, ['class' => 'form-control']) !!}
</div>

<!-- Serialnumber Field -->
<div class="form-group col-sm-6">
    {!! Form::label('serialnumber', 'Serial Number/Service Tag:') !!}
    {!! Form::text('serialnumber', null, ['class' => 'form-control']) !!}
</div>

<!-- Equipment Type Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('equipment_type_id', 'Device Category') !!}

    {!! Form::select('equipment_type_id', $data['equipment_type'], null, ['class' => 'form-control']) !!}

</div>

<!-- Situation Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('situation_id', 'Device Status:') !!}

    {!! Form::select('situation_id', $data['situation'], null, ['class' => 'form-control']) !!}

</div>



<div class="form-group col-sm-6">
        <label for="satus">Device Usage:</label>
         <select name="status" class="form-control">
                <option value="used" selected>USED</option>
                <option value="new">NEW</option>
                <option value="faulty">FAULTY</option>
              </select>
    </div>





<!-- Computer Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('computer_name', 'Computer Name:') !!}
    {!! Form::text('computer_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Mac Address Field -->
<div class="form-group col-sm-6">
    {!! Form::label('mac_address', 'MAC Address:') !!}
    {!! Form::text('mac_address', null, ['class' => 'form-control', 'placeholder' => 'e.g. 00:a1:b3:33:10:24']) !!}
</div>

<!-- Ip Address Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ip_address', 'IP Address:') !!}
    {!! Form::text('ip_address', null, ['class' => 'form-control', 'placeholder' => 'Leave blank if not sure']) !!}
</div>

<!-- Comment Field -->
<div class="form-group col-sm-6">
    {!! Form::label('comment', 'Comment:') !!}
    {!! Form::textarea('comment', null, ['class' => 'form-control', 'placeholder' => 'Enter descriptive information about device, eg. faulty charger']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">

    {!! Form::open(['route' => ['equipment.destroy', isset($equipment->id)], 'method' => 'delete']) !!}

        {!! Form::submit('Save', ['class' => 'btn btn-success']) !!}
        <a href="{!! route('equipment.index') !!}" class="btn btn-warning">Cancel</a>
        {!! Form::button('Delete', ['type' => 'submit', 'class' => 'btn btn-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
    {!! Form::close() !!}
</div>