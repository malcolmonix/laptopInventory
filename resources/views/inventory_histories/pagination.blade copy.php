<?php $i=0; ?>
<tr>
    <td colspan="12" class="text-right small-gray">
    @if ($inventory->count() <= 1 )   
        {!! $inventory->count() . '  Record found' !!}   
    @else 
        {{ $inventory->count() . ' Records found' }}
    @endif   
    </td>
</tr>
@foreach($inventory as $row)

<tr class="graybg">
    <td>  {{ ++$i }} </td>
    {{-- <td>{{ $row->issue_date }} </td> --}}
    <td>{{ $row->employee }} </td>
    <td class="table-text-right tooltip-enable-mandatory" data-toggle="tooltip" data-container="#tableRoceMovement" data-original-title="{{ isset($row->comment) ? $row->comment:'No RAM, HDD info' }}" title="{{ isset($row->comment) ? $row->comment:'No RAM, HDD info' }}"data-placement="bottom" data-html="true" onmouseenter="tooltipEnterEvent($(this))" onmouseleave="tooltipLeaveEvent($(this))" >{{App\Models\Brand::find($row->brand_id)->name }} {{ $row->equipment }} </td>
    <td>{{ $row->serialnumber }}  </td>
    <td> {{ $row->computer_name }} </td>
    {{-- <td>{{ $row->project }}</td> --}}
    @if ($row->status == "IN-STOCK")
    <td class="status_bg">{{ $row->status }} </td>
    @else
    <td>{{ $row->status }} </td>
    @endif

    {{-- <td>{{ $row->approvedby }} </td> --}}
    {{-- <td>{{ $row->postedby }}</td> --}}
    <td>
    {!! Form::open(['route' => ['inventoryHistories.destroy', $row->id], 'method' => 'delete']) !!}
        <div class='btn-group'>
            <a href="{!! route('inventoryHistories.show', [$row->id]) !!}" class='btn btn-default btn-xs' title="See Details"><i class="glyphicon glyphicon-eye-open"></i></a>
            <a href="{!! route('inventoryHistories.edit', [$row->id]) !!}" class='btn btn-default btn-xs' title="Edit Info"><i class="glyphicon glyphicon-edit"></i></a>
            {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
        </div>
        {!! Form::close() !!}
    </td>  
    </tr>
@endforeach
<tr>
    <td colspan="12" class="text-right">
         {{-- {!! $inventory->links() !!} --}}
    </td>
</tr>

<!-- <form action="<?php echo "inventoryHistories/destroy%id%" ?>" class="form-horizontal" method="delete" >
                <div class='btn-group'>
                    <a href="inventoryHistories/show/%id%" class='btn btn-default btn-xs' title="See Details"><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="inventoryHistories/edit/%id%" class='btn btn-default btn-xs' title="Edit Info"><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                </form> -->