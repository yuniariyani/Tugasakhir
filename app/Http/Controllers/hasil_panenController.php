<?php

namespace App\Http\Controllers;

use App\Http\Requests\Createhasil_panenRequest;
use App\Http\Requests\Updatehasil_panenRequest;
use App\Repositories\hasil_panenRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use App\Models\RelationGroup;
use App\Models\hasil_panen;
use App\Models\BlokLahan;

class hasil_panenController extends AppBaseController
{
    /** @var  hasil_panenRepository */
    private $hasilPanenRepository;

    public function __construct(hasil_panenRepository $hasilPanenRepo)
    {
        $this->hasilPanenRepository = $hasilPanenRepo;
    }

    /**
     * Display a listing of the hasil_panen.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $hasilPanens = $this->hasilPanenRepository->all();
        $nama_kelompok = RelationGroup::all();
        $selected = " ";
        return view('hasil_panens.index', compact('hasilPanens','nama_kelompok','selected'));
    }

    public function empPoktan($id) {
        $hasilPanens = hasil_panen::where('nama_kelompok', $id)->get();
        $nama_kelompok = RelationGroup::all();
        $selected = RelationGroup::where('id', $id)->get()->first();
        $selected = $selected->id;
        return view('hasilPanens.index', compact('hasilPanens', 'nama_kelompok', 'selected'));
    }
    /**
     * Show the form for creating a new hasil_panen.
     *
     * @return Response
     */
    public function create() {
        $nama_kelompok = RelationGroup::all()->pluck('nama_kelompok', 'id');
        $blok_lahan = BlokLahan::all()->pluck('nama_blok', 'id');
        $komoditas = BlokLahan::all()->pluck('komoditas', 'id');
        return view('hasil_panens.create', compact('nama_kelompok', 'blok_lahan', 'komoditas'));
    }

    /**
     * Store a newly created hasil_panen in storage.
     *
     * @param Createhasil_panenRequest $request
     *
     * @return Response
     */
    public function store(Createhasil_panenRequest $request)
    {
        $input = $request->all();

        $hasilPanen = $this->hasilPanenRepository->create($input);

        Flash::success('Hasil Panen saved successfully.');

        return redirect(route('hasilPanens.index'));
    }

    /**
     * Display the specified hasil_panen.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $hasilPanen = $this->hasilPanenRepository->find($id);
        $nama_kelompok = RelationGroup::all();
        $blok_lahan = BlokLahan::all();
        $komoditas = BlokLahan::all();
        if (empty($hasilPanen)) {
            Flash::error('Hasil Panen not found');

            return redirect(route('hasilPanens.index'));
        }

        return view('hasil_panens.show', compact('hasilPanen', 'nama_kelompok', 'blok_lahan', 'komoditas'));
    }

    /**
     * Show the form for editing the specified hasil_panen.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $hasilPanen = $this->hasilPanenRepository->find($id);
        $nama_kelompok = RelationGroup::all()->pluck('nama_kelompok', 'id');
        $blok_lahan = BlokLahan::all()->pluck('nama_blok', 'id');
        $komoditas = BlokLahan::all()->pluck('komoditas', 'id');
   
        if (empty($hasilPanen)) {
            Flash::error('Hasil Panen not found');

            return redirect(route('hasilPanens.index'));
        }

        return view('hasil_panens.edit', compact ('hasilPanen', 'nama_kelompok', 'blok_lahan', 'komoditas'));
    }

    /**
     * Update the specified hasil_panen in storage.
     *
     * @param int $id
     * @param Updatehasil_panenRequest $request
     *
     * @return Response
     */
    public function update($id, Updatehasil_panenRequest $request)
    {
        $hasilPanen = $this->hasilPanenRepository->find($id);

        if (empty($hasilPanen)) {
            Flash::error('Hasil Panen not found');

            return redirect(route('hasilPanens.index'));
        }

        $hasilPanen = $this->hasilPanenRepository->update($request->all(), $id);

        Flash::success('Hasil Panen updated successfully.');

        return redirect(route('hasilPanens.index'));
    }

    /**
     * Remove the specified hasil_panen from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $hasilPanen = $this->hasilPanenRepository->find($id);

        if (empty($hasilPanen)) {
            Flash::error('Hasil Panen not found');

            return redirect(route('hasilPanens.index'));
        }

        $this->hasilPanenRepository->delete($id);

        Flash::success('Hasil Panen deleted successfully.');

        return redirect(route('hasilPanens.index'));
    }
}
