<div class="form-horizontal">
<!-- Issue Date Field -->
<div class="form-group">
        <label class="col-md-3 col-xs-12 control-label">Issue Date:</label>

        <div class="col-sm-8 col-xs-12">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-calendar text-primary"></i></span>
                <input type="text" class="form-control datepicker" name="issue_date" value="<?php echo Carbon\Carbon::today()->format('Y-m-d') ?>" >
            </div>
            <span class="help-block"></span>
        </div>
    </div>



<!-- Employee Id Field -->
<div class="form-group">
        {!! Form::label('employee_id', 'Employee:',['class' => 'col-sm-3 control-label']) !!}
     <div class="col-sm-8">
       {!! Form::select('employee_id', $employee, null, ['class' => 'form-control']) !!}     
    </div>
</div>

<!-- Equipment Id Field -->
{{-- <div class="form-group">
    {!! Form::label('equipment_id', 'Device Name:',['class' => 'col-sm-3 control-label']) !!}
     <div class="col-sm-8">
         {!! Form::select('equipment_id', $equipment, null, ['class' => 'form-control']) !!}
</div>
</div> --}}


<div class="form-group">
        <label for="equipment_id" class="col-sm-3 control-label">Device Name</label>
        <div class="col-sm-8">
        <select name="equipment_id" class="form-control">
            @foreach ($equipment as $item)
                <option value="{{$item->id}}">{{$item->name }} - {{$item->serialnumber}} -  {{$item->computer_name}} </option>
            @endforeach        
        </select>
    </div>
    </div>

<!-- Project Id Field -->
<div class="form-group">
  {!! Form::label('project_id', 'Project:',['class' => 'col-sm-3 control-label']) !!}
 
  <div class="col-sm-8">
     {!! Form::select('project_id', $project, null, ['class' => 'form-control']) !!}
  </div>
</div>

<!-- Situation Id Field -->
<div class="form-group">
    {!! Form::label('situation_id', 'Status:',['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-8">
       {!! Form::select('situation_id', $situation, null, ['class' => 'form-control']) !!}
 </div>
</div>

<!-- Projectto Id Field -->
<div class="form-group">
    {!! Form::label('projectTo_id', 'Project To:',['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-8">
        {!! Form::select('projectTo_id', $project, null, ['class' => 'form-control']) !!}
</div>
</div>

<!-- Approvedby Field -->
<div class="form-group">
    {!! Form::label('approvedby', 'Approved by:',['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-8">
    {!! Form::text('approvedby', null, ['class' => 'form-control']) !!}
</div>
</div>

<div class="form-group">
    <label class="col-md-3 col-xs-12 control-label">Equipment Received Form:</label>

    <div class="col-md-6 col-xs-12">
        <input type="file" class="fileinput btn-primary" name="document_url" id="document_url" title="Browse file"/>
    </div>
</div>

  <!-- Remarks Field -->
    <div class="form-group">
        {!! Form::label('remarks', 'Remark:',['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-8">
        {!! Form::textarea('remarks', null, ['class' => 'form-control', 'placeholder' => 'Enter descriptive information of where staff is currently working and who is he?']) !!}
        </div>
    </div>
    

    <div class="form-group">
        {!! Form::label('document', 'Document:',['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-8">
            <iframe id="show_pdf" src="{{ asset( $document) }}" style="width:100%; height: 600px; border:1px solid red;"></iframe>
        </div>
    </div>

    </div>

<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        <div class='control-group'>
            {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
            <a href="{!! route('inventoryHistories.index') !!}" class="btn btn-default">Cancel</a>
        </div>
    </div>
    </div>
</div>