<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Models\UserModel;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $user = UserModel::with('level')->get();
        // dd($user);
        return view('user.user', ['data' => $user]);
    }

    public function tambah()
    {
        return view('user.user_tambah');
    }

    public function tambah_simpan(StorePostRequest $request): RedirectResponse
    {
        $validated = $request->validated();
        $validated = $request->safe()->only('username', 'nama', 'password', 'level_id');
        $validated = $request->safe()->except('username', 'nama', 'password', 'level_id');
        return redirect('/user');
    }

    public function ubah($id)
    {
        $user = UserModel::find($id);
        return view('user.user_ubah', ['data' => $user]);
    }

    public function ubah_simpan($id, Request $request)
    {
        $user = UserModel::find($id);

        $user->username = $request->username;
        $user->nama = $request->nama;
        $user->level_id = $request->level_id;

        $user->save();

        return redirect('/user');
    }

    public function hapus($id)
    {
        $user = UserModel::find($id);
        $user->delete();

        return redirect('/user');
    }
}
