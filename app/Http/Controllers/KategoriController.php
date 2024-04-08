<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\DataTables\KategoriDataTable;
use App\Http\Requests\StorePostRequest;
use App\Models\KategoriModel;
use App\Models\UserModel;

class KategoriController extends Controller
{
    public function index (KategoriDataTable $dataTable)
    {
        return $dataTable->render('kategori.index');
    }

    public function create()
    {
        return view('kategori.create');
    }

    // public function store(Request $request): RedirectResponse
    // {
    //     $validation = $request->validate([
    //         'kategori_kode' => 'bail|required|unique:m_kategori|max:255',
    //         'kategori_nama' => 'required',
    //     ]);
    //     return redirect('/kategori');
    // }

    public function store(StorePostRequest $request): RedirectResponse
    {
        // The incoming request is valid...

        // Retrieve the validated input data...
        $validated = $request->validated();

        // Retrieve a portion of the validated input data...
        $validated = $request->safe()->only('kategori_kode', 'kategori_nama');
        $validated = $request->safe()->except('kategori_kode', 'kategori_nama');

        // Store the post...
        return redirect('/kategori');
    }

    public function edit($id)
    {
        $data = KategoriModel::find($id);
        return view('kategori.edit', ['data' => $data]);
    }

    public function update($id, Request $request)
    {
        $kategori= KategoriModel::find($id);

        $kategori->kategori_kode = $request->kategori_kode;
        $kategori->kategori_nama = $request->kategori_nama;

        $kategori->save();
        return redirect('/kategori');
    }

    public function delete($id)
    {
        $data = KategoriModel::find($id);
        $data->delete();
        return redirect('/kategori');
    }
}
