<?php

namespace App\Http\Controllers;

use App\Http\Requests\Createriwayat_pupukRequest;
use App\Http\Requests\Updateriwayat_pupukRequest;
use App\Repositories\riwayat_pupukRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use App\Models\RelationGroup;
use App\Models\riwayat_pupuk;
use App\Models\BlokLahan;

class riwayat_pupukController extends AppBaseController
{
    /** @var  riwayat_pupukRepository */
    private $riwayatPupukRepository;

    public function __construct(riwayat_pupukRepository $riwayatPupukRepo)
    {
        $this->riwayatPupukRepository = $riwayatPupukRepo;
    }

    /**
     * Display a listing of the riwayat_pupuk.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $riwayatPupuks = $this->riwayatPupukRepository->all();
        $nama_kelompok = RelationGroup::all();
        $selected = " ";
        return view('riwayat_pupuks.index', compact('riwayatPupuks','nama_kelompok','selected'));
    }

    public function empPoktan($id) {
        $riwayatPupuks = hasil_panen::where('nama_kelompok', $id)->get();
        $nama_kelompok = RelationGroup::all();
        $selected = RelationGroup::where('id', $id)->get()->first();
        $selected = $selected->id;
        return view('riwayatPupuks.index', compact('riwayatPupuk', 'nama_kelompok', 'selected'));
    }
    /**
     * Show the form for creating a new riwayat_pupuk.
     *
     * @return Response
     */
    public function create() {
        $nama_kelompok = RelationGroup::all()->pluck('nama_kelompok', 'id');
        $blok_lahan = BlokLahan::all()->pluck('nama_blok', 'id');
        $komoditas = BlokLahan::all()->pluck('komoditas', 'id');
        return view('riwayat_pupuks.create', compact('nama_kelompok', 'blok_lahan', 'komoditas'));
    }

    /**
     * Store a newly created riwayat_pupuk in storage.
     *
     * @param Createriwayat_pupukRequest $request
     *
     * @return Response
     */
    public function store(Createriwayat_pupukRequest $request)
    {
        $input = $request->all();

        $riwayatPupuk = $this->riwayatPupukRepository->create($input);

        Flash::success('Riwayat Pupuk saved successfully.');

        return redirect(route('riwayatPupuks.index'));
    }

    /**
     * Display the specified riwayat_pupuk.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $riwayatPupuk = $this->riwayatPupukRepository->find($id);
        $nama_kelompok = RelationGroup::all();
        $blok_lahan = BlokLahan::all();
        $komoditas = BlokLahan::all();
        if (empty($riwayatPupuk)) {
            Flash::error('Riwayat Pupuk not found');

            return redirect(route('riwayatPupuks.index'));
        }

        return view('riwayat_pupuks.show', compact('riwayatPupuk', 'nama_kelompok', 'blok_lahan', 'komoditas'));
    }

    /**
     * Show the form for editing the specified riwayat_pupuk.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $riwayatPupuk = $this->riwayatPupukRepository->find($id);
        $nama_kelompok = RelationGroup::all()->pluck('nama_kelompok', 'id');
        $blok_lahan = BlokLahan::all()->pluck('nama_blok', 'id');
        $komoditas = BlokLahan::all()->pluck('komoditas', 'id');

        if (empty($riwayatPupuk)) {
            Flash::error('Riwayat Pupuk not found');

            return redirect(route('riwayatPupuks.index'));
        }

        return view('riwayat_pupuks.edit', compact ('riwayatPupuk', 'nama_kelompok', 'blok_lahan', 'komoditas'));
    }

    /**
     * Update the specified riwayat_pupuk in storage.
     *
     * @param int $id
     * @param Updateriwayat_pupukRequest $request
     *
     * @return Response
     */
    public function update($id, Updateriwayat_pupukRequest $request)
    {
        $riwayatPupuk = $this->riwayatPupukRepository->find($id);

        if (empty($riwayatPupuk)) {
            Flash::error('Riwayat Pupuk not found');

            return redirect(route('riwayatPupuks.index'));
        }

        $riwayatPupuk = $this->riwayatPupukRepository->update($request->all(), $id);

        Flash::success('Riwayat Pupuk updated successfully.');

        return redirect(route('riwayatPupuks.index'));
    }

    /**
     * Remove the specified riwayat_pupuk from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $riwayatPupuk = $this->riwayatPupukRepository->find($id);

        if (empty($riwayatPupuk)) {
            Flash::error('Riwayat Pupuk not found');

            return redirect(route('riwayatPupuks.index'));
        }

        $this->riwayatPupukRepository->delete($id);

        Flash::success('Riwayat Pupuk deleted successfully.');

        return redirect(route('riwayatPupuks.index'));
    }
}
