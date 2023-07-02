<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEntrepriseRequest;
use App\Http\Requests\UpdateEntrepriseRequest;
use App\Models\Entreprise;

class EntrepriseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $entreprises = Entreprise::all();
        return response()->json($entreprises);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $entreprises = Entreprise::all();
        return response()->json($entreprises);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEntrepriseRequest $request)
    {
        $validated = $request->validated();
        $entreprise = Entreprise::create($validated);
        return response()->json($entreprise);
    }

    /**
     * Display the specified resource.
     */
    public function show(Entreprise $entreprise)
    {
        $entreprise = Entreprise::find($entreprise->id);
        return response()->json($entreprise);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Entreprise $entreprise)
    {
        $entreprise = Entreprise::find($entreprise->id);
        return response()->json($entreprise);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEntrepriseRequest $request, Entreprise $entreprise)
    {
        $validated = $request->validated();
        $entreprise = Entreprise::find($entreprise->id);
        $entreprise->update($validated);
        return response()->json($entreprise);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Entreprise $entreprise)
    {
        $entreprise = Entreprise::find($entreprise->id);
        $entreprise->delete();
        return response()->json($entreprise);
    }
    public function getEntrepriseByUser($id)
    {
        $entreprise = Entreprise::where('user_id', $id)->first();
        return response()->json($entreprise);
    }
    public function getProjectsByEntreprise($id)
    {
        $entreprise = Entreprise::find($id);
        $projects = $entreprise->projets;
        return response()->json($projects);
    }
}
