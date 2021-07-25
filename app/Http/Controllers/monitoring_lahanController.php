<?php

namespace App\Http\Controllers;

use App\Http\Requests\Createmonitoring_lahanRequest;
use App\Http\Requests\Updatemonitoring_lahanRequest;
use App\Repositories\monitoring_lahanRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class monitoring_lahanController extends AppBaseController
{
    /** @var  monitoring_lahanRepository */
    private $monitoringLahanRepository;

    public function __construct(monitoring_lahanRepository $monitoringLahanRepo)
    {
        $this->monitoringLahanRepository = $monitoringLahanRepo;
    }

    /**
     * Display a listing of the monitoring_lahan.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $monitoringLahans = $this->monitoringLahanRepository->all();

        return view('monitoring_lahans.index')
            ->with('monitoringLahans', $monitoringLahans);
    }

    /**
     * Show the form for creating a new monitoring_lahan.
     *
     * @return Response
     */
    public function create()
    {
        return view('monitoring_lahans.create');
    }

    /**
     * Store a newly created monitoring_lahan in storage.
     *
     * @param Createmonitoring_lahanRequest $request
     *
     * @return Response
     */
    public function store(Createmonitoring_lahanRequest $request)
    {
        $input = $request->all();

        $monitoringLahan = $this->monitoringLahanRepository->create($input);

        Flash::success('Monitoring Lahan saved successfully.');

        return redirect(route('monitoringLahans.index'));
    }

    /**
     * Display the specified monitoring_lahan.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $monitoringLahan = $this->monitoringLahanRepository->find($id);

        if (empty($monitoringLahan)) {
            Flash::error('Monitoring Lahan not found');

            return redirect(route('monitoringLahans.index'));
        }

        return view('monitoring_lahans.show')->with('monitoringLahan', $monitoringLahan);
    }

    /**
     * Show the form for editing the specified monitoring_lahan.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $monitoringLahan = $this->monitoringLahanRepository->find($id);

        if (empty($monitoringLahan)) {
            Flash::error('Monitoring Lahan not found');

            return redirect(route('monitoringLahans.index'));
        }

        return view('monitoring_lahans.edit')->with('monitoringLahan', $monitoringLahan);
    }

    /**
     * Update the specified monitoring_lahan in storage.
     *
     * @param int $id
     * @param Updatemonitoring_lahanRequest $request
     *
     * @return Response
     */
    public function update($id, Updatemonitoring_lahanRequest $request)
    {
        $monitoringLahan = $this->monitoringLahanRepository->find($id);

        if (empty($monitoringLahan)) {
            Flash::error('Monitoring Lahan not found');

            return redirect(route('monitoringLahans.index'));
        }

        $monitoringLahan = $this->monitoringLahanRepository->update($request->all(), $id);

        Flash::success('Monitoring Lahan updated successfully.');

        return redirect(route('monitoringLahans.index'));
    }

    /**
     * Remove the specified monitoring_lahan from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $monitoringLahan = $this->monitoringLahanRepository->find($id);

        if (empty($monitoringLahan)) {
            Flash::error('Monitoring Lahan not found');

            return redirect(route('monitoringLahans.index'));
        }

        $this->monitoringLahanRepository->delete($id);

        Flash::success('Monitoring Lahan deleted successfully.');

        return redirect(route('monitoringLahans.index'));
    }
}
