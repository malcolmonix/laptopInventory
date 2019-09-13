@extends('layouts.app')
@section('title', 'Equipment')
@section('content')
    <section class="content-header">
        <h1>
            Device Information for {{ $brand->name }} {{ $equipment->name }} 
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    @include('equipment.show_fields')
                    <a href="{!! route('equipment.index') !!}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
