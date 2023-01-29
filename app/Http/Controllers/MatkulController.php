<?php

namespace App\Http\Controllers;

use App\Models\CPL;
use App\Models\Dosen;
use App\Models\Matkul;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MatkulController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $matkul = Matkul::get();

        return view('matkul.index', [
            'matkul' => $matkul
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dosen = User::role('dosen')->get();
        $cpl = CPL::get();
        $indikator_cpl = DB::table('indikator_cpl')->get();

        return view('matkul.add', [
            'dosen' => $dosen,
            'cpl' => $cpl,
            'indikator_cpl' => $indikator_cpl
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        date_default_timezone_set("Asia/Jakarta");

        $request->validate([
            'nama_matkul' => 'required',
            'sks_matkul' => 'required|numeric',
            'semester_matkul' => 'required|numeric',
            'id_dosen' => 'required|numeric',
            'id_cpl' => 'required',
            'id_indikator_cpl' => 'required'
        ]);

        $matkul = new Matkul;
        $matkul->nama = $request->nama_matkul;
        $matkul->sks = $request->sks_matkul;
        $matkul->semester = $request->semester_matkul;
        $matkul->id_dosen = $request->id_dosen;
        $matkul->keterangan = $request->keterangan_matkul;
        $matkul->id_cpl = json_encode($request->id_cpl);
        $matkul->id_indikator_cpl = json_encode($request->id_indikator_cpl);
        $matkul->cpmk = $request->cpmk;
        $matkul->materi = $request->materi;
        $matkul->save();

        return redirect()->route('daftar-matkul');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Matkul  $matkul
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $matkul = Matkul::find($id);
        $dosen = User::role('dosen')->get();

        // CPL
        if (!empty($matkul->id_cpl)) {
            $id_cpl = json_decode($matkul->id_cpl);
            $cpl = [];
            foreach($id_cpl as $id) {
                $_cpl = CPL::select(array('nama', 'kode'))->where('id', $id)->get();
                $cpl[] = $_cpl;
            }
        } else {
            $cpl = [];
        }
        
        // Indikator CPL
        if (!empty($matkul->id_indikator_cpl)) {
            $id_indikator_cpl = json_decode($matkul->id_indikator_cpl);
            $indikator_cpl = [];
            foreach($id_indikator_cpl as $id) {
                $_indikator_cpl = DB::table('indikator_cpl')->select(array('indikator_kinerja', 'kode_indikator'))->where('id', $id)->get();
                $indikator_cpl[] = $_indikator_cpl;
            }
        } else {
            $indikator_cpl = [];
        }

        return view('matkul.show', [
            'matkul' => $matkul,
            'dosen' => $dosen,
            'cpl' => $cpl,
            'indikator_cpl' => $indikator_cpl
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Matkul  $matkul
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $matkul = Matkul::find($id);
        $dosen = User::role('dosen')->get();
        $cpl = CPL::get();
        $indikator_cpl = DB::table('indikator_cpl')->get();

        return view('matkul.edit', [
            'matkul' => $matkul,
            'dosen' => $dosen,
            'cpl' => $cpl,
            'indikator_cpl' => $indikator_cpl
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Matkul  $matkul
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        date_default_timezone_set("Asia/Jakarta");

        $request->validate([
            'nama_matkul' => 'required',
            'sks_matkul' => 'required|numeric',
            'semester_matkul' => 'required|numeric',
            'id_dosen' => 'required|numeric',
        ]);
        
        $matkul = Matkul::find($id);
        $matkul->nama = $request->nama_matkul;
        $matkul->sks = $request->sks_matkul;
        $matkul->semester = $request->semester_matkul;
        $matkul->id_dosen = $request->id_dosen;
        $matkul->keterangan = $request->keterangan_matkul;
        $matkul->id_cpl = $request->id_cpl;
        $matkul->id_indikator_cpl = $request->id_indikator_cpl;
        $matkul->cpmk = $request->cpmk;
        $matkul->materi = $request->materi;
        $matkul->save();

        return redirect()->route('daftar-matkul');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Matkul  $matkul
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $matkul = Matkul::find($id);
        $matkul->delete();
    }

    public function all_matkul()
    {
        $matkul = Matkul::all();

        return view('matkul.all_matkul', [
            'matkul' => $matkul
        ]);
    }
}
