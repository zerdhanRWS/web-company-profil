<?php

namespace App\Http\Controllers;

use App\Models\mostblog3;
use App\Http\Requests\Storemostblog3Request;
use App\Http\Requests\Updatemostblog3Request;

class Mostblog3Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        return view('mostblog3', [
            'mostblog3' => Mostblog3::all()
        ]);
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
     * @param  \App\Http\Requests\Storemostblog3Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storemostblog3Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\mostblog3  $mostblog3
     * @return \Illuminate\Http\Response
     */
    public function show(mostblog3 $mostblog3)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\mostblog3  $mostblog3
     * @return \Illuminate\Http\Response
     */
    public function edit(mostblog3 $mostblog3)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatemostblog3Request  $request
     * @param  \App\Models\mostblog3  $mostblog3
     * @return \Illuminate\Http\Response
     */
    public function update(Updatemostblog3Request $request, mostblog3 $mostblog3)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\mostblog3  $mostblog3
     * @return \Illuminate\Http\Response
     */
    public function destroy(mostblog3 $mostblog3)
    {
        //
    }
}
