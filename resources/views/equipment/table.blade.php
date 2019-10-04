@section('title', 'Equipment')
<div class="panel panel-default">
    <div class="panel-heading">Search Equipment</div>
    <div class="panel-body">
    <div class="form-group">
        <input type="text" name="search" id="searchEquipment" onkeyup="filterList()" class="form-control" placeholder="search equipments" />
    </div>

<div class="table-responsive">
    <table class="table" id="equipment-table">
        <thead>
            <tr class="heading--table">

                <th>SN</th>
                <th>Name</th>
                <th>Serial Number</th>
                <th>Computer Name</th>
                <th>Status</th>      

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

