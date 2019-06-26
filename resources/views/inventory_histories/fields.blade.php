<div class="form-horizontal">
<!-- Issue Date Field -->
<div class="form-group">
    {!! Form::label('issue_date', 'Issue Date:',['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-8">
    {!! Form::date('issue_date', null, ['class' => 'form-control','id'=>'issue_date']) !!}
    </div>
</div>

@section('scripts')
    <script type="text/javascript">
        $('#issue_date').datepicker({
            todayBtn: "linked",
            keyboardNavigation: false,
            forceParse: false,
            calendarWeeks: true,
            autoclose: true,
            format: "yyyy/mm/dd"
        })
    </script>
@endsection

<!-- Employee Id Field -->
<div class="form-group">
        {!! Form::label('employee_id', 'Employee:',['class' => 'col-sm-3 control-label']) !!}
     <div class="col-sm-8">
       {!! Form::select('employee_id', $employee, null, ['class' => 'form-control']) !!}     
    </div>
</div>

<!-- Equipment Id Field -->
<div class="form-group">
    {!! Form::label('equipment_id', 'Equipment:',['class' => 'col-sm-3 control-label']) !!}
     <div class="col-sm-8">
         {!! Form::select('equipment_id', $equipment, null, ['class' => 'form-control']) !!}
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

<!-- Remarks Field -->
<div class="form-group">
    {!! Form::label('remarks', 'Remark:',['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-8">
    {!! Form::textarea('remarks', null, ['class' => 'form-control']) !!}
</div>
</div>

<div class="form-group">
 <div class="col-sm-offset-2 col-sm-10">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('inventoryHistories.index') !!}" class="btn btn-default">Cancel</a>
</div>
</div>
</div>