@section('title', 'Employee')
<div class="table-responsive">
    <table class="table" id="employees-table">
        <thead>
            <tr>
                    <th>Name</th>
                <th>Employee ID#</th>
                <th>Position</th>
                <th>Project</th>
                
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($employees as $employee)
            <tr>
                
            <td>{!! $employee->name !!}</td>
            <td>{!! $employee->employee_id !!}</td>
            <td>{!! $employee->position !!}</td>
            <td>{!! $employee->project->name !!}</td>
              <td>
                    {!! Form::open(['route' => ['employees.destroy', $employee->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('employees.show', [$employee->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('employees.edit', [$employee->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
