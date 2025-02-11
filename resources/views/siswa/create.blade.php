@extends('layouts.app')
@section('content')
<style>
    .form-control{
        border: 1px solid black;
        padding: 10px;
        margin-bottom: 10px;
        border-radius: 5px;
        width: 100%;
        box-sizing: border-box;
    }
</style>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>My Blog</h1>
                @if (session()->has('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                @if (session()->has('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif

                <form action="{{ route('siswa.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" name="nama" id="nama" class="form-control" value="{{ old('nama') }}">
                    </div>
                    <div class="mb-3">
                        <label for="kelas" class="form-label">Kelas</label>
                        <input type="text" name="kelas" id="kelas" class="form-control" value="{{ old('kelas') }}">
                    </div>
    
                    <div class="mb-3">
                        <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                        <input type="text" name="jenis_kelamin" id="jenis_kelamin" class="form-control" value="{{ old('jenis_kelamin') }}">
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <input type="text" name="alamat" id="alamat" class="form-control" value="{{ old('alamat') }}">
                    </div>

                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>

            </div>
        @endsection
