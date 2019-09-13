@section('title', 'Equipment')
<div class="panel panel-default">
    <div class="panel-heading">Search Equipment</div>
    <div class="panel-body">
    <div class="form-group">
        <input type="text" name="search" id="search" class="form-control" placeholder="search equipments" />
    </div>

<div class="table-responsive">
    <table class="table" id="equipment-table">
        <thead>
            <tr class="heading--table">

                <th >SN</th>
                <th class="sorting" data-sorting_type="asc" data-column_name="post_name" style="cursor: pointer">Name<span id="post_name_icon"></span></th>
                <th class="sorting" data-sorting_type="asc" data-column_name="post_serial" style="cursor: pointer">Serial Number<span id="post_serial_icon"></span></th>
                <th class="sorting" data-sorting_type="asc" data-column_name="post_computer" style="cursor: pointer">Computer Name<span id="post_computer_icon"></span></th>
                <th class="sorting" data-sorting_type="asc" data-column_name="post_status" style="cursor: pointer">Status<span id="post_status_icon"></span></th>      

                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>

        @include('equipment.pagination')

        </tbody>
    </table>
    <input type="hidden" name="hidden_page" id="hidden_page" value="1" />
    <input type="hidden" name="hidden_column_name" id="hidden_column_name" value="id" />
    <input type="hidden" name="hidden_sort_type" id="hidden_sort_type" value="asc" />
    <input type="hidden" name="hidden_sort_type" id="hidden_sort_type" value="asc" />
    <input type="hidden" name="hidden_sort_type" id="hidden_sort_type" value="asc" />
    <input type="hidden" name="hidden_sort_type" id="hidden_sort_type" value="asc" />
    <input type="hidden" name="hidden_sort_type" id="hidden_sort_type" value="asc" />
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
  $('#post_serial_icon').html('');
  $('#post_name_icon').html('');
  $('#post_computer_icon').html('');
  $('#post_status_icon').html('');
 }

 function fetch_data(page, sort_type, sort_by, query)
 {
  $.ajax({
   url:"/equipment/fetch_data?page="+page+"&sortby="+sort_by+"&sorttype="+sort_type+"&query="+query,
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