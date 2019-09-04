@section('title', 'Equipment')
<div class="panel panel-default">
    <div class="panel-heading">Search Equipment</div>
    <div class="panel-body">
    <div class="form-group">
        <input type="text" name="search" id="search" class="form-control" placeholder="search equipments" />
    </div>
<h3 style="align:center">Record Found : <span id="total_records"></span></h3>
<div class="table-responsive">
    <table class="table" id="equipment-table">
        <thead>
            <tr>
                <th>SN</th>
                <th>Name</th>
                <th>Serial Number</th>
                <th>Computer Name</th>
                <th>Status</th>      
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
       
        </tbody>
    </table>
</div>
</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script>
$(document).ready(function(){

 fetch_equipment_data();

 function fetch_equipment_data(query = '')
 {
   $.ajax({
   url:"{{ route('equipment.search') }}",
   method:'GET',
   data:{query:query},
   dataType:'json',
   success:function(data)
   {
    $('tbody').html(data.table_data);
    $('#total_records').text(data.total_data);
   
   }
  })
 }

 $(document).on('keyup', '#search', function(){
  var query = $(this).val();
  fetch_equipment_data(query);
  
 });



 $(document).on('click', '.edit', function(){  
    var record_id = $(this).attr("id");  
    var url = '{{ route("equipment.edit", ":slug") }}';
    url = url.replace(':slug', record_id);
    window.location.href=url;       
});

$(document).on('click', '.show', function(){  
    var record_id = $(this).attr("id");  
    var url = '{{ route("equipment.show", ":slug") }}';
    url = url.replace(':slug', record_id);
    window.location.href=url;       
});


});
</script>