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
        $equipment = DB::table('equipments as e')
                    ->join('situations as s','e.situation_id','=','s.id' )
                    ->join('equipment_types as et','e.equipment_type_id','=','et.id' )
                    ->leftjoin('employees as em','e.user_id','=','em.id')
                    ->leftjoin('projects as p','e.project_id','=','p.id')
                    ->select('e.name as name','em.name as employee','e.model','e.serialnumber','e.comment','e.id','et.name as equipment_type','s.name as status','e.deleted_at','e.created_at','e.updated_at','p.name as project')
                    ->orderBy('e.name','asc')->paginate(20);

        return view('dashboard.index')
               ->with('equipment', $equipment);
    }
}
