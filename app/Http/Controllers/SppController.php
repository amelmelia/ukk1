<?php

namespace App\Http\Controllers;

use App\Models\Spp;
use Illuminate\Http\Request;


class SppController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $spp = Spp::all();
        return view('spp.index', compact('spp'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('spp.create');
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
        $request->validate([
            'tahun'     => 'required|max:4',
            'nominal'   => 'required'
        ],[
            'tahun.required'    => 'Tahun Wajib Di Isi',
            'tahun.max'         => 'Tahun Maximal 4 Digit',
            'nominal.required'  => 'Nominal Wajib Di Isi',
        ]);

        // dd($request);
        Spp::create([
            'tahun'     => $request->tahun,
            'nominal'   => $request->nominal,
        ]);

        return redirect()->route('spp.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Spp  $spp
     * @return \Illuminate\Http\Response
     */
    public function show(Spp $spp)
    {
        //
        $spps = Spp::find($spp->id);
        return view('spp.show', compact('spps'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Spp  $spp
     * @return \Illuminate\Http\Response
     */
    public function edit(Spp $spp)
    {
        //
        $spps = Spp::find($spp->id);
        return view('spp.edit', compact('spps'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Spp  $spp
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Spp $spp)
    {
        //
        $request->validate([
            'tahun' => 'required',
            'nominal' => 'required',
        ]);
        $spps = Spp::find($spp->id);
        $spps->tahun = $request->tahun;
        $spps->nominal = $request->nominal;
        $spps->update();
        return redirect('/spp');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Spp  $spp
     * @return \Illuminate\Http\Response
     */
    public function destroy(Spp $spp)
    {
        //
        $spps = Spp::find($spp->id);
        $spps->delete();
        return redirect('/spp');
    }
}