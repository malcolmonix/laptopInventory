@section('title', 'Employee')
<div class="panel panel-default">
    <div class="panel-heading">Search Employee</div>
    <div class="panel-body">
    <div class="form-group">
        <input type="text" name="search" id="search" class="form-control" placeholder="search employees" />
    </div>
<div class="table-responsive">
<h3 style="align:center">Record Found : <span id="total_records"></span></h3>
    <table class="table" id="employees-table">
        <thead>
            <tr>
                <th>SN</th>
                <th>Name</th>
                <th>Employee ID#</th>
                <th>Position</th>
                <th>Project</th>
                <th colspan="2">Action</th>
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

 fetch_employee_data();

 function fetch_employee_data(query = '')
 {
   $.ajax({
   url:"{{ route('employees.search') }}",
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
  fetch_employee_data(query);
  
 });



 $(document).on('click', '.edit', function(){  
    var record_id = $(this).attr("id");  
    var url = '{{ route("employees.edit", ":slug") }}';
    url = url.replace(':slug', record_id);
    window.location.href=url;       
});

$(document).on('click', '.show', function(){  
    var record_id = $(this).attr("id");  
    var url = '{{ route("employees.show", ":slug") }}';
    url = url.replace(':slug', record_id);
    window.location.href=url;       
});


});
</script>