@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Employee</h1>
        <h1 class="pull-right">
           <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('employees.create') !!}">Add New</a>
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                    @include('employees.table')
            </div>
        </div>
        <div class="text-center">
        
        </div>
    </div>

    <script type="text/javascript">

        let data = {!! json_encode($data) !!};
        let results = JSON.parse(data);   
        //console.log(data);
        rowElement = document.getElementById('employees-table');  
        document.getElementById('total_records').innerHTML = results.length;

        html = `
                <tr class="graybg js--inventoryRow">
            <td>  %count% </td>
            <td>%employee_name% </td>
            <td>%employee_id% </td>
            <td>%position%  </td>
            <td>%project%</td>
            <td>
                    <form action="<?php echo "employees/delete/%id%" ?>" class="form-horizontal" method="delete" >                
                    <div class='btn-group'>
                        <a href="employees/%id%" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="employees/%id%/edit" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td> 
            </tr>
        ` ; 

    
        let count = 0;
    
       results.forEach(el => {
        //   console.log(el);
            count += 1;
           //Replace the placeholder text with some actual data
           newHtml = html.replace('%count%', count);
           newHtml = newHtml.replace(/%id%/g, el.id);
           newHtml = newHtml.replace('%employee_name%', el.employee_name);
           newHtml = newHtml.replace('%employee_id%', el.employee_id);
           newHtml = newHtml.replace('%position%', el.position);
           newHtml = newHtml.replace('%project%', el.project);
    
           //Insert the HTML into the DOM
           rowElement.insertAdjacentHTML('beforeend', newHtml);
       });
    
       filterList = () => {
           let searchInput, filter, tr, i, td, txtValue;
           
           searchInput = document.getElementById('searchEmployee');
           filter = searchInput.value.toUpperCase();
           trs = document.querySelectorAll('.js--inventoryRow');
           trs.forEach(tr => tr.style.display = [...tr.children].find(td => td.innerHTML.toUpperCase().includes(filter)) ? '' : 'none');
       };
    
    
    </script>

@endsection

