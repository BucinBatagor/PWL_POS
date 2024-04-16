@extends('layouts.app')

{{-- Customize layout sections --}}
@section('subtitle', 'Kategori')
@section('content_header_title', 'Kategori')
@section('content_header_subtitle', 'Create')

{{-- Content body: main page content --}}
@section('content')
<div class="container">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Buat kategori baru</h3>
        </div>

        <div class="card-body">
            <form method="post" action="{{ route('kategori.store') }}">
                {{ @csrf_field() }}
                <div class="form-group">
                    <label for="kategori_kode">Kode Kategori</label>
                    <input id="kategori_kode" type="text" class="form-control @error('kategori_kode') is-invalid @enderror" name="kategori_kode" placeholder="Masukkan Kode Kategori">
                    @error('kategori_kode')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="namaKategori">Nama Kategori</label>
                    <input type="text" class="form-control" name="kategori_nama" placeholder="Masukkan nama kategori">
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</div>
@endsection
