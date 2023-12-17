<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;
use Carbon\Carbon;


class KendaraanController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function testing()
    {
        $data = DB::table('kendaraan')
            ->where('status', NULL)
            ->get();
        return view('petugas/masuk', [
            'judul' => 'Petugas Masuk',
        ]);
    }

    public function index()
    {
        //
        $data = DB::table('kendaraan')
            ->where('status', NULL)
            ->get();


        return view('petugas.ruang', [
            'data' => $data,
            'judul' => 'Petugas Ruang'
        ]);
    }

    public function lihatkeluar()
    {
        $data = DB::table('kendaraan')
            ->where('status', "Parkir")
            ->get();
        return view('petugas.keluar', [
            'data' => $data,
            'judul' => 'Petugas Keluar'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $tanggal_sekarang = Carbon::now('Asia/Jakarta');
        DB::table('kendaraan')->insert([
            'plat_nomor' => $request->plat_no,
            'tanggal_masuk' => $tanggal_sekarang->toDateString(),
            'jam_masuk' => $tanggal_sekarang->toTimeString(),
            'id_lantai' => 0
        ]);

        $msg = 'Berhasil Ditambahkan';


        DB::table('laporan')->insert([
            'plat_nomor' => $request->plat_no,
            'tanggal_masuk' => $tanggal_sekarang->toDateString(),
            'jam_masuk' => $tanggal_sekarang->toTimeString(),
            'id_lantai' => 0
        ]);

        return redirect('/petugas-masuk')->with('error', $msg);
    }
    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $status = "Parkir";

        DB::table('kendaraan')
            ->where('plat_nomor', $request->plat_nomor)
            ->update([
                'plat_nomor' => $request->plat_nomor,
                'lantai' => $request->lantai,
                'nama_ruang' => $request->ruang,
                'status' => $status,
            ]);



        // $status_ruang = "Penuh";
        // DB::table('ruang')
        //     ->where('id_ruang', $request->ruang)
        //     ->update([
        //         'status' => $status_ruang,
        //     ]);

        $status = "Parkir";
        DB::table('laporan')
            ->where('plat_nomor', $request->plat_nomor)
            ->update([
                'plat_nomor' => $request->plat_nomor,
                'lantai' => $request->lantai,
                'nama_ruang' => $request->ruang,
                'status' => $status,
            ]);
        $msg = 'Berhasil Parkir';
        return redirect('/kendaraan')->with('error', $msg);
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //z
        DB::table('kendaraan')
            ->where('plat_nomor', $id)
            ->delete();

        $status = "Keluar";
        $biaya = 10000;
        $tanggal_sekarang = Carbon::now('Asia/Jakarta');
        DB::table('laporan')
            ->where('plat_nomor', $id)
            ->update([
                'status' => $status,
                'tanggal_keluar' => $tanggal_sekarang->toDateString(),
                'jam_keluar' => $tanggal_sekarang->toTimeString(),
                'biaya' => $biaya,
            ]);

        $msg = 'Berhasil Keluar';
        return redirect('/lihatkeluar')->with('error', $msg);
    }
}
