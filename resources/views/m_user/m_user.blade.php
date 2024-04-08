@extends('adminlte::page')

@section('title', 'Tambah Pengguna')

@section('content_header')
    <h1>Tambah Pengguna</h1>
@stop

@section('content')
    <div class="card-body">
        <form>
            <div class="form-group">
                <label for="name">Nama Pengguna</label>
                <input type="text" class="form-control" id="name" placeholder="Masukkan nama pengguna">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Masukkan email">
            </div>
            <div class="form-group">
                <label for="password">Kata Sandi</label>
                <input type="password" class="form-control" id="password" placeholder="Masukkan kata sandi">
            </div>
            <div class="form-group">
                <label for="level">Level Pengguna</label>
                <select class="form-control" id="level">
                    <option value="">Pilih level pengguna</option>
                    <!-- Populate options from m_level table -->
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@stop
