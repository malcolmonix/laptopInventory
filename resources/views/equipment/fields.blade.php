{{ Form::hidden('user_id', Auth::user()->id) }}


<!-- Equipment Type Id Field -->
<div class="form-group col-sm-6">
        {!! Form::label('equipment_type_id', 'Device Category') !!}
    
        {!! Form::select('equipment_type_id', $data['equipment_type'], null, ['class' => 'form-control']) !!}
    
    </div>

<!-- Brand Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('brand_id', 'Brand:') !!}
    {!! Form::select('brand_id',  $brand, null, ['class' => 'form-control']) !!}
</div>

<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Device Name/Model:') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'e.g. Latitude 3570, Pavilion 15, X550JX']) !!}
</div>

<!-- Model Field -->
{{-- <div class="form-group col-sm-6">
    {!! Form::label('model', 'Model:') !!}
    {!! Form::text('model', null, ['class' => 'form-control', 'placeholder' => 'Enter model of device']) !!}
</div> --}}



<!-- Serialnumber Field -->
<div class="form-group col-sm-6">
    {!! Form::label('serialnumber', 'Serial Number/Service Tag:') !!}
    {!! Form::text('serialnumber', null, ['class' => 'form-control']) !!}
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
                <option value="stolen">STOLEN</option>
              </select>
    </div>





<!-- Computer Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('computer_name', 'Computer Name:') !!}
    {!! Form::text('computer_name', null, ['class' => 'form-control', 'placeholder' => 'e.g. NGRComp0000']) !!}
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

<!-- RAM -->
<div class="form-group col-sm-6">
        <label for="ram">RAM Size:</label>
        <select name="ram" class="form-control">
               <option value="" selected>Not Sure</option>
               <option value="4GB" selected>4GB</option>
               <option value="8GB">8GB</option>
               <option value="12GB">12GB</option>
               <option value="16GB">16GB</option>
               <option value="32GB">32GB</option>
             </select>
</div>

<!-- Processor -->
<div class="form-group col-sm-6">
        <label for="processor">Processor:</label>
        <select name="processor" class="form-control">
               <option value="" selected>Not Sure</option>
               <option value="Core i7" selected>Core i7</option>
               <option value="Core i5">Core i5</option>
               <option value="Core i3">Core i3</option>
               <option value="Quad Core">Quad Core</option>
               <option value="Dual Core">Dual Core</option>
             </select>
</div>



<!-- Disk Type -->
<div class="form-group col-sm-6">
        <label for="disk_type">Disk Type:</label>
        <select name="disk_type" class="form-control">
                <option value="" selected>Not Sure</option>
               <option value="HDD" selected>HDD</option>
               <option value="SSD">SSD</option>
             </select>
</div>


<!-- Disk Size -->
<div class="form-group col-sm-6">
        <label for="disk_size">Disk Size:</label>
        <select name="disk_size" class="form-control">
                <option value="" selected>Not Sure</option>
               <option value="250GB" selected>250GB</option>
               <option value="500GB">500GB</option>
               <option value="1TB">1TB</option>
             </select>
</div>

<!-- Comment Field -->
<div class="form-group col-sm-6">
    {!! Form::label('comment', 'Comment:') !!}
    {!! Form::textarea('comment', null, ['class' => 'form-control', 'placeholder' => 'Enter descriptive information about device, eg. 16GB charger']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    

    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('employees.index') !!}" class="btn btn-success">Cancel</a>

    {!! Form::button('Delete', ['type' => 'submit', 'class' => 'btn btn-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
</div>