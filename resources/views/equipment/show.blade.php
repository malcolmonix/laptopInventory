@extends('layouts.app')
@section('title', 'Equipment')
@section('content')
    <section class="content-header">
        <h3 class="header--primary">
            {{ $brand->name }} {{ $equipment->model }} &mdash; <span> {{ $equipment->serialnumber }} &mdash;  {{$equipment->computer_name}}</span>
        </h3>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    {{-- @include('equipment.show_fields') --}}

                    <div class="showblade__details--item">
                            <h3>Equipment Category:</h3>
                        <p><strong>{{ $equipment_type->name }} </strong> </p>                    
                        </div>
                    
                        <div class="showblade__details--item">
                                <h3>Equipment Status:</h3>
                            <p><strong>{{   $situation->name }} </strong>  </p>                   
                            </div>
        


                    <a class="btn btn--primary" href="{!! route('equipment.index') !!}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
