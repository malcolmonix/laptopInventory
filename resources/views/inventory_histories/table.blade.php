@section('title', 'Manage Inventory')
<div class="panel panel-default">
    <div class="panel-heading">Search Inventory</div>
    <div class="panel-body">
    <div class="form-group">
        <input type="text" name="search" id="search" class="form-control" placeholder="search inventory history" />
    </div>
    <div class="table-responsive">
    <h3 style="align:center">Record Found : <span id="total_records"></span></h3>
    <table class="table" id="inventoryHistories-table">
        <thead>
        <tr>
            <th>SN</th>
            <th>Date</th>
            <th>Employee</th>
            <th>Equipment</th>
            <th>Project</th>
            <th>Status</th>
            <th>Approved by</th>
            <th>Posted by</th>
            <th colspan="2">Action</th>
        </tr>
        </thead>
            
        <tbody>
        </tbody>
                
    </table>
    <div class="form-group" id="pagination"></div>
</div>
</div>
</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script>
$(document).ready(function(){

 
 function fetch_inventory_data(query = '')
 {
   $.ajax({
   url:"{{ route('inventory_histories.action') }}",
   method:'GET',
   data:{query:query},
   dataType:'json',
   success:function(data)
   {
    $('tbody').html(data.table_data);
    $('#total_records').text(data.total_data);
    $('#pagination').html(data.pagination);
   }
  })
 };


 fetch_inventory_data();


 $(document).on('keyup', '#search', function(){
  var query = $(this).val();
  fetch_inventory_data(query);
 });



 $(document).on('click', '.edit', function(){  
    var record_id = $(this).attr("id");  
    var url = '{{ route("inventoryHistories.edit", ":slug") }}';
    url = url.replace(':slug', record_id);
    window.location.href=url;       
});

$(document).on('click', '.show', function(){  
    var record_id = $(this).attr("id");  
    var url = '{{ route("inventoryHistories.show", ":slug") }}';
    url = url.replace(':slug', record_id);
    window.location.href=url;       
});


});
</script>