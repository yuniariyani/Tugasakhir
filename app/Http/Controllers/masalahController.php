<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatemasalahRequest;
use App\Http\Requests\UpdatemasalahRequest;
use App\Repositories\masalahRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use App\Models\RelationGroup;
use App\Models\masalah;
use App\Models\BlokLahan;

class masalahController extends AppBaseController
{
    /** @var  masalahRepository */
    private $masalahRepository;

    public function __construct(masalahRepository $masalahRepo)
    {
        $this->masalahRepository = $masalahRepo;
    }

    /**
     * Display a listing of the masalah.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $masalahs = $this->masalahRepository->all();
        $nama_kelompok = RelationGroup::all();
        $selected = " ";
        return view('masalahs.index', compact('masalahs', 'nama_kelompok', 'selected'));

    }
    public function empMasalah($id)
    {
   
        $masalahs = masalah::where('nama_kelompok', $id)->get();
        $nama_kelompok = RelationGroup::all();
        $selected = RelationGroup::where('id', $id)->get()->first();
        $selected = $selected->id;
        return view('masalahs.index', compact('masalahs', 'nama_kelompok', 'selected'));
    }

    /**
     * Show the form for creating a new masalah.
     *
     * @return Response
     */
    public function create()
    {
        $blok = BlokLahan::all()->pluck('nama_blok', 'id');
        $komoditas = BlokLahan::all()->pluck('komoditas', 'id');

        $nama_kelompok = RelationGroup::all()->pluck('nama_kelompok', 'id');
        return view('masalahs.create', compact('nama_kelompok', 'blok', 'komoditas'));
        
    }

    /**
     * Store a newly created masalah in storage.
     *
     * @param CreatemasalahRequest $request
     *
     * @return Response
     */
    public function store(CreatemasalahRequest $request)
    {
        $input = $request->all();

        $masalah = $this->masalahRepository->create($input);

       

        return redirect(route('masalahs.index'));
    }

    /**
     * Display the specified masalah.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $masalah = $this->masalahRepository->find($id);
        $nama_kelompok = RelationGroup::all();
        $blok = BlokLahan::all();
       
        return view('masalahs.show', compact('masalah', 'nama_kelompok','blok'));
/**tambahkan perkondisian untuk menampilkan nama kelompok masalah  */
    }

    /**
     * Show the form for editing the specified masalah.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {

        $blok = BlokLahan::all()->pluck('nama_blok', 'id');
        $komoditas = BlokLahan::all()->pluck('komoditas', 'id');

        $masalah = $this->masalahRepository->find($id);
        $nama_kelompok = RelationGroup::all()->pluck('nama_kelompok', 'id');
        return view('masalahs.edit', compact('masalah','komoditas', 'nama_kelompok','blok'));

    
    }
    /**
     * Show the form for editing the specified masalah.
     *
     * @param int $id
     *
     * @return Response
     */
    public function solusi($id)
    {

        $blok = BlokLahan::all()->pluck('nama_blok', 'id');
        $komoditas = BlokLahan::all()->pluck('komoditas', 'id');

        $masalah = $this->masalahRepository->find($id);
        $nama_kelompok = RelationGroup::all()->pluck('nama_kelompok', 'id');
        return view('masalahs.solusi', compact('masalah','komoditas', 'nama_kelompok','blok'));

    
    }

    /**
     * Update the specified masalah in storage.
     *
     * @param int $id
     * @param UpdatemasalahRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatemasalahRequest $request)
    {
        $masalah = $this->masalahRepository->find($id);

       

        $masalah = $this->masalahRepository->update($request->all(), $id);

       
        return redirect(route('masalahs.index'));
    }
    /**
     * Update the specified masalah in storage.
     *
     * @param int $id
     * @param UpdatemasalahRequest $request
     *
     * @return Response
     */
    public function update2($id, UpdatemasalahRequest $request)
    {
        $masalah = $this->masalahRepository->find($id);
        $masalah = $this->masalahRepository->update2($request->all(), $id);
       
        return redirect(route('masalahs.solusi'));
    }

    /**
     * Remove the specified masalah from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $masalah = $this->masalahRepository->find($id);

       

        $this->masalahRepository->delete($id);

       

        return redirect(route('masalahs.index'));
    }
}
