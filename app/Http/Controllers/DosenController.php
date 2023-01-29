<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function __construct()
    {
        
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dosen = User::role('dosen')->get();

        return view('dosen.index', [
            'dosen' => $dosen
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dosen.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_dosen' => 'required'
        ]);

        $dosen = new User();
        $dosen->name = $request->nama_dosen;
        $dosen->email = $request->email;
        $dosen->password = $request->password;
        $dosen->save();
        $dosen->syncRoles('dosen');

        return redirect()->route('daftar-dosen');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dosen  $dosen
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dosen = User::role('dosen')->find($id);
        return view('dosen.edit', [
            'dosen' => $dosen
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Dosen  $dosen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_dosen' => 'required'
        ]);

        $dosen = User::role('dosen')->find($id);
        $dosen->nama = $request->nama_dosen;
        $dosen->email = $request->email;
        $dosen->password = $request->password;
        $dosen->save();
        $dosen->syncRoles('dosen');

        return redirect()->route('daftar-dosen');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dosen  $dosen
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dosen = User::find($id);
        $dosen->delete();
    }
}
