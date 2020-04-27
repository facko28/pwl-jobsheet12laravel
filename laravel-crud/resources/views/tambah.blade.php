@extends('master')
@section('title', 'Tambah Data')
@section('judul_halaman', 'Tambah Data Mahasiswa')
@section('konten')
<a href="/mahasiswa" class="btn btn-danger">Kembali</a>
<br><br>

                        @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
<form action="/mahasiswa/simpan" method="post">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="namamhs">Nama</label>
        <input type="text" name="nama" class="form-control" value="{{ old('nama')}}">
    </div>
    <div class="form-group">
        <label for="nimmhs">NIM</label>
        <input type="number" name="nim" class="form-control" value="{{ old('nim')}}">
    </div>
    <div class="form-group">
        <label for="emailmhs">E-mail</label>
        <input type="text" name="email" class="form-control" value="{{ old('email')}}">
    </div>
    <div class="form-group">
        <label for="jurusanmhs">Jurusan</label>
        <input type="text" name="jurusan" class="form-control" value="{{ old('jurusan')}}">
    </div>
    <div class="form-group">
        <input class="btn btn-primary" type="submit" value="Tambah">
   </div>
</form>
@endsection