<?php

namespace App\Http\Controllers;

use App\Manuscript;
use Illuminate\Http\Request;

class ManuscriptController extends Controller
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
        return view('manuscripts.create')
            ->with('manuscript', (new Manuscript()));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Manuscript  $manuscript
     * @return \Illuminate\Http\Response
     */
    public function show(Manuscript $manuscript)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Manuscript  $manuscript
     * @return \Illuminate\Http\Response
     */
    public function edit(Manuscript $manuscript)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Manuscript  $manuscript
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Manuscript $manuscript)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Manuscript  $manuscript
     * @return \Illuminate\Http\Response
     */
    public function destroy(Manuscript $manuscript)
    {
        //
    }
}
