<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreClientRequest;
use App\Http\Requests\UpdateClientRequest;
use App\Models\Client;
use App\Models\Projet;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clients = Client::all();
        return response()->json($clients);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $clients = Client::all();
        return response()->json($clients);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreClientRequest $request)
    {
        $validated = $request->validated();
        $client = Client::create($validated);
        return response()->json($client);
    }

    /**
     * Display the specified resource.
     */
    public function show(Client $client)
    {
        $client = Client::find($client->id);
        return response()->json($client);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Client $client)
    {
        $client = Client::find($client->id);
        return response()->json($client);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateClientRequest $request, Client $client)
    {
        $validated = $request->validated();
        $client = Client::find($client->id);
        $client->update($validated);
        return response()->json($client);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Client $client)
    {
        $client = Client::find($client->id);
        $client->delete();
        return response()->json($client);
    }

    //get all projects of a client
    public function getClientProjects(Client $client)
    {
        $client = Client::find($client->id);

        $projects = Projet::getClientProjects($client->id);

        return response()->json($projects);
    }

}
