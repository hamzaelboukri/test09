<?php

namespace App\Http\Controllers;

use App\Models\articels;
use App\Http\Requests\StorearticelsRequest;
use App\Http\Requests\UpdatearticelsRequest;

class ArticelsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('articels');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorearticelsRequest $request)
    {
        $validatData=$request->validate([

            'titel' => 'required|string|max:255',
            'contnt' => 'required|email|unique:users',
           
        ]);


    }

    /**
     * Display the specified resource.
     */
    public function show(articels $articels)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(articels $articels)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatearticelsRequest $request, articels $articels)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(articels $articels)
    {
        //
    }
}
