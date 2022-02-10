<?php

namespace App\Http\Controllers;

use App\Models\mostblog2;
use App\Http\Requests\Storemostblog2Request;
use App\Http\Requests\Updatemostblog2Request;

class Mostblog2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        return view('mostblog2', [
            'mostblog2' => Mostblog2::all()
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
     * @param  \App\Http\Requests\Storemostblog2Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storemostblog2Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\mostblog2  $mostblog2
     * @return \Illuminate\Http\Response
     */
    public function show(mostblog2 $mostblog2)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\mostblog2  $mostblog2
     * @return \Illuminate\Http\Response
     */
    public function edit(mostblog2 $mostblog2)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatemostblog2Request  $request
     * @param  \App\Models\mostblog2  $mostblog2
     * @return \Illuminate\Http\Response
     */
    public function update(Updatemostblog2Request $request, mostblog2 $mostblog2)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\mostblog2  $mostblog2
     * @return \Illuminate\Http\Response
     */
    public function destroy(mostblog2 $mostblog2)
    {
        //
    }
}
