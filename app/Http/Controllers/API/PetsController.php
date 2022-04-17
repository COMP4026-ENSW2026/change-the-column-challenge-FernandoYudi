<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Pet;
use Illuminate\Http\Request;

class PetsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Pet::all();
    }

    public function create(Request $request)
    {
        // $attributes = request()->validate([
        $request->validate([
            'name' => 'required|min:2|max:20|Alpha-dash|unique:pets, name',
            'specie' => 'required|min:2|max:20|regex:/^[A-Z][a-zA-Z0-9_-]+$',
            'color' => 'required|min:2|max:20|regex:/^[A-Z][a-zA-Z0-9_-]+$',
            'size' => 'required|max:2',
        ]);

        // $pet = Pet::create($attributes);
        $pet = Pet::create([
            'name' => $request['name'],
            'specie' => $request['specie'],
            'color' => $request['color'],
            'size' => $request['size'],
        ]);

        return $pet;
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePetRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $attributes = request()->validate([
            'name' => 'required|min:2|max:20|regex:/^[A-Z][a-zA-Z0-9_-]+$|unique:pets, name',
            'specie' => 'required|min:2|max:20|regex:/^[A-Z][a-zA-Z0-9_-]+$',
            'color' => 'required|min:2|max:20|regex:/^[A-Z][a-zA-Z0-9_-]+$',
            'size' => 'required|max:2',
        ]);

        $pet = Pet::create($attributes);
        // $pet = Pet::create([
        //     'name' => $request['name'],
        //     'specie' => $request['specie'],
        //     'color' => $request['color'],
        //     'size' => $request['size'],
        // ]);

        return $pet;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pet  $pet
     * @return \Illuminate\Http\Response
     */
    public function show(Pet $pet)
    {
        return $pet;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Models\Pet  $pet
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pet $pet)
    {
        $request->validate([
            'name' => 'required',
            'specie' => 'required',
            'color' => 'required',
            'size' => 'required|max:2',
        ]);

        $pet->update([
            'name' => $request['name'],
            'specie' => $request['specie'],
            'color' => $request['color'],
            'size' => $request['size'],
        ]);

        return $pet;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pet  $pet
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pet $pet)
    {
        $pet->delete();
    }
}
