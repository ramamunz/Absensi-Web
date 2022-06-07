<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    //
    public function index()
    {
        $user = DB::table('users')->select('*')->get();

        return view('admin.user', [
            'title' => 'Manage User'
        ], compact('user'));
    }

    public function tambahPegawai()
    {
        $jabatan = DB::table('jabatans')->select('*')->get();
        $id = DB::table('users')->select('id')->orderBy('id', 'desc')->limit(1)->value('id');

        $lastId = $id + 1;

        return view('admin.tambah-pegawai', [
            'title' => 'Tambahkan Pegawai'
        ], compact('jabatan'))->with('idUser', $lastId);
    }

    public function store(Request $request)
    {
        $nama = $request->input('nama');
        $email = $request->input('email');
        $password = bcrypt($request->input('password'));
        $nip = $request->input('nip');
        $jenisKelamin = $request->input('jenisKelamin');
        $alamat = $request->input('alamat');
        $jabatan = $request->input('jabatan');
        $idUser = $request->input('idUser');
        $noTelp = $request->input('noTelp');


        $user = new User();
        $user->name = $nama;
        $user->email = $email;
        $user->password = $password;
        $user->level = "Pegawai";
        $user->save();

        $pegawai = new Pegawai();
        $pegawai->nip = $nip;
        $pegawai->namaPegawai = $nama;
        $pegawai->jenisKelamin = $jenisKelamin;
        $pegawai->alamat = $alamat;
        $pegawai->noTelp = $noTelp;
        $pegawai->idJabatan = $jabatan;
        $pegawai->iduser = $idUser;
        $pegawai->save();

        return redirect()->intended('/admin');
    }
}
