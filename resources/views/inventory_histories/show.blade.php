@extends('layouts.app')
@section('title', 'Manage Inventory')
@section('content')
    <section class="content-header">
        <h3>
        
            Employee Name: {{ $inventoryHistory->employee . ' ('.  $inventoryHistory->employee_id .')' }}
      
        </h3>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                @include('inventory_histories.show_fields')
                </div>
            </div>
        </div>
    </div>
@endsection
