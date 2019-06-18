<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateEquipmentTypeRequest;
use App\Http\Requests\UpdateEquipmentTypeRequest;
use App\Repositories\EquipmentTypeRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class EquipmentTypeController extends AppBaseController
{
    /** @var  EquipmentTypeRepository */
    private $equipmentTypeRepository;

    public function __construct(EquipmentTypeRepository $equipmentTypeRepo)
    {
        $this->equipmentTypeRepository = $equipmentTypeRepo;
    }

    /**
     * Display a listing of the EquipmentType.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->equipmentTypeRepository->pushCriteria(new RequestCriteria($request));
        $equipmentTypes = $this->equipmentTypeRepository->all();

        return view('equipment_types.index')
            ->with('equipmentTypes', $equipmentTypes);
    }

    /**
     * Show the form for creating a new EquipmentType.
     *
     * @return Response
     */
    public function create()
    {
        return view('equipment_types.create');
    }

    /**
     * Store a newly created EquipmentType in storage.
     *
     * @param CreateEquipmentTypeRequest $request
     *
     * @return Response
     */
    public function store(CreateEquipmentTypeRequest $request)
    {
        $input = $request->all();

        $equipmentType = $this->equipmentTypeRepository->create($input);

        Flash::success('Equipment Type saved successfully.');

        return redirect(route('equipmentTypes.index'));
    }

    /**
     * Display the specified EquipmentType.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $equipmentType = $this->equipmentTypeRepository->findWithoutFail($id);

        if (empty($equipmentType)) {
            Flash::error('Equipment Type not found');

            return redirect(route('equipmentTypes.index'));
        }

        return view('equipment_types.show')->with('equipmentType', $equipmentType);
    }

    /**
     * Show the form for editing the specified EquipmentType.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $equipmentType = $this->equipmentTypeRepository->findWithoutFail($id);

        if (empty($equipmentType)) {
            Flash::error('Equipment Type not found');

            return redirect(route('equipmentTypes.index'));
        }

        return view('equipment_types.edit')->with('equipmentType', $equipmentType);
    }

    /**
     * Update the specified EquipmentType in storage.
     *
     * @param  int              $id
     * @param UpdateEquipmentTypeRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEquipmentTypeRequest $request)
    {
        $equipmentType = $this->equipmentTypeRepository->findWithoutFail($id);

        if (empty($equipmentType)) {
            Flash::error('Equipment Type not found');

            return redirect(route('equipmentTypes.index'));
        }

        $equipmentType = $this->equipmentTypeRepository->update($request->all(), $id);

        Flash::success('Equipment Type updated successfully.');

        return redirect(route('equipmentTypes.index'));
    }

    /**
     * Remove the specified EquipmentType from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $equipmentType = $this->equipmentTypeRepository->findWithoutFail($id);

        if (empty($equipmentType)) {
            Flash::error('Equipment Type not found');

            return redirect(route('equipmentTypes.index'));
        }

        $this->equipmentTypeRepository->delete($id);

        Flash::success('Equipment Type deleted successfully.');

        return redirect(route('equipmentTypes.index'));
    }
}
