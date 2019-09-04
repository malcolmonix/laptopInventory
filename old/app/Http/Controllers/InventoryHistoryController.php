<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Requests\CreateInventoryHistoryRequest;
use App\Http\Requests\UpdateInventoryHistoryRequest;
use App\Repositories\InventoryHistoryRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Models\Equipment;
use App\Models\Situation;
use App\Models\Employee;
use App\Models\Project;



class InventoryHistoryController extends AppBaseController
{
    /** @var  InventoryHistoryRepository */
    private $inventoryHistoryRepository;

    public function __construct(InventoryHistoryRepository $inventoryHistoryRepo)
    {
        $this->inventoryHistoryRepository = $inventoryHistoryRepo;
        $this->middleware('auth');
    }


    /**
     * Display a listing of the InventoryHistory.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->inventoryHistoryRepository->pushCriteria(new RequestCriteria($request));
        //$inventoryHistories = $this->inventoryHistoryRepository->all();
        $inventoryHistories = DB::table('inventory_histories')
                                ->join('equipments','inventory_histories.equipment_id','=','equipments.id' )
                                ->join('situations','inventory_histories.situation_id','=','situations.id' )
                                ->join('projects','inventory_histories.project_id','=','projects.id' )
                                ->join('employees','inventory_histories.employee_id','=','employees.id' )
                                ->join('users','inventory_histories.user_id','=','users.id' )
                                ->select('equipments.name as equipment','employees.name as employee', 'projects.name as project','situations.name as status','inventory_histories.id','inventory_histories.issue_date','inventory_histories.approvedby','inventory_histories.remarks','inventory_histories.created_at','inventory_histories.updated_at','users.name as postedby')
                                ->orderBy('inventory_histories.id','desc')
                                ->get();

        

        return view('inventory_histories.index')
            ->with('inventoryHistories', $inventoryHistories);

    }

    /**
     * Show the form for creating a new InventoryHistory.
     *
     * @return Response
     */
    public function create()
    {
        $equipment = Equipment::pluck('name','id');
        $situation = Situation::pluck('name','id');
        $employee = Employee::pluck('name','id');
        $project = Project::pluck('name','id');

        return view('inventory_histories.create')
            ->with('equipment', $equipment)
            ->with('situation',$situation)
            ->with('project',$project)
            ->with('employee',$employee);
    }

    /**
     * Store a newly created InventoryHistory in storage.
     *
     * @param CreateInventoryHistoryRequest $request
     *
     * @return Response
     */
    public function store(CreateInventoryHistoryRequest $request)
    {
        $input = $request->all();
        $input['user_id'] = auth()->id();

                
        $employeeid = request('employee_id');
        $statusid = request('situation_id');
        $equipmentid = request('equipment_id');
        

   
            $inventoryHistory = $this->inventoryHistoryRepository->create($input);

            $equipment = Equipment::find($equipmentid);
            $equipment->situation_id = $statusid;
            $equipment->save();

            // DB::table('equipments')
            //     ->where('id',$equipmentid)
            //     ->update(['situation_id'=>$statusid, 'user_id'=>$employeeid]);

            
            Flash::success('Inventory saved successfully.');
            return redirect(route('inventoryHistories.index'));
        
    }

    /**
     * Display the specified InventoryHistory.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $inventoryHistory = $this->inventoryHistoryRepository->findWithoutFail($id);

        if (empty($inventoryHistory)) {
            Flash::error('Inventory History not found');

            return redirect(route('inventoryHistories.index'));
        }

        return view('inventory_histories.show')->with('inventoryHistory', $inventoryHistory);
    }

    /**
     * Show the form for editing the specified InventoryHistory.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $inventoryHistory = $this->inventoryHistoryRepository->findWithoutFail($id);
        $equipment = Equipment::pluck('name','id');
        $situation = Situation::pluck('name','id');
        $employee = Employee::pluck('name','id');
        $project = Project::pluck('name','id');

        if (empty($inventoryHistory)) {
            Flash::error('Inventory not found');

            return redirect(route('inventoryHistories.index'));
        }

        return view('inventory_histories.edit')
            ->with('inventoryHistory', $inventoryHistory)
            ->with('equipment', $equipment)
            ->with('situation',$situation)
            ->with('project',$project)
            ->with('employee',$employee);
    }

    /**
     * Update the specified InventoryHistory in storage.
     *
     * @param  int              $id
     * @param UpdateInventoryHistoryRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateInventoryHistoryRequest $request)
    {
        $inventoryHistory = $this->inventoryHistoryRepository->findWithoutFail($id);

        if (empty($inventoryHistory)) {
            Flash::error('Inventory not found');

            return redirect(route('inventoryHistories.index'));
        }

        $inventoryHistory = $this->inventoryHistoryRepository->update($request->all(), $id);

       $equipment = Equipment::find($inventoryHistory->equipment_id);
       $situation = Situation::find($request->situation_id);

       if($situation->name == 'RETURNED') {           
           $sit = Situation::where('name', 'IN-STOCK')->first();           
            $equipment->situation_id = $sit->id;
        } else {
            $equipment->situation_id = $request->situation_id;
        }

       
      
       $equipment->save();


       

        Flash::success('Inventory updated successfully.');

        return redirect(route('inventoryHistories.index'));
    }

    /**
     * Remove the specified InventoryHistory from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $inventoryHistory = $this->inventoryHistoryRepository->findWithoutFail($id);

        if (empty($inventoryHistory)) {
            Flash::error('Inventory not found');

            return redirect(route('inventoryHistories.index'));
        }

        $this->inventoryHistoryRepository->delete($id);

        Flash::success('Inventory deleted successfully.');

        return redirect(route('inventoryHistories.index'));
    }
}
