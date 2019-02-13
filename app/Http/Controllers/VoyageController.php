<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Voyage;

class VoyageController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $voyagesList = Voyage::all();

        return view('admin.voyage', ['voyages' => $voyagesList]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validateVoyage($request);

        $voyage = Voyage::create([
            'label' => $request->label,
            'country' => $request->country,
            'city' => $request->city,
            'dateStart' => $request->dateStart,
            'dateEnd' => $request->dateEnd,
            'price' => $request->price,
            'picture' => $request->picture,
            'availability' => $request->availability,
            'description' => $request->description,
        ]);

        return redirect(route('voyage.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $voyage = Voyage::find($id);

        return view('admin.edit', ['voyage' => $voyage]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validateVoyage($request);

        $voyage = Voyage::find($id);

        $voyage->fill([
            'label' => $request->label,
            'country' => $request->country,
            'city' => $request->city,
            'dateStart' => $request->dateStart,
            'dateEnd' => $request->dateEnd,
            'price' => $request->price,
            'picture' => $request->picture,
            'availability' => $request->availability,
            'description' => $request->description,
        ]);

        $voyage->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $voyage = Voyage::find($id);
        $voyage->delete();

        return redirect(route('voyage.index'));
    }

    private function validateVoyage($request)
    {
        return Validator::make($request->all(), [
            'label' => 'required|max:255',
            'country' => 'required|max:255',
            'city' => 'required|max:255',
            'dateStart' => 'required|date',
            'dateEnd' => 'required|date',
            'price' => 'required|numeric',
            'picture' => 'required|max:255',
            'availability' => 'required|integer'
        ])->validate();
    }
}
