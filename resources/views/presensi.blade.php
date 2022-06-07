@extends('layout.login-layout')

@section('konten')
@if ($isAbsen == 1)
  <div class="container text-center mt-5">
    <div class="card bg-warning text-light">
      <div class="card-body">
        Anda Sudah Melakukan Presensi Hari ini
      </div>
    </div>
  </div>
@else
  @foreach ($pegawai as $item)    
    <div class="form">
      <form action="/absen" method="POST">
        @csrf
          <div class="form-signin m-auto">
              <h1 class="h3 mb-3 fw-bold text-light text-center mb-3">ABSEN</h1>
              <input type="hidden" class="form-control" value="{{ $item->pegawaiId }}" name="id">
              <div class="form-input mb-4">
                  <label class="text-light mb-2"><i class="bi bi-envelope"></i> NIP</label>
                  <input type="text" class="form-control" value="{{ $item->nip }}" id="floatingInput" name="nip" readonly>
              </div>
              <div class="form-input">
                <label class="text-light mb-2"> <i class="bi bi-file-lock2"></i> Nama Pegawai</label>
                <input type="text" class="form-control" id="floatingPassword" value="{{ $item->namaPegawai }}" name="nama" readonly>
              </div>
              <button class="w-100 btn btn-lg btn-primary mt-4" type="submit">Absen</button>
          </div>
        </form>
    </div>
  @endforeach
@endif
@endsection