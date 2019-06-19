<li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a href="{!! route('users.index') !!}"><i class="fa fa-edit"></i><span>Dashboard</span></a>
</li>
<li class="{{ Request::is('inventoryHistories*') ? 'active' : '' }}">
    <a href="{!! route('inventoryHistories.index') !!}"><i class="fa fa-edit"></i><span>Inventory</span></a>
</li>


<li class="treeview">
<a href="#">
<i class="fa fa-laptop"></i>
<span>Manage</span>
<span class="pull-right-container">
  <i class="fa fa-angle-left pull-right"></i>
</span>
</a>

<ul class="treeview-menu">
<li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a href="{!! route('users.index') !!}"><i class="fa fa-edit"></i><span>Users</span></a>
</li>
<li class="{{ Request::is('employees*') ? 'active' : '' }}">
    <a href="{!! route('employees.index') !!}"><i class="fa fa-edit"></i><span>Employee</span></a>
</li>

<li class="{{ Request::is('equipment*') ? 'active' : '' }}">
    <a href="{!! route('equipment.index') !!}"><i class="fa fa-edit"></i><span>Equipment</span></a>
</li>

<li class="{{ Request::is('equipmentTypes*') ? 'active' : '' }}">
    <a href="{!! route('equipmentTypes.index') !!}"><i class="fa fa-edit"></i><span>Type</span></a>
</li>

<li class="{{ Request::is('projects*') ? 'active' : '' }}">
    <a href="{!! route('projects.index') !!}"><i class="fa fa-edit"></i><span>Project</span></a>
</li>

<li class="{{ Request::is('situations*') ? 'active' : '' }}">
    <a href="{!! route('situations.index') !!}"><i class="fa fa-edit"></i><span>Status</span></a>
</li>

</ul>
</li>



