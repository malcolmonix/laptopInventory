<li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a href="{!! route('users.index') !!}"><i class="fa fa-edit"></i><span>Users</span></a>
</li>

<li class="{{ Request::is('employees*') ? 'active' : '' }}">
    <a href="{!! route('employees.index') !!}"><i class="fa fa-edit"></i><span>Employees</span></a>
</li>

<li class="{{ Request::is('equipment*') ? 'active' : '' }}">
    <a href="{!! route('equipment.index') !!}"><i class="fa fa-edit"></i><span>Equipment</span></a>
</li>

<li class="{{ Request::is('equipmentTypes*') ? 'active' : '' }}">
    <a href="{!! route('equipmentTypes.index') !!}"><i class="fa fa-edit"></i><span>Equipment Types</span></a>
</li>

<li class="{{ Request::is('projects*') ? 'active' : '' }}">
    <a href="{!! route('projects.index') !!}"><i class="fa fa-edit"></i><span>Projects</span></a>
</li>

<li class="{{ Request::is('situations*') ? 'active' : '' }}">
    <a href="{!! route('situations.index') !!}"><i class="fa fa-edit"></i><span>Situations</span></a>
</li>

<li class="{{ Request::is('inventoryHistories*') ? 'active' : '' }}">
    <a href="{!! route('inventoryHistories.index') !!}"><i class="fa fa-edit"></i><span>Inventory Histories</span></a>
</li>

<li class="{{ Request::is('projects*') ? 'active' : '' }}">
    <a href="{!! route('projects.index') !!}"><i class="fa fa-edit"></i><span>Projects</span></a>
</li>

