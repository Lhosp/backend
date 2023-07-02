<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProjetRequest;
use App\Http\Requests\UpdateProjetRequest;
use App\Models\Hotel;
use App\Models\Projet;

class ProjetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projets = Projet::all();
        return response()->json($projets);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $projets = Projet::all();
        return response()->json($projets);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProjetRequest $request)
    {
        $validated = $request->validated();
        $projet = Projet::create($validated);
        return response()->json($projet);
    }

    /**
     * Display the specified resource.
     */
    public function show(Projet $projet)
    {
        $projet = Projet::find($projet->id);
        return response()->json($projet);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Projet $projet)
    {
        $projet = Projet::find($projet->id);
        return response()->json($projet);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProjetRequest $request, Projet $projet)
    {
        $validated = $request->validated();
        $projet = Projet::find($projet->id);
        $projet->update($validated);
        return response()->json($projet);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Projet $projet)
    {
        $projet = Projet::find($projet->id);
        $projet->delete();
        return response()->json($projet);
    }
    public function getLocationByProjet($id)
    {
        $projet = Projet::findById($id);
        $hotels = Hotel::findHotelByProjectId($projet->id);
        $restaurants = Hotel::findHotelRestaurantsByProjectId(($projet->id));
        $data=[
            'projet'=>$projet,
            'hotels'=>$hotels,
            'HotelRestaurants'=>$restaurants,

        ];
        return response()->json($data);
    }
}
