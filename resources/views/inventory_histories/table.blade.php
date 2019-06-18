<div class="table-responsive">
    <table class="table" id="inventoryHistories-table">
        <thead>
            <tr>
                <th>Issue Date</th>
        <th>Employee Id</th>
        <th>Equipment Id</th>
        <th>Project Id</th>
        <th>Situation Id</th>
        <th>Projectto Id</th>
        <th>Approvedby</th>
        <th>Remarks</th>
        <th>User Id</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($inventoryHistories as $inventoryHistory)
            <tr>
                <td>{!! $inventoryHistory->issue_date !!}</td>
            <td>{!! $inventoryHistory->employee_id !!}</td>
            <td>{!! $inventoryHistory->equipment_id !!}</td>
            <td>{!! $inventoryHistory->project_id !!}</td>
            <td>{!! $inventoryHistory->situation_id !!}</td>
            <td>{!! $inventoryHistory->projectTo_id !!}</td>
            <td>{!! $inventoryHistory->approvedby !!}</td>
            <td>{!! $inventoryHistory->remarks !!}</td>
            <td>{!! $inventoryHistory->user_id !!}</td>
                <td>
                    {!! Form::open(['route' => ['inventoryHistories.destroy', $inventoryHistory->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('inventoryHistories.show', [$inventoryHistory->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('inventoryHistories.edit', [$inventoryHistory->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
