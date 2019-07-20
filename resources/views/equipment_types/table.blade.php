@section('title', 'Equipment Type')
<div class="table-responsive">
    <table class="table" id="equipmentTypes-table">
        <thead>
            <tr>
                <th>Name</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($equipmentTypes as $equipmentType)
            <tr>
                <td>{!! $equipmentType->name !!}</td>
                <td>
                    {!! Form::open(['route' => ['equipmentTypes.destroy', $equipmentType->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('equipmentTypes.show', [$equipmentType->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('equipmentTypes.edit', [$equipmentType->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
