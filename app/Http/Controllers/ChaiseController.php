<?php

namespace App\Http\Controllers;

use App\Models\Chaise;
use Illuminate\Http\Request;

class ChaiseController extends Controller
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Chaise::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Chaise  $chaise
     * @return \Illuminate\Http\Response
     */
    public function show(Chaise $chaise)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Chaise  $chaise
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Chaise $chaise)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Chaise  $chaise
     * @return \Illuminate\Http\Response
     */
    public function destroy(Chaise $chaise)
    {
        //
    }
}
