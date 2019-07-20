@section('title', 'Equipment Status')
<div class="table-responsive">
    <table class="table" id="situations-table">
        <thead>
            <tr>
                <th>Name</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($situations as $situation)
            <tr>
                <td>{!! $situation->name !!}</td>
                <td>
                    {!! Form::open(['route' => ['situations.destroy', $situation->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('situations.show', [$situation->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('situations.edit', [$situation->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
