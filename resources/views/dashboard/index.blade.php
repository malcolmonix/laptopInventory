@extends('layouts.app')
@section('title', 'Dashboard')
@section('content')
    <div class="page-content-wrap">
        <div class="row">
        
        @foreach($equipment as $data)
        <div class="col-md-6 mt-5">
            <div class="widget widget-default widget-item-icon"
                onclick="location.href='{{'#'}}';">
                <div class="widget-item-left">
                    <span class="fa fa-user"></span>
                </div>
                <div class="widget-data">
                    <div class="widget-int num-count">{{ $data->equipmentname }}</div>
                    @foreach($status as $row)
                        @if($row->equipment_type_id == $data->equipment_type_id)
                            <div class="widget-subtitle">Assigned: {{App\Models\Equipment::where('situation_id','1')->where('equipment_type_id',$data->equipment_type_id)->count()}} </div>
                            <div class="widget-subtitle">Instock:  {{App\Models\Equipment::where('situation_id','2')->where('equipment_type_id',$data->equipment_type_id)->count() + App\Models\Equipment::where('situation_id','4')->where('equipment_type_id',$data->equipment_type_id)->count() }} </div>
                            <div class="widget-subtitle">Faulty: {{App\Models\Equipment::where('situation_id','3')->where('equipment_type_id',$data->equipment_type_id)->count()}} </div>
                            <div class="widget-subtitle">Lost: {{App\Models\Equipment::where('situation_id','5')->where('equipment_type_id',$data->equipment_type_id)->count()}} </div>
                            <div class="widget-subtitle">Damage: {{App\Models\Equipment::where('situation_id','6')->where('equipment_type_id',$data->equipment_type_id)->count()}} </div>
                        @endif
                    @endforeach
                   <div class="widget-subtitle">TOTAL: {{ $data->totalequipment }} </div>
                </div>
               <!-- <div class="widget-controls">
                    <a href="#" class="widget-control-right widget-remove" data-toggle="tooltip"
                    data-placement="top" title="Remove Widget"><span class="fa fa-times"></span></a>
                </div>
                -->
            </div>
        </div>
        @endforeach
        </div>
    </div>
    @endsection
