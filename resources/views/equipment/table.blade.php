<div class="table-responsive">
    <table class="table" id="equipment-table">
        <thead>
            <tr>
                <th>Sn</th>
                <th>Name</th>
                <th>Model</th>
                <th>Serial Number</th>
                <th>Type</th>
                <th>Status</th>
                <th>Assigned to</th>
                <th colspan="2">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $i=1; ?>
        @foreach($equipment as $equipment)
        
            <tr>
                <td>{!! $i++ !!}</td>
                <td>{!! $equipment->name !!}</td>
                <td>{!! $equipment->model !!}</td>
                <td>{!! $equipment->serialnumber !!}</td>
                <td>{!! $equipment->equipment_type !!}</td>
                <td>{!! $equipment->status !!}</td>
                <td>{!! $equipment->employee !!}</td>
                <td>
                    {!! Form::open(['route' => ['equipment.destroy', $equipment->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('equipment.edit', [$equipment->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
