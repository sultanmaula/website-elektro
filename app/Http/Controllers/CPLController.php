<?php

namespace App\Http\Controllers;

use App\Models\CPL;
use App\Models\Dosen;
use App\Models\Matkul;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CPLController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cpl = CPL::get();

        return view('cpl.index', [
            'cpl' => $cpl
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cpl.add');
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
            'nama_cpl' => 'required',
            'kode_cpl' => 'required',
            'kategori_cpl' => 'required',
            'atribut_cpl' => 'required',
        ]);

        $cpl = new CPL;
        $cpl->nama = $request->nama_cpl;
        $cpl->kode = $request->kode_cpl;
        $cpl->kategori = $request->kategori_cpl;
        $cpl->atribut = $request->atribut_cpl;
        $cpl->save();

        return redirect()->route('daftar-cpl');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CPL  $cPL
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cpl = CPL::find($id);

        $matkul = Matkul::where('id_cpl', 'like',  '%'.$id.'%')->get();

        foreach ($matkul as $m) {
            $dosen = User::where('id', $m->id_dosen)->first();
            $m->nama_dosen = $dosen->name;
        }

        return view('cpl.show', [
            'cpl' => $cpl,
            'matkul' => $matkul
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CPL  $cPL
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cpl = CPL::find($id);

        return view('cpl.edit', [
            'cpl' => $cpl
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CPL  $cPL
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        date_default_timezone_set("Asia/Jakarta");

        $request->validate([
            'nama_cpl' => 'required',
            'kode_cpl' => 'required',
            'kategori_cpl' => 'required',
            'atribut_cpl' => 'required',
        ]);

        $cpl = CPL::find($id);
        $cpl->nama = $request->nama_cpl;
        $cpl->kode = $request->kode_cpl;
        $cpl->kategori = $request->kategori_cpl;
        $cpl->atribut = $request->atribut_cpl;
        $cpl->save();

        return redirect()->route('daftar-cpl');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CPL  $cPL
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cpl = CPL::find($id);
        $cpl->delete();
    }

    // ==============================================================================================
    // ================================== INDIKATOR CPL =============================================
    // ==============================================================================================

    public function index_indikator()
    {
        $indikator_cpl = DB::table('indikator_cpl')
                        ->select('indikator_cpl.*', 'cpl.kode as kode_cpl')
                        ->leftJoin('cpl', 'cpl.id', 'indikator_cpl.id_cpl')
                        ->get();

        return view('cpl.index_indikator', [
            'indikator_cpl' => $indikator_cpl
        ]);
    }

    public function create_indikator()
    {
        $cpl = CPL::get();

        return view('cpl.add_indikator', [
            'cpl' => $cpl
        ]);
    }

    public function store_indikator(Request $request)
    {
        date_default_timezone_set("Asia/Jakarta");

        $request->validate([
            'indikator_kinerja_cpl' => 'required',
            'kode_indikator_cpl' => 'required',
            'id_cpl' => 'required|numeric',
        ]);

        DB::table('indikator_cpl')->insert([
            'indikator_kinerja' => $request->indikator_kinerja_cpl,
            'kode_indikator' => $request->kode_indikator_cpl,
            'id_cpl' => $request->id_cpl,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        return redirect()->route('daftar-indikator-cpl');
    }

    public function edit_indikator($id)
    {
        $indikator_cpl = DB::table('indikator_cpl')->where('id', $id)->get();
        $cpl = CPL::get();

        return view('cpl.edit_indikator', [
            'indikator_cpl' => $indikator_cpl,
            'cpl' => $cpl
        ]);
    }

    public function update_indikator(Request $request, $id)
    {
        date_default_timezone_set("Asia/Jakarta");

        $request->validate([
            'indikator_kinerja_cpl' => 'required',
            'kode_indikator_cpl' => 'required',
            'id_cpl' => 'required|numeric',
        ]);

        DB::table('indikator_cpl')->where('id', $id)->update([
            'indikator_kinerja' => $request->indikator_kinerja_cpl,
            'kode_indikator' => $request->kode_indikator_cpl,
            'id_cpl' => $request->id_cpl,
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        return redirect()->route('daftar-indikator-cpl');
    }

    public function destroy_indikator($id)
    {
        DB::table('indikator_cpl')->where('id', $id)->delete();
    }

    public function add_matkul($id)
    {
        $cpl = CPL::find($id);
        $matkul = Matkul::whereNull('id_cpl')->orWhere('id_cpl', 'not like', '%'.$id.'%')->orderBy('semester', 'ASC')->get();

        foreach ($matkul as $m) {
            $dosen = User::where('id', $m->id_dosen)->first();
            $m->nama_dosen = $dosen->nama ?? '-';
        }

        return view('cpl.add_matkul', [
            'cpl' => $cpl,
            'matkul' => $matkul
        ]);
    }

    public function store_add_matkul(Request $request, $id)
    {
        date_default_timezone_set("Asia/Jakarta");

        $request->validate([
            'cpl_check' => 'required',
        ]);

        foreach ($request->cpl_check as $c) {
            $matkul = Matkul::find($c);
            $ori = json_decode($matkul->id_cpl);
            $ori[] = $id;
            $matkul->id_cpl = $ori;
            $matkul->save();
        }

        return redirect()->route('add-matkul-cpl', $id);
    }
}
