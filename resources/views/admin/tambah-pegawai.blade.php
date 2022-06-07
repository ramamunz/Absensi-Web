@extends('layout.admin-layout')

@section('konten')
    <div class="container">
        <form class="bg-light p-4 rounded" method="POST" action="/tambah-pegawai" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" name="nama" id="nama">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="text" class="form-control" id="password" name="password">
            </div>
            <div class="mb-3">
                <label for="nip" class="form-label">NIP</label>
                <input type="text" class="form-control" id="nip" name="nip">
            </div>
            <div class="mb-3">
                <label for="jenisKelamin" class="form-label">Jenis Kelamin</label>
                <select class="form-select" aria-label="Default select example" name="jenisKelamin" required>
                    <option selected>Pilih Jenis Kelamin</option>
                    <option value="Laki-Laki">Laki-Laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="noTelp" class="form-label">No. Telpon</label>
                <input type="text" class="form-control" id="noTelp" name="noTelp">
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <textarea class="form-control" id="alamat" name="alamat"></textarea>
            </div>
            <div class="mb-3">
                <label for="jabatan" class="form-label">Jabatan</label>
                <select class="form-select" aria-label="Default select example" name="jabatan" required>
                    <option selected>Pilih Jabatan</option>
                    @foreach ($jabatan as $item)
                        <option value="{{ $item->id }}">{{ $item->Nama }}</option>
                    @endforeach
                </select>
            </div>
            <input type="hidden" class="form-control" value="{{ $idUser }}" id="idUser" name="idUser">
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection