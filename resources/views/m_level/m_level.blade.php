@extends('adminlte::page')

@section('title', 'Tambah Level')

@section('content_header')
    <h1>Tambah Level</h1>
@stop

@section('content')
    <div class="card-body">
        <form>
            <div class="form-group">
                <label for="level_name">Nama Level</label>
                <input type="text" class="form-control" id="level_name" placeholder="Masukkan nama level">
            </div>
            <div class="form-group">
                <label for="description">Deskripsi</label>
                <textarea class="form-control" id="description" rows="3" placeholder="Masukkan deskripsi"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@stop
