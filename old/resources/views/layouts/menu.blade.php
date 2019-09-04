<li class="{{ Request::is('dashboard*') ? 'active' : '' }}">
    <a href="{!! route('dashboard.index') !!}"><i class="fa fa-building"></i><span>Dashboard</span></a>
</li>

<li class="{{ Request::is('inventoryHistories*') ? 'active' : '' }}">
    <a href="{!! route('inventoryHistories.index') !!}"><i class="fa fa-edit"></i><span>Manage Inventory</span></a>
</li>

{{-- Managers only --}}
@if (Auth::user()->role_id < 3)
<li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a href="{!! route('users.index') !!}"><i class="fa fa-user"></i><span>App Users</span></a>
</li>
@endif

<li class="{{ Request::is('employees*') ? 'active' : '' }}">
    <a href="{!! route('employees.index') !!}"><i class="fa fa-user"></i><span>Employee</span></a>
</li>

<li class="{{ Request::is('equipment*') ? 'active' : '' }}">
    <a href="{!! route('equipment.index') !!}"><i class="fa fa-gear"></i><span>Equipment</span></a>
</li>



{{-- Admin only --}}
@if (Auth::user()->role_id == 1)

<li class="treeview">
<a href="#">
<i class="fa fa-laptop"></i>
<span>Manage</span>
<span class="pull-right-container">
  <i class="fa fa-angle-left pull-right"></i>
</span>
</a>

<ul class="treeview-menu">


<li class="{{ Request::is('equipmentTypes*') ? 'active' : '' }}">
    <a href="{!! route('equipmentTypes.index') !!}"><i class="fa fa-info-circle"></i><span>Type</span></a>
</li>

<li class="{{ Request::is('projects*') ? 'active' : '' }}">
    <a href="{!! route('projects.index') !!}"><i class="fa fa-database"></i><span>Project</span></a>
</li>

<li class="{{ Request::is('situations*') ? 'active' : '' }}">
    <a href="{!! route('situations.index') !!}"><i class="fa fa-bullseye"></i><span>Status</span></a>
</li>


<li class="{{ Request::is('roles*') ? 'active' : '' }}">
    <a href="{!! route('roles.index') !!}"><i class="fa fa-certificate"></i><span>Roles</span></a>
</li>


<li class="{{ Request::is('brands*') ? 'active' : '' }}">
    <a href="{!! route('brands.index') !!}"><i class="fa fa-laptop"></i><span>Brands</span></a>
</li>

</ul>
</li>

@endif 


<li class="{{ Request::is('logout*') ? 'active' : '' }}">
    <a href="{!! url('/logout') !!}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-power-off"></i>
      <span>Sign out</span> </a>
    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>
</li>