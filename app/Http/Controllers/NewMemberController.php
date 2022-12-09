<?php

namespace App\Http\Controllers;

use App\Models\NewMember;
use Illuminate\Http\Request;

class NewMemberController extends Controller
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
        $newMember = NewMember::all();
        // return view('new-member.index', compact('newMember'));
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
        $newMember = NewMember::create([
            'nama_anak' => $request->nama_anak,
            'nik_anak' => $request->nik_anak,
            'jk' => $request->jk,
            'nama_ortu' => $request->nama_ortu,
            'nik_ortu' => $request->nik_ortu,
            'no_kk' => $request->no_kk,
            'alamat' => $request->alamat
        ]);

        return redirect()->back()->with('status', 'success')->with('new-member', $newMember);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\NewMember  $newMember
     * @return \Illuminate\Http\Response
     */
    public function show(NewMember $newMember)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\NewMember  $newMember
     * @return \Illuminate\Http\Response
     */
    public function edit(NewMember $newMember)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\NewMember  $newMember
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, NewMember $newMember)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\NewMember  $newMember
     * @return \Illuminate\Http\Response
     */
    public function destroy(NewMember $newMember)
    {
        //
    }
}
