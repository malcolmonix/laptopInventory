@extends('layouts.app')
@section('title', 'Dashboard')
@section('content')
    <div class="page-content-wrap">

        <!-- START WIDGETS -->
        <div class="row">
            <div class="col-md-3">

                <!-- START WIDGET SLIDER -->
                <div class="widget widget-default widget-carousel dashboard-infobox">
                    <div class="owl-carousel" id="owl-example">
                        <div>
                            <div class="widget-title">Total Equipments</div>
                            <div class="widget-subtitle">{{\Carbon\Carbon::today()->diffForHumans()}}</div>
                            <div class="widget-int">{{App\models\Equipment::count()}}</div>
                        </div>
                        <div>
                            <div class="widget-title">Available Equipments</div>
                            <div class="widget-subtitle">Available to Assign</div>
                            <div class="widget-int">{{App\models\Equipment::where('situation_id','2')->count()}}</div>
                        </div>
                        <div>
                            <div class="widget-title">Assigned</div>
                            <div class="widget-subtitle">Currently Assigned</div>
                            <div class="widget-int">{{App\models\Equipment::where('situation_id','1')->count()}}</div>
                        </div>
                    </div>
                    <div class="widget-controls">
                        {{--<a href="#" class="widget-control-right widget-remove" data-toggle="tooltip"--}}
                        {{--data-placement="top" title="Remove Widget"><span class="fa fa-times"></span></a>--}}
                    </div>
                </div>
                <!-- END WIDGET SLIDER -->

            </div>
            <div class="col-md-3">

                <!-- START WIDGET MESSAGES -->
                <div class="widget widget-default widget-item-icon" onclick="location.href='{{url('admin/tasks')}}';">
                    <div class="widget-item-left">
                        <span class="fa fa-envelope"></span>
                    </div>
                    <div class="widget-data">
                        <div class="widget-int num-count">{{App\models\Employee::where('active','1')->count()}}</div>
                        <div class="widget-title">Employee</div>
                        <div class="widget-subtitle">With your Equipment</div>
                    </div>
                    <div class="widget-controls">
                        <a href="#" class="widget-control-right widget-remove" data-toggle="tooltip"
                           data-placement="top" title="Remove Widget"><span class="fa fa-times"></span></a>
                    </div>
                </div>
                <!-- END WIDGET MESSAGES -->

            </div>
            <div class="col-md-3">

                <!-- START WIDGET REGISTRED -->
                <div class="widget widget-default widget-item-icon"
                     onclick="location.href='{{'#'}}';">
                    <div class="widget-item-left">
                        <span class="fa fa-user"></span>
                    </div>
                    <div class="widget-data">
                        <div class="widget-int num-count">{{App\models\User::where('active',1)->count()}}</div>
                        <div class="widget-title">Registred users</div>
                        <div class="widget-subtitle">Active</div>
                    </div>
                    <div class="widget-controls">
                        <a href="#" class="widget-control-right widget-remove" data-toggle="tooltip"
                           data-placement="top" title="Remove Widget"><span class="fa fa-times"></span></a>
                    </div>
                </div>
                <!-- END WIDGET REGISTRED -->

            </div>
            <div class="col-md-3">

                <!-- START WIDGET CLOCK -->
                <div class="widget widget-danger widget-padding-sm">
                    <div class="widget-big-int plugin-clock">00:00</div>
                    <div class="widget-subtitle plugin-date">Loading...</div>
                    <div class="widget-controls">
                        <a href="#" class="widget-control-right widget-remove" data-toggle="tooltip"
                           data-placement="left" title="Remove Widget"><span class="fa fa-times"></span></a>
                    </div>
                    <!--<div class="widget-buttons widget-c1">
                        <div class="col">
                            <p>Current Time And Date</p>
                        </div>-->
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-responsive table-bordered">
                    <thead>
                    <tr>
                        <th>Sn</th>
                        <th>Employee</th>
                        <th>Name</th>
                        <th>Model</th>
                        <th>Serial Number</th>
                        <th>Type</th>
                        <th>Status</th>
                        
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($equipment as $key => $equipments)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$equipments->employee}}</td>
                            <td>{{$equipments->name}}</td>
                            <td>{{$equipments->model}}</td>
                            <td>{{$equipments->serialnumber}}</td>
                            <td>{{$equipments->equipment_type}}</td>
                            <td>{{$equipments->status}}</td>
                            
                            
                        </tr>
                    @endforeach
                    </tbody>
                </table>
               
            </div>
        </div>
        <!-- END DASHBOARD CHART -->

    </div>
    @endsection
