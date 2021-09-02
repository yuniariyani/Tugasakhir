<?php

namespace App\Http\Controllers;

use App\Http\Requests\Createriwayat_penangananRequest;
use App\Http\Requests\Updateriwayat_penangananRequest;
use App\Repositories\riwayat_penangananRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use App\Models\RelationGroup;
use App\Models\BlokLahan;

class riwayat_penangananController extends AppBaseController
{
    /** @var  riwayat_penangananRepository */
    private $riwayatPenangananRepository;

    public function __construct(riwayat_penangananRepository $riwayatPenangananRepo)
    {
        $this->riwayatPenangananRepository = $riwayatPenangananRepo;
    }

    /**
     * Display a listing of the riwayat_penanganan.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $riwayatPenanganans = $this->riwayatPenangananRepository->all();
        $nama_kelompok = RelationGroup::all();
        $selected = " ";
        return view('riwayat_penanganans.index', compact('riwayatPenanganans', 'nama_kelompok', 'selected'));
    }

    /**
     * Show the form for creating a new riwayat_penanganan.
     *
     * @return Response
     */
    public function create()
    {
        $nama_kelompok = RelationGroup::all()->pluck('nama_kelompok', 'id');
        $blok_lahan = BlokLahan::all()->pluck('nama_blok', 'id');
        return view('riwayat_penanganans.create', compact('nama_kelompok', 'blok_lahan'));
    }

    /**
     * Store a newly created riwayat_penanganan in storage.
     *
     * @param Createriwayat_penangananRequest $request
     *
     * @return Response
     */
    public function store(Createriwayat_penangananRequest $request)
    {
        $input = $request->all();

        $riwayatPenanganan = $this->riwayatPenangananRepository->create($input);

        Flash::success('Riwayat Penanganan saved successfully.');

        return redirect(route('riwayatPenanganans.index'));
    }

    /**
     * Display the specified riwayat_penanganan.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $riwayatPenanganan = $this->riwayatPenangananRepository->find($id);
        $nama_kelompok = RelationGroup::all();
        $blok_lahan = BlokLahan::all();

        if (empty($riwayatPenanganan)) {
            Flash::error('Riwayat Penanganan not found');

            return redirect(route('riwayatPenanganans.index'));
        }

        return view('riwayat_penanganans.show', compact('riwayatPenanganan', 'nama_kelompok', 'blok_lahan'));
    }

    /**
     * Show the form for editing the specified riwayat_penanganan.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $riwayatPenanganan = $this->riwayatPenangananRepository->find($id);
        $nama_kelompok = RelationGroup::all()->pluck('nama_kelompok', 'id');
        $blok_lahan = BlokLahan::all()->pluck('nama_blok', 'id');

        if (empty($riwayatPenanganan)) {
            Flash::error('Riwayat Penanganan not found');

            return redirect(route('riwayatPenanganans.index'));
        }

        return view('riwayat_penanganans.edit', compact('riwayatPenanganan', 'nama_kelompok', 'blok_lahan'));
    }

    /**
     * Update the specified riwayat_penanganan in storage.
     *
     * @param int $id
     * @param Updateriwayat_penangananRequest $request
     *
     * @return Response
     */
    public function update($id, Updateriwayat_penangananRequest $request)
    {
        $riwayatPenanganan = $this->riwayatPenangananRepository->find($id);

        if (empty($riwayatPenanganan)) {
            Flash::error('Riwayat Penanganan not found');

            return redirect(route('riwayatPenanganans.index'));
        }

        $riwayatPenanganan = $this->riwayatPenangananRepository->update($request->all(), $id);

        Flash::success('Riwayat Penanganan updated successfully.');

        return redirect(route('riwayatPenanganans.index'));
    }

    /**
     * Remove the specified riwayat_penanganan from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $riwayatPenanganan = $this->riwayatPenangananRepository->find($id);

        if (empty($riwayatPenanganan)) {
            Flash::error('Riwayat Penanganan not found');

            return redirect(route('riwayatPenanganans.index'));
        }

        $this->riwayatPenangananRepository->delete($id);

        Flash::success('Riwayat Penanganan deleted successfully.');

        return redirect(route('riwayatPenanganans.index'));
    }
}
