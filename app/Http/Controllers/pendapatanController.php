<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatependapatanRequest;
use App\Http\Requests\UpdatependapatanRequest;
use App\Repositories\pendapatanRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use app\Http\Controllers\riwayat_pupukController;

class pendapatanController extends AppBaseController
{
    /** @var  pendapatanRepository */
    private $pendapatanRepository;

    public function __construct(pendapatanRepository $pendapatanRepo)
    {
        $this->pendapatanRepository = $pendapatanRepo;
    }

    /**
     * Display a listing of the pendapatan.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $pendapatans = $this->pendapatanRepository->all();

        return view('pendapatans.index')
            ->with('pendapatans', $pendapatans);
    }

    /**
     * Show the form for creating a new pendapatan.
     *
     * @return Response
     */
    public function create()
    {
        return view('pendapatans.create');
    }

    /**
     * Store a newly created pendapatan in storage.
     *
     * @param CreatependapatanRequest $request
     *
     * @return Response
     */
    public function store(CreatependapatanRequest $request)
    {
        $input = $request->all();

        $pendapatan = $this->pendapatanRepository->create($input);

        Flash::success('Pendapatan saved successfully.');

        return redirect(route('pendapatans.index'));
    }

    /**
     * Display the specified pendapatan.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $pendapatan = $this->pendapatanRepository->find($id);

        if (empty($pendapatan)) {
            Flash::error('Pendapatan not found');

            return redirect(route('pendapatans.index'));
        }

        return view('pendapatans.show')->with('pendapatan', $pendapatan);
    }

    /**
     * Show the form for editing the specified pendapatan.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $pendapatan = $this->pendapatanRepository->find($id);

        if (empty($pendapatan)) {
            Flash::error('Pendapatan not found');

            return redirect(route('pendapatans.index'));
        }

        return view('pendapatans.edit')->with('pendapatan', $pendapatan);
    }

    /**
     * Update the specified pendapatan in storage.
     *
     * @param int $id
     * @param UpdatependapatanRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatependapatanRequest $request)
    {
        $pendapatan = $this->pendapatanRepository->find($id);

        if (empty($pendapatan)) {
            Flash::error('Pendapatan not found');

            return redirect(route('pendapatans.index'));
        }

        $pendapatan = $this->pendapatanRepository->update($request->all(), $id);

        Flash::success('Pendapatan updated successfully.');

        return redirect(route('pendapatans.index'));
    }

    /**
     * Remove the specified pendapatan from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $pendapatan = $this->pendapatanRepository->find($id);

        if (empty($pendapatan)) {
            Flash::error('Pendapatan not found');

            return redirect(route('pendapatans.index'));
        }

        $this->pendapatanRepository->delete($id);

        Flash::success('Pendapatan deleted successfully.');

        return redirect(route('pendapatans.index'));
    }
}
