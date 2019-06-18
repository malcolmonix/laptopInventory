<!-- Issue Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('issue_date', 'Issue Date:') !!}
    {!! Form::date('issue_date', null, ['class' => 'form-control','id'=>'issue_date']) !!}
</div>

@section('scripts')
    <script type="text/javascript">
        $('#issue_date').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endsection

<!-- Employee Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('employee_id', 'Employee Id:') !!}
    {!! Form::text('employee_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Equipment Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('equipment_id', 'Equipment Id:') !!}
    {!! Form::text('equipment_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Project Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('project_id', 'Project Id:') !!}
    {!! Form::text('project_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Situation Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('situation_id', 'Situation Id:') !!}
    {!! Form::text('situation_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Projectto Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('projectTo_id', 'Projectto Id:') !!}
    {!! Form::text('projectTo_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Approvedby Field -->
<div class="form-group col-sm-6">
    {!! Form::label('approvedby', 'Approvedby:') !!}
    {!! Form::text('approvedby', null, ['class' => 'form-control']) !!}
</div>

<!-- Remarks Field -->
<div class="form-group col-sm-6">
    {!! Form::label('remarks', 'Remarks:') !!}
    {!! Form::text('remarks', null, ['class' => 'form-control']) !!}
</div>

<!-- User Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_id', 'User Id:') !!}
    {!! Form::text('user_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('inventoryHistories.index') !!}" class="btn btn-default">Cancel</a>
</div>
