<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateInventoryHistoryRequest;
use App\Http\Requests\UpdateInventoryHistoryRequest;
use App\Repositories\InventoryHistoryRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class InventoryHistoryController extends AppBaseController
{
    /** @var  InventoryHistoryRepository */
    private $inventoryHistoryRepository;

    public function __construct(InventoryHistoryRepository $inventoryHistoryRepo)
    {
        $this->inventoryHistoryRepository = $inventoryHistoryRepo;
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
        $inventoryHistories = $this->inventoryHistoryRepository->all();

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
        return view('inventory_histories.create');
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

        $inventoryHistory = $this->inventoryHistoryRepository->create($input);

        Flash::success('Inventory History saved successfully.');

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

        if (empty($inventoryHistory)) {
            Flash::error('Inventory History not found');

            return redirect(route('inventoryHistories.index'));
        }

        return view('inventory_histories.edit')->with('inventoryHistory', $inventoryHistory);
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
            Flash::error('Inventory History not found');

            return redirect(route('inventoryHistories.index'));
        }

        $inventoryHistory = $this->inventoryHistoryRepository->update($request->all(), $id);

        Flash::success('Inventory History updated successfully.');

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
            Flash::error('Inventory History not found');

            return redirect(route('inventoryHistories.index'));
        }

        $this->inventoryHistoryRepository->delete($id);

        Flash::success('Inventory History deleted successfully.');

        return redirect(route('inventoryHistories.index'));
    }
}
