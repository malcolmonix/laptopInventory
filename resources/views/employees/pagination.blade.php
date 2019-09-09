<?php $i=0; ?>
<tr>
    <td colspan="8" class="text-right">
    @if ($data->count() <= 1 )   
        {!! $data->count() . '  Record found' !!}   
    @else 
        {{ $data->count() . ' Records found' }}
    @endif   
    </td>
</tr>
@foreach($data as $row)
<tr>
    <td>  {{ ++$i }} </td>
    <td>{{ $row->employee_name }} </td>
    <td>{{ $row->employee_id }} </td>
    <td>{{ $row->position }}  </td>
    <td>{{ $row->project }}</td>
    <td>
    {!! Form::open(['route' => ['employees.destroy', $row->id], 'method' => 'delete']) !!}
        <div class='btn-group'>
            <a href="{!! route('employees.show', [$row->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
            <a href="{!! route('employees.edit', [$row->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
            {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
        </div>
        {!! Form::close() !!}
    </td>  
    </tr>
@endforeach
<tr>
    <td colspan="10" class="text-right">
        {!! $data->links() !!}
    </td>
</tr>