<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Petugas;

class PetugasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $user=User::all();
        return view('petugas.index',compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('petugas.create');
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
        $data = $request->validate ([
            'username'    => 'required',
            'password'   => 'required',
            'nama_petugas'   => 'required'
        ]);
        User::create([
            'username'     => ($data['username']),
            'password' => bcrypt($data['password']),
            'nama_petugas'   => ($data['nama_petugas']),
            'level'   => 'petugas',
        ]);

        return redirect()->route('petugas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Petugas  $petugas
     * @return \Illuminate\Http\Response
     */
    public function show(Petugas $petugas,User $user)
    {
        //
        $petugas = User::find($user->id);
        return view('petugas.show', compact('petugas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Petugas  $petugas
     * @return \Illuminate\Http\Response
     */
    public function edit(Petugas $petugas, User $user)
    {
        //
        $petugas = User::find($user->id);
        return view('petugas.edit', compact('petugas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Petugas  $petugas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Petugas $petugas, User $user)
    {
        //
        $data = $request->validate ([
            'nama_petugas'    => 'required',
            'username'   => 'required',
            'level'   => 'required'
        ]);
        $petugas = User::find($user->id);
        $petugas->nama_petugas = $request->nama_petugas;
        $petugas->username = $request->username;
        $petugas->level = $request->level;
        $petugas->update();
        return redirect('/petugas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Petugas  $petugas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Petugas $petugas, User $user)
    {
        //
        $petugas = User::find($user->id);
        $petugas->delete();
        return redirect('/petugas');
    }
}
