<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProfilController extends Controller
{
    //
    public function index()
    {
        $pegawai = DB::table('users')
        ->join('pegawais', 'users.id', '=', 'pegawais.idUser')
        ->join('jabatans', 'jabatans.id', '=', 'pegawais.idJabatan')
        ->where('users.id', auth()->user()->id)
        ->select('pegawais.nip', 'users.email', 'pegawais.namaPegawai', 'pegawais.jenisKelamin', 'pegawais.alamat', 'pegawais.noTelp', 'jabatans.nama')
        ->get();

        return view('Profil', [
            'title' => 'Profil'
        ], compact('pegawai'));
    }
}
