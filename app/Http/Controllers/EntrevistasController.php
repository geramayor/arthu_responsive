<?php

namespace App\Http\Controllers;

use App\Models\Entrevistas;
use Illuminate\Http\Request;

class EntrevistasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('entrevista.entrevista');
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Entrevistas  $entrevistas
     * @return \Illuminate\Http\Response
     */
    public function show(Entrevistas $entrevistas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Entrevistas  $entrevistas
     * @return \Illuminate\Http\Response
     */
    public function edit(Entrevistas $entrevistas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Entrevistas  $entrevistas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Entrevistas $entrevistas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Entrevistas  $entrevistas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Entrevistas $entrevistas)
    {
        //
    }
}
