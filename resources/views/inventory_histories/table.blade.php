<div class="table-responsive">
    <table class="table" id="inventoryHistories-table">
        <thead>
            <tr>
        <th>SN</th>
        <th>Date</th>
        <th>Employee</th>
        <th>Equipment</th>
        <th>Project</th>
        <th>Status</th>
        <th>Approved by</th>
        <th>Posted by</th>
        <th colspan="2">Action</th>
            </tr>
        </thead>
        <tbody>
          <?php $i = 1 ?>
          @foreach($inventoryHistories as $inventoryHistory)
           
            <tr>
            <td>{!! $i++ !!}</td>
            <td>{!! $inventoryHistory->issue_date !!}</td>
            <td>{!! $inventoryHistory->employee !!}</td>
            <td>{!! $inventoryHistory->equipment !!}</td>
            <td>{!! $inventoryHistory->project !!}</td>
            <td>{!! $inventoryHistory->status !!}</td>
            <td>{!! $inventoryHistory->approvedby !!}</td>
            <td>{!! $inventoryHistory->postedby !!}</td>
                <td>
                    {!! Form::open(['route' => ['inventoryHistories.destroy', $inventoryHistory->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
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
