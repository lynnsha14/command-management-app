<?php

namespace App\Http\Controllers\Resources;

use App\Http\Requests\StoreSuppliesRequest;
use App\Http\Requests\UpdateSuppliesRequest;
use App\Models\Supply;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SuppliesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSuppliesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Supply  $supply
     * @return \Illuminate\Http\Response
     */
    public function show(Supply $supply)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Supply  $supply
     * @return \Illuminate\Http\Response
     */
    public function edit(Supply $supply)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Supply  $supply
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSuppliesRequest $request, Supply $supply)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Supply  $supply
     * @return \Illuminate\Http\Response
     */
    public function destroy(Supply $supply)
    {
        //
    }

    /**
     * List avec les Approvisonement supprimer
     *
     * @return \Illuminate\Http\Response
     */
    public function listWithSoftDeleted()
    {
        //
    }

    /**
     * Confirmer un Approvisonement
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function confirm(int $id)
    {
        //
    }


}
