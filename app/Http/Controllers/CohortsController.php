<?php

namespace App\Http\Controllers;

use App\DataTables\CohortsDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateCohortsRequest;
use App\Http\Requests\UpdateCohortsRequest;
use App\Repositories\CohortsRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class CohortsController extends AppBaseController
{
    /** @var  CohortsRepository */
    private $cohortsRepository;

    public function __construct(CohortsRepository $cohortsRepo)
    {
        $this->cohortsRepository = $cohortsRepo;
    }

    /**
     * Display a listing of the Cohorts.
     *
     * @param CohortsDataTable $cohortsDataTable
     * @return Response
     */
    public function index(CohortsDataTable $cohortsDataTable)
    {
        return $cohortsDataTable->render('cohorts.index');
    }

    /**
     * Show the form for creating a new Cohorts.
     *
     * @return Response
     */
    public function create()
    {
        return view('cohorts.create');
    }

    /**
     * Store a newly created Cohorts in storage.
     *
     * @param CreateCohortsRequest $request
     *
     * @return Response
     */
    public function store(CreateCohortsRequest $request)
    {
        $input = $request->all();

        $cohorts = $this->cohortsRepository->create($input);

        Flash::success('Cohorts saved successfully.');

        return redirect(route('cohorts.index'));
    }

    /**
     * Display the specified Cohorts.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $cohorts = $this->cohortsRepository->find($id);

        if (empty($cohorts)) {
            Flash::error('Cohorts not found');

            return redirect(route('cohorts.index'));
        }

        return view('cohorts.show')->with('cohorts', $cohorts);
    }

    /**
     * Show the form for editing the specified Cohorts.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $cohorts = $this->cohortsRepository->find($id);

        if (empty($cohorts)) {
            Flash::error('Cohorts not found');

            return redirect(route('cohorts.index'));
        }

        return view('cohorts.edit')->with('cohorts', $cohorts);
    }

    /**
     * Update the specified Cohorts in storage.
     *
     * @param  int              $id
     * @param UpdateCohortsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCohortsRequest $request)
    {
        $cohorts = $this->cohortsRepository->find($id);

        if (empty($cohorts)) {
            Flash::error('Cohorts not found');

            return redirect(route('cohorts.index'));
        }

        $cohorts = $this->cohortsRepository->update($request->all(), $id);

        Flash::success('Cohorts updated successfully.');

        return redirect(route('cohorts.index'));
    }

    /**
     * Remove the specified Cohorts from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $cohorts = $this->cohortsRepository->find($id);

        if (empty($cohorts)) {
            Flash::error('Cohorts not found');

            return redirect(route('cohorts.index'));
        }

        $this->cohortsRepository->delete($id);

        Flash::success('Cohorts deleted successfully.');

        return redirect(route('cohorts.index'));
    }
}
