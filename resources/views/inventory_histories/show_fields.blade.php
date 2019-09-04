
<!-- Issue Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('issue_date', 'Issue Date:',['class' => 'col-sm-3 control-label']) !!}
    {!! Form::label('issue_date', $inventoryHistory->issue_date) !!}
</div>


<!-- Equipment Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('equipment_id', 'Equipment:',['class' => 'col-sm-3 control-label']) !!}
    {!! Form::label('equipment_id', $inventoryHistory->equipment) !!}
</div>

<!-- Project Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('project_id', 'Project:',['class' => 'col-sm-3 control-label']) !!}
    {!! Form::label('project_id', $inventoryHistory->project) !!}
</div>

<!-- Situation Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('situation_id', 'Status:',['class' => 'col-sm-3 control-label']) !!}
    {!! Form::label('situation_id', $inventoryHistory->status) !!}
</div>


<!-- Approvedby Field -->
<div class="form-group col-sm-6">
    {!! Form::label('approvedby', 'Approved by:',['class' => 'col-sm-3 control-label']) !!}
    {!! Form::label('user_id', $inventoryHistory->approvedby) !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('postedby', 'Posted by:',['class' => 'col-sm-3 control-label']) !!}
    {!! Form::label('user_id', $inventoryHistory->postedby) !!}
</div>

<!-- Signed Document Field -->
<div class="form-group col-sm-6">
    <iframe id="show_pdf" src="{{ asset( $document) }}" style="width:100%; height: 400px; border:1px solid red;"></iframe>
</div>

<!-- Remarks Field -->
<div class="form-group col-sm-6">
    {!! Form::textarea('remarks', $inventoryHistory->remarks, ['class' => 'form-control']) !!}
</div>



<div class="form-group col-sm-6">
    {!! Form::open(['route' => ['inventoryHistories.destroy', $inventoryHistory->id], 'method' => 'delete']) !!}
        {!! Form::button('Delete', ['type' => 'submit', 'class' => 'btn btn-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
        <a href="{!! route('inventoryHistories.index') !!}" class="btn btn-default">Back</a>
    {!! Form::close() !!}
</div>


