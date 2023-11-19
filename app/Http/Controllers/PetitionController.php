<?php

namespace App\Http\Controllers;

use App\Http\Resources\PetitionCollection;
use App\Http\Resources\PetitionResource;
use App\Models\Petition;
use Illuminate\Http\Request;

class PetitionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\HTTP\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        return new PetitionCollection(Petition::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return PetitionResource
     */
    public function store(Request $request)
    {
        $petition = Petition::create($request->only([
            'title', 'category', 'description', 'author', 'signees'
        ]));

        return new PetitionResource($petition);
    }

    /**
     * Display the specified resource.
     *
     * @return PetitionResource
     */
    public function show(Petition $petition)
    {
        // return new PetitionResource($petition);
        dd($petition);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Petition $petition)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Petition $petition)
    {
        //
    }
}
