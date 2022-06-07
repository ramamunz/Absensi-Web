<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RekapController extends Controller
{
    //
    public function index()
    {
        $absen = DB::table('pegawais')
        ->join('absensis', 'absensis.idPegawai', '=', 'pegawais.id')
        ->select('pegawais.nip', 'pegawais.namaPegawai', 'pegawais.created_at AS jamAbsen', DB::raw("
        CASE 
        WHEN DATE_FORMAT(pegawais.created_at, '%H:%i') < DATE_FORMAT('2022-06-07 07:00:00', '%H:%i') THEN 'Hadir'
        ELSE 'Telat'
        END AS keterangan
        "))->get();

        return view('admin.rekap', [
            'title' => 'Rekap Absensi'
        ], compact('absen'));
    }
}
