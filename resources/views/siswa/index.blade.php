@extends('layouts.app')

@section('content')
<div class="container">
<a href="siswa/create" class="btn btn-primary mt-3 mb-2">Tambah Data</a>
<table class="table table-hover">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Jenis Kelamin</th>
            <th>Alamat</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($siswa as $s)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $s->nama }}</td>
                <td>{{ $s->kelas }}</td>
                <td>{{ $s->jenis_kelamin }}</td>
                <td>{{ $s->alamat }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
</div>
@endsection