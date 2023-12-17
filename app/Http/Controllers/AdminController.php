<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;

class AdminController extends Controller
{
    public function lihat()
    {
        $data = DB::table('users')->get();

        return view('admin/admin', [
            'judul' => 'Sistem Parkir',
            'data' => $data
        ]);
    }
    public function tambah()
    {
        return view('tambah_user');
    }
    public function add_user(Request $request)
    {
        $user = DB::table('users')->get();
        $password = bcrypt($request->password);
        DB::table('users')->insert([
            'username' => $request->username,
            'password' => $password,
            'name' => $request->nama,
            'alamat' => $request->alamat,
            'no_telp' => $request->nomor,
            'role' => $request->role,
            'kdmall' => $request->kdmall
        ]);
        return redirect('/admin');
    }
    public function delete($id)
    {
        DB::table('users')->where('id', $id)->delete();
        return redirect('/admin');
    }
    public function edit_user($user)
    {
        $data = DB::table('users')->where('id', $user)->get();
        return view('/edit_user', [
            'data' => $data,
            'judul' => 'Edit User',
        ]);
        return redirect('/');
    }
    public function edit_user_aksi(Request $request)
    {
        $password = bcrypt($request->password);
        DB::table('users')->where('username', $request->username)
            ->update([
                'username' => $request->username,
                'password' => $password,
                'name' => $request->nama,
                'alamat' => $request->alamat,
                'no_telp' => $request->nomor,
                'role' => $request->role,
                'kdmall' => $request->kdmall
            ]);
        return redirect('/admin');
    }
}
