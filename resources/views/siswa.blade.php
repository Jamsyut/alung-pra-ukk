@extends('layouts.app')
@section('content')
<h1>Daftar Siswa</h1>
<table class="table table-dark table-hover">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Jenis Kelamin</th>
        </tr>
    </thead>
    <tbody>
        @foreach($siswa as $key => $data)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $data['nama'] }}</td>
                <td>{{ $data['alamat'] }}</td>
                <td>{{ $data['jenis_kelamin'] }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection