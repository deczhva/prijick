<?php

namespace App\Http\Controllers;

use App\Models\VitaminA;
use Illuminate\Http\Request;

class VitaminAController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vitaminA = VitaminA::all();
        return view('vitamin.index', compact('vitaminA'));
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
        $vitaminA = VitaminA::create([
            
        ]);

        return redirect()->back()->with('status', 'success')->with('vitamin', $vitaminA);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\VitaminA  $vitaminA
     * @return \Illuminate\Http\Response
     */
    public function show(VitaminA $vitaminA)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\VitaminA  $vitaminA
     * @return \Illuminate\Http\Response
     */
    public function edit(VitaminA $vitaminA)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\VitaminA  $vitaminA
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, VitaminA $vitaminA)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\VitaminA  $vitaminA
     * @return \Illuminate\Http\Response
     */
    public function destroy(VitaminA $vitaminA)
    {
        //
    }
}
