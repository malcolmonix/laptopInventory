@section('title', 'Manage Inventory')

<?php 
    $input['status'] = !empty($input['status']) ? $input['status'] : null;
    $input['tagnum'] = !empty($input['tagnum']) ? $input['tagnum'] : null;
?>

<div class="panel panel-default">
    <div class="panel-heading">Search Inventory</div>
    <div class="panel-body">
        <div class="form-group">
        <input type="text" name="search" id="searchInput" onkeyup="filterList()" class="form-control" placeholder="search inventory history" />
    </div>

        <div class="table-responsive">

            <table class="table table-hover">
                <thead>
        <tr class="heading--table">
            <th>SN</th>
            <th >Employee</th>
            <th >Equipment</th>
            <th >Tag Number</th>
            <th >Computer Name</th>
            <th >Status<span id="post_status_icon"></span></th>
            <th colspan="2">Action</th>
        </tr>
        </thead>

        <tbody id="equipmentContainer">
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


