<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatemonitoringRequest;
use App\Http\Requests\UpdatemonitoringRequest;
use App\Repositories\monitoringRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use App\Models\RelationGroup;
use App\Models\monitoring;
use App\Models\BlokLahan;

class monitoringController extends AppBaseController
{
    /** @var  monitoringRepository */
    private $monitoringRepository;

    public function __construct(monitoringRepository $monitoringRepo)
    {
        $this->monitoringRepository = $monitoringRepo;
    }

    /**
     * Display a listing of the monitoring.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $jenis = BlokLahan::all();
        $monitorings = $this->monitoringRepository->all();
        $kelompok = RelationGroup::all();
        $selected = " ";
        return view('monitorings.index', compact('monitorings', 'kelompok', 'selected', 'jenis'));
           
    }

    public function empKelompok($id)
    {
   
        $monitorings = monitoring::where('relationgroup_id', $id)->get();
        $kelompok = RelationGroup::all();
        $selected = RelationGroup::where('id', $id)->get()->first();
        $selected = $selected->id;
        return view('monitorings.index', compact('monitorings', 'kelompok', 'selected'));
    }

    /**
     * Show the form for creating a new monitoring.
     *
     * @return Response
     */
    public function create()
    {
        $nama_tanaman = BlokLahan::all()->pluck('komoditas', 'id');
        $poktan = RelationGroup::all()->pluck('nama_kelompok', 'id');

        return view('monitorings.create', compact('poktan', 'nama_tanaman'));
    }

    /**
     * Store a newly created monitoring in storage.
     *
     * @param CreatemonitoringRequest $request
     *
     * @return Response
     */
    public function store(CreatemonitoringRequest $request)
    {
        $input = $request->all();

        $monitoring = $this->monitoringRepository->create($input);

       

        return redirect(route('monitorings.index'));
    }

    /**
     * Display the specified monitoring.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $monitoring = $this->monitoringRepository->find($id);

        

        return view('monitorings.show')->with('monitoring', $monitoring);
    }

    /**
     * Show the form for editing the specified monitoring.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $monitoring = $this->monitoringRepository->find($id);
        $poktan = RelationGroup::all()->pluck('nama_kelompok', 'id');
        $komoditas = BlokLahan::all()->pluck('komoditas', 'id');
      

        return view('monitorings.edit', compact('monitoring', 'poktan', 'komoditas'));
    }

    /**
     * Update the specified monitoring in storage.
     *
     * @param int $id
     * @param UpdatemonitoringRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatemonitoringRequest $request)
    {
        $monitoring = $this->monitoringRepository->find($id);

       

        $monitoring = $this->monitoringRepository->update($request->all(), $id);

        

        return redirect(route('monitorings.index'));
    }

    /**
     * Remove the specified monitoring from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $monitoring = $this->monitoringRepository->find($id);

       
        $this->monitoringRepository->delete($id);

        

        return redirect(route('monitorings.index'));
    }
}
