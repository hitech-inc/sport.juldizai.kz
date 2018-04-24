<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTeammateRequest;
use App\Http\Requests\UpdateTeammateRequest;
use App\Repositories\TeammateRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class TeammateController extends AppBaseController
{
    /** @var  TeammateRepository */
    private $teammateRepository;

    public function __construct(TeammateRepository $teammateRepo)
    {
        $this->teammateRepository = $teammateRepo;
    }

    /**
     * Display a listing of the Teammate.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->teammateRepository->pushCriteria(new RequestCriteria($request));
        $teammates = $this->teammateRepository->all();

        return view('backend.teammates.index')
            ->with('teammates', $teammates);
    }

    /**
     * Show the form for creating a new Teammate.
     *
     * @return Response
     */
    public function create()
    {
        return view('backend.teammates.create');
    }

    /**
     * Store a newly created Teammate in storage.
     *
     * @param CreateTeammateRequest $request
     *
     * @return Response
     */
    public function store(CreateTeammateRequest $request)
    {
        $input = $request->all();

        $teammate = $this->teammateRepository->create($input);

        Flash::success('Teammate saved successfully.');

        return redirect(route('teammates.index'));
    }

    /**
     * Display the specified Teammate.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $teammate = $this->teammateRepository->findWithoutFail($id);

        if (empty($teammate)) {
            Flash::error('Teammate not found');

            return redirect(route('teammates.index'));
        }

        return view('backend.teammates.show')->with('teammate', $teammate);
    }

    /**
     * Show the form for editing the specified Teammate.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $teammate = $this->teammateRepository->findWithoutFail($id);

        if (empty($teammate)) {
            Flash::error('Teammate not found');

            return redirect(route('teammates.index'));
        }

        return view('backend.teammates.edit')->with('teammate', $teammate);
    }

    /**
     * Update the specified Teammate in storage.
     *
     * @param  int              $id
     * @param UpdateTeammateRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTeammateRequest $request)
    {
        $teammate = $this->teammateRepository->findWithoutFail($id);

        if (empty($teammate)) {
            Flash::error('Teammate not found');

            return redirect(route('teammates.index'));
        }

        $teammate = $this->teammateRepository->update($request->all(), $id);

        Flash::success('Teammate updated successfully.');

        return redirect(route('teammates.index'));
    }

    /**
     * Remove the specified Teammate from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $teammate = $this->teammateRepository->findWithoutFail($id);

        if (empty($teammate)) {
            Flash::error('Teammate not found');

            return redirect(route('teammates.index'));
        }

        $this->teammateRepository->delete($id);

        Flash::success('Teammate deleted successfully.');

        return redirect(route('teammates.index'));
    }
}
