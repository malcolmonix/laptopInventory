<div class="table-responsive">
    <table class="table" id="equipment-table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Model</th>
                <th>Serial Number</th>
                <th>Type</th>
                <th>Status</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($equipment as $equipment)
            <tr>
                <td>{!! $equipment->name !!}</td>
                <td>{!! $equipment->model !!}</td>
                <td>{!! $equipment->serialnumber !!}</td>
                <td>{!! $equipment->equipment_type->name !!}</td>
                <td>{!! $equipment->situation->name !!}</td>
                <td>
                    {!! Form::open(['route' => ['equipment.destroy', $equipment->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('equipment.show', [$equipment->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
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
