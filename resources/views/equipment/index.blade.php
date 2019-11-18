@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Equipment List</h1>
        <h1 class="pull-right">
           <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('equipment.create') !!}">Add New</a>
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                    @include('equipment.table')
            </div>
        </div>
        <div class="text-center">
        
        </div>
    </div>

    <script type="text/javascript">

        let data = {!! json_encode($data) !!};
        let results = JSON.parse(data);   
        //console.log(data);
        rowElement = document.getElementById('equipment-table');    
        
        html = `
            <tr class="graybg js--inventoryRow">
                <td>  %count% </td>
                <td class="table-text-right tooltip-enable-mandatory" data-toggle="tooltip" data-container="#tableRoceMovement"  title="%ram% '%disk_size%" data-placement="bottom" data-html="true" onmouseenter="tooltipEnterEvent($(this))" onmouseleave="tooltipLeaveEvent($(this))"><?php echo '%brand%' ?> - <?php echo '%equipment_model%' ?> </td>
                <td><?php echo '%serialnumber%' ?> </td>
                <td><?php echo '%computer_name%' ?>  </td>
                
                <?php if('%status%' == "IN-STOCK") { ?>
                <td class="status_bg"><?php echo '%status%' ?> </td>
                <?php } else { ?>
                <td><?php echo '%status%' ?> </td>
                <?php } ?>

                
                <td>
                    <form action="<?php echo "equipment/delete/%id%" ?>" class="form-horizontal" method="delete" >                
                    <div class='btn-group'>
                        <a href="equipment/%id%" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="equipment/%id%/edit" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>  
            </tr>
            
        `;
    
        let count = 0;
    
       results.forEach(el => {
        //   console.log(el);
            count += 1;
           //Replace the placeholder text with some actual data
           newHtml = html.replace('%count%', count);
           newHtml = newHtml.replace(/%id%/g, el.id);
           newHtml = newHtml.replace(/%ram%/g, el.ram);
           newHtml = newHtml.replace('%brand%', el.brand);
           newHtml = newHtml.replace('%disk_size%', el.disk_size);
           newHtml = newHtml.replace('%equipment_model%', el.equipmentname);
           newHtml = newHtml.replace('%serialnumber%', el.serialnumber);           
           if(el.computer_name){
                newHtml = newHtml.replace('%computer_name%', el.computer_name);
           }else {
                newHtml = newHtml.replace('%computer_name%', ' ');
           }
           newHtml = newHtml.replace('%status%', el.status);
    
           //Insert the HTML into the DOM
           rowElement.insertAdjacentHTML('beforeend', newHtml);
       });
    
       filterList = () => {
           let searchInput, filter, tr, i, td, txtValue;
           
           searchInput = document.getElementById('searchEquipment');
           filter = searchInput.value.toUpperCase();
           trs = document.querySelectorAll('.js--inventoryRow');
           trs.forEach(tr => tr.style.display = [...tr.children].find(td => td.innerHTML.toUpperCase().includes(filter)) ? '' : 'none');
       };
    
    
    </script>
                  
@endsection

