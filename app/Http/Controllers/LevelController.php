<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LevelController extends Controller
{
    public function index()
    {
        // DB::insert('insert into m_level(level_kode, level_nama, created_at) values(?, ?, ?)', ['CUS', 'Pelanggan', now()]);
        // return 'Insert data baru berhasil';

        // $row = DB::update('update m_level set level_nama = ? where level_kode = ?', ['customer', 'CUS']);
        // return 'Update data berhasil. Jumlah data yang di update: '.$row.' baris';

        // $row = DB::delete('delete from m_level where level_kode = ?', ['CUS']);
        // return 'Delete data berhasil. Jumlah data yang di hapus: '.$row.' baris';
    
        $data = DB::select('select * from m_level');
        return view('level.level', ['data' => $data]);
    }

        public function create()
        {
            return view('level.level_tambah');
        }

        public function store(StorePostRequest $request):RedirectResponse
        {
            $validated = $request->validated();
            $validated = $request->safe()->only('level_kode', 'level_nama');
            $validated = $request->safe()->except('level_kode', 'level_nama');
    
            return redirect('/level'); 
        }

        public function edit($id)
        {
            return 0;
        }
        public function update(Request $request, $id)
        {
            return 0;
        }
        public function delete($id)
        {
            return 0;
        }
}
