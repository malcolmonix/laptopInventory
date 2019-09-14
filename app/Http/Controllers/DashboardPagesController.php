<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Equipment;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DashboardPagesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {       
        $equipment = DB::table('equipment_types as et')
                    ->select(array('et.id as equipment_type_id','et.name as equipmentname',DB::raw('COUNT(e.equipment_type_id) as totalequipment')))
                    ->join('equipments as e', 'e.equipment_type_id', '=', 'et.id')
                    ->whereIn('et.id', [1, 2, 3, 4])
                    ->groupBy('et.name','et.id')
                    ->orderby('et.name', 'asc')
                    ->get();

        $status = DB::table('equipment_types as et')
                    ->select('et.id as equipment_type_id')
                    ->whereIn('et.id', [1, 2, 3, 4, 5])
                    ->get();

     
        return view('dashboard.index')
               ->with('status', $status)
               ->with('equipment', $equipment);
    }
}
