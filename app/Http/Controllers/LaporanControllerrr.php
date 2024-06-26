<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Peminjaman;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function index()
    {
        $laporan = Peminjaman::all();

        $laporan = DB::table('peminjamans')
            ->select('peminjamans.*', 'barangs.*', 'users.name as nama_peminjam', 'barangs.id_pic as id_pic', 'user2.name as nama_pic')
            ->leftJoin('users', 'peminjamans.id_user', '=', 'users.id')
            ->leftJoin('barangs', 'peminjamans.id_barang', '=', 'barangs.id_barang')
            ->leftJoin('users as user2', 'user2.id', '=', 'barangs.id_pic')
            ->orderBy('peminjamans.created_at', 'desc')
            ->get();

        return view('layout.laporan.index', [
            'laporan' => $laporan,
        ]);
    }
}
