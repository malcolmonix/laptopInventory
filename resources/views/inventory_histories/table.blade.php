@section('title', 'Manage Inventory')
<div class="panel panel-default">
    <div class="panel-heading">Search Inventory</div>
    <div class="panel-body">
    <div class="form-group">
        <input type="text" name="search" id="search" class="form-control" placeholder="search inventory history" />
    </div>
    <div class="table-responsive">

    <table class="table table-hover">
        <thead>
        <tr>
            <th>SN</th>
            <th class="sorting" data-sorting_type="asc" data-column_name="id" style="cursor: pointer">Date<span id="id_icon"></span></th>
            <th class="sorting" data-sorting_type="asc" data-column_name="post_employee" style="cursor: pointer">Employee<span id="post_employee_icon"></span></th>
            <th class="sorting" data-sorting_type="asc" data-column_name="post_equipment" style="cursor: pointer">Equipment<span id="post_equipment_icon"></span></th>
            <th class="sorting" data-sorting_type="asc" data-column_name="post_tag" style="cursor: pointer">Tag Number<span id="post_tag_icon"></span></th>
            <th class="sorting" data-sorting_type="asc" data-column_name="post_computername" style="cursor: pointer">Computer Name<span id="post_computername_icon"></span></th>
            <th class="sorting" data-sorting_type="asc" data-column_name="post_project" style="cursor: pointer">Project<span id="post_project_icon"></span></th>
            <th class="sorting" data-sorting_type="asc" data-column_name="post_status" style="cursor: pointer">Status<span id="post_status_icon"></span></th>
            {{-- <th class="sorting" data-sorting_type="asc" data-column_name="post_approvedby" style="cursor: pointer">Approved by<span id="post_approvedby_icon"></span></th> --}}
            {{-- <th class="sorting" data-sorting_type="asc" data-column_name="post_postedby" style="cursor: pointer">Posted by<span id="post_postedby_icon"></span></th> --}}

            <th colspan="2">Action</th>
        </tr>
        </thead>
            
        <tbody>

            @include('inventory_histories.pagination')
        </tbody>
                
    </table>
    <input type="hidden" name="hidden_page" id="hidden_page" value="1" />
    <input type="hidden" name="hidden_column_name" id="hidden_column_name" value="id" />
    <input type="hidden" name="hidden_sort_type" id="hidden_sort_type" value="asc" />
    <input type="hidden" name="hidden_sort_type1" id="hidden_sort_type1" value="asc" />
    <input type="hidden" name="hidden_sort_type2" id="hidden_sort_type2" value="asc" />
    <input type="hidden" name="hidden_sort_type3" id="hidden_sort_type3" value="asc" />
    <input type="hidden" name="hidden_sort_type4" id="hidden_sort_type4" value="asc" />
    <input type="hidden" name="hidden_sort_type5" id="hidden_sort_type5" value="asc" />
    <input type="hidden" name="hidden_sort_type6" id="hidden_sort_type6" value="asc" />
    <input type="hidden" name="hidden_sort_type7" id="hidden_sort_type7" value="asc" />
    <input type="hidden" name="hidden_sort_type8" id="hidden_sort_type8" value="asc" />
    

</div>
</div>
</div>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){

 function clear_icon()
 {
  $('#id_icon').html('');
  $('#post_employee_icon').html('');
  $('#post_equipment_icon').html('');
  $('#post_project_icon').html('');
  $('#post_status_icon').html('');
  $('#post_approvedby_icon').html('');
  $('#post_postedby_icon').html('');
 }

 function fetch_data(page, sort_type, sort_by, query)
 {
  $.ajax({
   url:"/inventoryHistories/fetch_data?page="+page+"&sortby="+sort_by+"&sorttype="+sort_type+"&query="+query,
   success:function(data)
   {
    $('tbody').html('');
    $('tbody').html(data);
   }
  })
 }
 
 $(document).on('keyup', '#search', function(){
  var query = $('#search').val();
  var column_name = $('#hidden_column_name').val();
  var sort_type = $('#hidden_sort_type').val();
  var page = $('#hidden_page').val();
  fetch_data(page, sort_type, column_name, query);
 });

 $(document).on('click', '.sorting', function(){
  var column_name = $(this).data('column_name');
  var order_type = $(this).data('sorting_type');
  var reverse_order = '';
  if(order_type == 'asc')
  {
   $(this).data('sorting_type', 'desc');
   reverse_order = 'desc';
   clear_icon();
   $('#'+column_name+'_icon').html('<span class="glyphicon glyphicon-triangle-bottom"></span>');
  }
  if(order_type == 'desc')
  {
   $(this).data('sorting_type', 'asc');
   reverse_order = 'asc';
   clear_icon
   $('#'+column_name+'_icon').html('<span class="glyphicon glyphicon-triangle-top"></span>');
  }
  $('#hidden_column_name').val(column_name);
  $('#hidden_sort_type').val(reverse_order);
  var page = $('#hidden_page').val();
  var query = $('#search').val();
  fetch_data(page, reverse_order, column_name, query);
 });

 $(document).on('click', '.pagination a', function(event){
  event.preventDefault();
  var page = $(this).attr('href').split('page=')[1];
  $('#hidden_page').val(page);
  var column_name = $('#hidden_column_name').val();
  var sort_type = $('#hidden_sort_type').val();

  var query = $('#search').val();

  $('li').removeClass('active');
        $(this).parent().addClass('active');
  fetch_data(page, sort_type, column_name, query);
 });


});
</script>