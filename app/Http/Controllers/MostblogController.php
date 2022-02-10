<?php

namespace App\Http\Controllers;

use App\Models\mostblog;
use App\Http\Requests\StoremostblogRequest;
use App\Http\Requests\UpdatemostblogRequest;

class MostblogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        return view('mostblog', [
            'mostblog' => Mostblog::all()
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
     * @param  \App\Http\Requests\StoremostblogRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoremostblogRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\mostblog  $mostblog
     * @return \Illuminate\Http\Response
     */
    public function show(mostblog $mostblog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\mostblog  $mostblog
     * @return \Illuminate\Http\Response
     */
    public function edit(mostblog $mostblog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatemostblogRequest  $request
     * @param  \App\Models\mostblog  $mostblog
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatemostblogRequest $request, mostblog $mostblog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\mostblog  $mostblog
     * @return \Illuminate\Http\Response
     */
    public function destroy(mostblog $mostblog)
    {
        //
    }
}
