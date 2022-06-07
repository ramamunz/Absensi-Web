<?php

namespace App\Http\Controllers;

use App\Models\Absensi;
use App\Http\Requests\StoreAbsensiRequest;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateAbsensiRequest;
use Illuminate\Support\Facades\DB;

class AbsensiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $isAbsen = DB::table('pegawais')
        ->join('absensis', 'absensis.idPegawai', '=', 'pegawais.id')
        ->where('pegawais.idUser', auth()->user()->id)
        ->select(DB::raw(
            "CASE 
            WHEN DATE_FORMAT(absensis.created_at, '%Y-%m-%d') = current_date THEN true
            ELSE false
            END AS existed"
        ))->value('existed');


        $pegawai = DB::table('users')
        ->join('pegawais', 'users.id', '=', 'pegawais.idUser')
        ->join('jabatans', 'jabatans.id', '=', 'pegawais.idJabatan')
        ->where('users.id', auth()->user()->id)
        ->select('pegawais.nip', 'pegawais.id AS pegawaiId', 'users.email', 'pegawais.namaPegawai', 'pegawais.jenisKelamin', 'pegawais.alamat', 'pegawais.noTelp', 'jabatans.nama')
        ->get(); 

        return view('presensi', [
            'title' => 'Presensi'
        ], compact('pegawai'))->with('isAbsen', $isAbsen);
    }

    public function simpan(Request $request)
    {
        $id = $request->input('id');

        $absen = new Absensi();
        $absen->idPegawai = $id;
        $absen->keterangan = 'Hadir';
        $absen->save();

        return redirect()->intended('/presensi');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAbsensiRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Absensi  $absensi
     * @return \Illuminate\Http\Response
     */
    public function show(Absensi $absensi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Absensi  $absensi
     * @return \Illuminate\Http\Response
     */
    public function edit(Absensi $absensi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAbsensiRequest  $request
     * @param  \App\Models\Absensi  $absensi
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAbsensiRequest $request, Absensi $absensi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Absensi  $absensi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Absensi $absensi)
    {
        //
    }
}
