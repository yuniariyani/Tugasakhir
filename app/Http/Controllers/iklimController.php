<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateiklimRequest;
use App\Http\Requests\UpdateiklimRequest;
use App\Repositories\iklimRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use App\Models\RelationGroup;
use App\Models\iklim;

class iklimController extends AppBaseController
{
    /** @var  iklimRepository */
    private $iklimRepository;

    public function __construct(iklimRepository $iklimRepo)
    {
        $this->iklimRepository = $iklimRepo;
    }

    /**
     * Display a listing of the iklim.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $iklims = $this->iklimRepository->all();
        $poktan = RelationGroup::all();
        $selected = " ";
        return view('iklims.index', compact('iklims', 'poktan', 'selected'));
    }

    public function empPoktan($id)
    {
   
        $iklims = iklim::where('kelompok_tani', $id)->get();
        $poktan = RelationGroup::all();
        $selected = RelationGroup::where('id', $id)->get()->first();
        $selected = $selected->id;
        return view('iklims.index', compact('iklims', 'poktan', 'selected'));
    }


    /**
     * Show the form for creating a new iklim.
     *
     * @return Response
     */
    public function create()
    {
        $kelompok_tani = RelationGroup::all()->pluck('nama_kelompok', 'id');
        return view('iklims.create', compact('kelompok_tani'));

        return view('iklms.create');
    }

    /**
     * Store a newly created iklim in storage.
     *
     * @param CreateiklimRequest $request
     *
     * @return Response
     */
    public function store(CreateiklimRequest $request)
    {
        $input = $request->all();

        $iklim = $this->iklimRepository->create($input);

     

        return redirect(route('iklims.index'));
    }

    /**
     * Display the specified iklim.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $iklim = $this->iklimRepository->find($id);


            

        return view('iklims.show')->with('iklim', $iklim);
    }

    /**
     * Show the form for editing the specified iklim.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $kelompok_tani = RelationGroup::all()->pluck('nama_kelompok', 'id');
        $iklim = $this->iklimRepository->find($id);

        

        
        
        return view('iklims.edit', compact('iklim', 'kelompok_tani'));
    }

    /**
     * Update the specified iklim in storage.
     *
     * @param int $id
     * @param UpdateiklimRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateiklimRequest $request)
    {
        $iklim = $this->iklimRepository->find($id);

        

       

        $iklim = $this->iklimRepository->update($request->all(), $id);

        

        return redirect(route('iklims.index'));
    }

    /**
     * Remove the specified iklim from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $iklim = $this->iklimRepository->find($id);

       

        $this->iklimRepository->delete($id);

       

        return redirect(route('iklims.index'));
    }
}
