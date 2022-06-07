@extends('layout.admin-layout')

@section('konten')
<div class="container my-3">
    <h4 class="text-light">Rekap Absensi Hari Ini</h4>
    <table class="table-light p-2" style="width: 100%">
        <thead class="table-dark">
          <tr>
            <th scope="col">NIP</th>
            <th scope="col">Nama Lengkap</th>
            <th scope="col">Jam Absen</th>
            <th scope="col">Keterangan</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($absen as $item)
                <tr>
                    <td>{{ $item->nip }}</td>
                    <td>{{ $item->namaPegawai }}</td>
                    <td>{{ $item->jamAbsen }}</td>
                    <td>{{ $item->keterangan }}</td>
                </tr>
            @endforeach
        </tbody>
      </table>
</div>
@endsection