<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Requests\CreateSituationRequest;
use App\Http\Requests\UpdateSituationRequest;
use App\Repositories\SituationRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use Auth;

class SituationController extends AppBaseController
{
    /** @var  SituationRepository */
    private $situationRepository;

    public function __construct(SituationRepository $situationRepo)
    {
        $this->situationRepository = $situationRepo;
        $this->middleware('auth');
    }

    /**
     * Display a listing of the Situation.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->situationRepository->pushCriteria(new RequestCriteria($request));
        $situations = $this->situationRepository->all();

        return view('situations.index')
            ->with('situations', $situations);
    }

    /**
     * Show the form for creating a new Situation.
     *
     * @return Response
     */
    public function create()
    {
        return view('situations.create');
    }

    /**
     * Store a newly created Situation in storage.
     *
     * @param CreateSituationRequest $request
     *
     * @return Response
     */
    public function store(CreateSituationRequest $request)
    {
        $input = $request->all();
        

        $sta = DB::table('situations')
        ->where('name',request('name'))
        ->where('deleted_at',null)
        ->exists();

        if($sta == false)
        {
            $situation = $this->situationRepository->create($input);

            Flash::success('Status saved successfully.');

            return redirect(route('situations.index'));
        }
        else
        {
            Flash::error('Status already exist');
            return redirect(route('situations.index'));
        }
    }

    /**
     * Display the specified Situation.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $situation = $this->situationRepository->findWithoutFail($id);

        if (empty($situation)) {
            Flash::error('Status not found');

            return redirect(route('situations.index'));
        }

        return view('situations.show')->with('situations', $situation);
    }

    /**
     * Show the form for editing the specified Situation.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $situation = $this->situationRepository->findWithoutFail($id);

        if (empty($situation)) {
            Flash::error('Status not found');

            return redirect(route('situations.index'));
        }

        return view('situations.edit')->with('situation', $situation);
    }

    /**
     * Update the specified Situation in storage.
     *
     * @param  int              $id
     * @param UpdateSituationRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSituationRequest $request)
    {
        $situation = $this->situationRepository->findWithoutFail($id);

        if (empty($situation)) {
            Flash::error('Status not found');

            return redirect(route('situations.index'));
        }

        $situation = $this->situationRepository->update($request->all(), $id);

        Flash::success('Status updated successfully.');

        return redirect(route('situations.index'));
    }

    /**
     * Remove the specified Situation from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $situation = $this->situationRepository->findWithoutFail($id);

        if (empty($situation)) {
            Flash::error('Status not found');

            return redirect(route('situations.index'));
        }

        $this->situationRepository->delete($id);

        Flash::success('Status deleted successfully.');

        return redirect(route('situations.index'));
    }
}
