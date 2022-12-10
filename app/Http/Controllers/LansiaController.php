<?php

namespace App\Http\Controllers;

use App\Models\Lansia;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class LansiaController extends Controller
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
        $lansia = Lansia::all();
        return view('lansia.index', compact('lansia'));
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
        $lansia = Lansia::create([
            'nik' => $request->nik,
            'nama' => $request->nama,
            'tinggi_bdn' => $request->tinggi_bdn,
            'berat_bdn' => $request->berat_bdn,
            'tensi' => $request->tensi,
            'gula_darah' => $request->gula_darah,
            'asam_urat' => $request->asam_urat,
            'alamat' => $request->alamat,
            'kolesterol' => $request->kolesterol
        ]);
        // dd($lansia);
        return redirect()->back()->with('status', 'success')->with('lansia', $lansia);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Lansia  $lansia
     * @return \Illuminate\Http\Response
     */
    public function show(Lansia $lansia)
    {
        $lansia = Lansia::findOrFail($lansia);
        return view('lansia.show', compact('lansia'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Lansia  $lansia
     * @return \Illuminate\Http\Response
     */
    public function edit(Lansia $lansia)
    {
        $lansia = Lansia::findOrFail($lansia);
        return view('lansia.edit', compact('lansia'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Lansia  $lansia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $lansia = Lansia::findOrFail($id)->update([
            'nik' => $request->nik,
            'nama' => $request->nama,
            'tinggi_bdn' => $request->tinggi_bdn,
            'berat_bdn' => $request->berat_bdn,
            'tensi' => $request->tensi,
            'gula_darah' => $request->gula_darah,
            'asam_urat' => $request->asam_urat,
            'alamat' => $request->alamat,
            'kolesterol' => $request->kolesterol
        ]);
        return redirect()->back()->with('status', 'success')->with('lansia', $lansia);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Lansia  $lansia
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $lansia =Lansia::find($id);
        $lansia->delete();
        // dd($lansia);
        return redirect()->back();
    }
}
