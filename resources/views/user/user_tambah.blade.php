@extends('layouts.app')

{{-- Customize layout section --}}
@section('subtitle', 'User')
@section('content_header_title', 'User')
@section('content_header_subtitle', 'Tambah')

@section('content')
    <div class="container">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Create User</h3>
            </div>
            <form method="post" action="{{ route('user.tambah_simpan') }}">
                <div class="card-body">
                    {{ @csrf_field() }}
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama"
                            placeholder="Masukkan Nama">
                        @error('nama')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="level_id">Level ID</label>
                        <input type="number" class="form-control @error('level_id') is-invalid @enderror" name="level_id"
                            placeholder="Masukkan Level ID">
                        @error('level_id')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control @error('username') is-invalid @enderror" name="username"
                            placeholder="Masukkan Username">
                        @error('username')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password"
                            placeholder="Masukkan Password">
                        @error('password')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
@endsection

{{-- <body>
    <h1>Form Tambah Data User</h1>
    <a href="{{ route('/user') }}">Kembali</a>
    <form method="POST" action="{{ route('/user/tambah_simpan') }}">
        {{ csrf_field() }}
        <label>Username</label>
        <input type="text" name="username" placeholder="Masukkan Username">
        <br>
        <label >Nama</label>
        <input type="text" name="nama" placeholder="Masukkan Nama">
        <br>
        <label >Password</label>
        <input type="password" name="password" placeholder="Masukkan Password">
        <br>
        <label >Level ID</label>
        <input type="number" name="level_id" >
        <br>
        <input type="submit" name="btn btn-success" value="Simpan">
    </form>
</body> --}}