@extends('layouts.app')
@section('title', 'Manage Inventory')
@section('content')



    <section class="content-header">
        <h1 class="pull-left">Manage Inventory <span><a href="{{UxWeb\SweetAlert\SweetAlert::message('Robots are working!')}}}">test alert</a></span></h1>

        <div class="text-right">
           <a  class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{{ route('inventoryHistories.create') }}">Return</a>
           <a  class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{{ route('inventoryHistories.create') }}">Assign</a>
           <a  class="btn btn-primary" style="margin-top: -10px;margin-bottom: 5px" href="{{ route('inventory_histories.excel') }}">Export to Excel</a>
        </div>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>

        <div class="box box-primary">
            <div class="box-body">
                    @include('inventory_histories.table')
            </div>
        </div>
        <div class="text-center">
        
        </div>
    </div>

    <script type="text/javascript">

    let data = {!! json_encode($data) !!};
    let results = JSON.parse(data);   

    rowElement = document.getElementById('equipmentContainer');

    html = `<tr class="graybg js--inventoryRow" id="inventoryRow">
            <td>  %count% </td>    
            <td>{Employee}</td>
            <td>{Equipment}</td>
            <td>{TagNumber}</td>
            <td>{ComputerName}</td>
            <td>{Status}</td>
            <td>
                    <form action="<?php echo "inventoryHistories/delete/%id%" ?>" class="form-horizontal" method="delete" >
                <div class='btn-group'>
                    <a href="inventoryHistories/%id%" class='btn btn-default btn-xs' title="See Details"><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="inventoryHistories/%id%/edit" class='btn btn-default btn-xs' title="Edit Info"><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                </form>
            </td>
        </tr>`;

    let count = 0;

   results.forEach(el => {
      //console.log(el.equipment);
        count += 1;
       //Replace the placeholder text with some actual data
       newHtml = html.replace('%count%', count);
       newHtml = newHtml.replace(/%id%/g, el.id);
       newHtml = newHtml.replace('{Employee}', el.employee);
       newHtml = newHtml.replace('{Equipment}', el.equipment);
       newHtml = newHtml.replace('{TagNumber}', el.serialnumber);
       newHtml = newHtml.replace('{ComputerName}', el.computer_name);
       newHtml = newHtml.replace('{Status}', el.status);

       //Insert the HTML into the DOM
   });

   filterList = () => {
       let searchInput, filter, tr, i, td, txtValue;
       
       searchInput = document.getElementById('searchInput');
       filter = searchInput.value.toUpperCase();
       trs = document.querySelectorAll('.js--inventoryRow');
       trs.forEach(tr => tr.style.display = [...tr.children].find(td => td.innerHTML.toUpperCase().includes(filter)) ? '' : 'none');
   };

function Pagination(pageEleArr, numOfEleToDisplayPerPage){
    this.pageEleArr = pageEleArr;
    this.numOfEleToDisplayPerPage = numOfEleToDisplayPerPage;
    this.elementCount = this.pageEleArr.length;
    this.numOfPages = Math.ceil(this.elementCount / this.numOfEleToDisplayPerPage);
    
}

</script>


@endsection

