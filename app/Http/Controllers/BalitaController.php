<?php

namespace App\Http\Controllers;

use App\Models\Balita;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class BalitaController extends Controller
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
        $balita = Balita::get();
        return view('balita.index', compact('balita'));
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
    public function storeBalita(Request $request)
    {
        //Create by store
        $balita = Balita::create([
            'kk' => $request->kk,
            'nik' => $request->nik,
            'nama' => $request->nama,
            'jk' => $request->jk,
            'tgl_lahir' => $request->tgl_lahir,
            'berat_bdn' => $request->berat_bdn,
            'panjang_bdn' => $request->panjang_bdn,
            'lingkar_lengan' => $request->lingkar_lengan,
            'lingkar_kepala' => $request->lingkar_kepala,
            'kia' => $request->kia,
            'imd' => $request->imd,
            'nm_ortu' => $request->nm_ortu,
            'nik_ortu' => $request->nik_ortu,
            'alamat' => $request->alamat
        ]);

        return redirect()->back()->with('status', 'success')->with('balita', $balita);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Balita  $balita
     * @return \Illuminate\Http\Response
     */
    public function show(Balita $balita)
    {
        $balita = Balita::findOrFail($balita);
        return view('balita.show', compact('balita'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Balita  $balita
     * @return \Illuminate\Http\Response
     */
    public function edit(Balita $balita)
    {
        $balita = Balita::findOrFail($balita);
        return view('balita.edit', compact('balita'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Balita  $balita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Balita $balita)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Balita  $balita
     * @return \Illuminate\Http\Response
     */
    public function destroy(Balita $balita)
    {
        $balita = Balita::findOrFail($balita);
        $balita->delete();
        return redirect()->route('balita.index')
->with('success', 'Data Berhasil dihapus!');
    }
}
