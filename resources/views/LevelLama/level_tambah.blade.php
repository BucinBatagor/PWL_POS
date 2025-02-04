@extends('layouts.app')

{{-- Customize layout section --}}
@section('subtitle', 'Level')
@section('content_header_title', 'Level')
@section('content_header_subtitle', 'Tambah')

@section('content')
    <div class="container">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Create Level</h3>
            </div>
            <form method="post" action="{{ route('level.store') }}">
                <div class="card-body">
                    {{ @csrf_field() }}
                    <div class="form-group">
                        <div class="form-group">
                            <label for="level_nama">Nama Level</label>
                            <input type="text" class="form-control @error('level_nama') is-invalid @enderror"
                                name="level_nama" placeholder="Masukkan Nama" value="{{ old('level_nama') }}">
                            @error('level_nama')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="level_kode">Level Kode</label>
                            <input type="number" class="form-control @error('level_kode') is-invalid @enderror"
                                name="level_kode" placeholder="Masukkan Level Kode" value="{{ old('level_kode') }}">
                            @error('level_kode')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
@endsection