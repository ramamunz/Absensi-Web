@extends('layout.admin-layout')

@section('konten')
<div class="container mt-3">
    <a href="/tambah-pegawai" class="btn btn-primary mb-3">Tambahkan Pegawai</a>
    <table class="table-light" style="width: 100%">
        <thead class="table-dark">
          <tr>
            <th scope="col">Username</th>
            <th scope="col">Email</th>
            <th scope="col">Level</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($user as $item)
                <tr>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->email }}</td>
                    <td>{{ $item->level }}</td>
                </tr>
            @endforeach
        </tbody>
      </table>
</div>
@endsection