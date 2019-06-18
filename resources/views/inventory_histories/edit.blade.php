@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Inventory History
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($inventoryHistory, ['route' => ['inventoryHistories.update', $inventoryHistory->id], 'method' => 'patch']) !!}

                        @include('inventory_histories.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection