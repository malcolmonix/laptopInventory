<?php $i=0; ?>
<tr>
    <td colspan="8" class="text-right small-gray">
    @if ($data->count() <= 1 )   
        {!! $data->count() . '  Record found' !!}   
    @else 
        {{ $data->count() . ' Records found' }}
    @endif   
    </td>
</tr>
@foreach($data as $row)
<tr class="graybg">
    <td>  {{ ++$i }} </td>
    <td class="table-text-right tooltip-enable-mandatory" data-toggle="tooltip" data-container="#tableRoceMovement" data-original-title="{{ isset($row->ram) ? $row->ram:'No RAM, HDD info' }}" title="{{ isset($row->ram) ? $row->ram . ' ' . $row->disk_size :'No RAM, HDD info' }}"data-placement="bottom" data-html="true" onmouseenter="tooltipEnterEvent($(this))" onmouseleave="tooltipLeaveEvent($(this))">{{ $row->brand }} - {{ $row->equipment_model }} </td>
    <td>{{ $row->serialnumber }} </td>
    <td>{{ $row->computer_name }}  </td>
    
    @if ($row->status == "IN-STOCK")
    <td class="status_bg">{{ $row->status }} </td>
    @else
    <td>{{ $row->status }} </td>
    @endif

    
    <td>
    {!! Form::open(['route' => ['equipment.destroy', $row->id], 'method' => 'delete']) !!}
        <div class='btn-group'>
            <a href="{!! route('equipment.show', [$row->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
            <a href="{!! route('equipment.edit', [$row->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
            {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
        </div>
        {!! Form::close() !!}


        
    </td>  
    </tr>
@endforeach
<tr>
    <td colspan="8" class="text-right">
        {!! $data->links() !!}
    </td>
</tr>