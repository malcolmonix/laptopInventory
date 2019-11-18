@section('title', 'Employee')
<div class="panel panel-default">
    <div class="panel-heading">Search Employee</div>
    <div class="panel-body">
    <div class="form-group">
        <input type="text" name="search" id="searchEmployee" onkeyup="filterList()" class="form-control" placeholder="search employees" />
    </div>
<div class="table-responsive">
<h3 style="align:center">Records Found : <span id="total_records"></span></h3>
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

        @include('employees.pagination')

        </tbody>
    </table>
    <input type="hidden" name="hidden_page" id="hidden_page" value="1" />
    <input type="hidden" name="hidden_column_name" id="hidden_column_name" value="id" />
    <input type="hidden" name="hidden_sort_type" id="hidden_sort_type" value="asc" />
    <input type="hidden" name="hidden_sort_type" id="hidden_sort_type" value="asc" />
    <input type="hidden" name="hidden_sort_type" id="hidden_sort_type" value="asc" />
    <input type="hidden" name="hidden_sort_type" id="hidden_sort_type" value="asc" />
    <input type="hidden" name="hidden_sort_type" id="hidden_sort_type" value="asc" />
    <input type="hidden" name="hidden_sort_type" id="hidden_sort_type" value="asc" />
</div>
</div>
</div>


