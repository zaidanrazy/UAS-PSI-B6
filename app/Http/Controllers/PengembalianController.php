<?php

namespace App\Http\Controllers;

use App\Models\Peminjaman;
use Illuminate\Http\Request;
use App\Models\Barang;
use App\Models\User;
use Illuminate\Support\Facades\DB;



class PengembalianController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pengembalian = Peminjaman::all();
        $barang = Barang::all();
        $user = User::all();


        if (auth()->user()->id == 1) {
            $pengembalian = DB::table('peminjamans')
                ->select('peminjamans.*', 'barangs.*', 'users.name as nama_peminjam', 'barangs.id_pic as id_pic', 'user2.name as nama_pic')
                ->leftJoin('users', 'peminjamans.id_user', '=', 'users.id')
                ->leftJoin('barangs', 'peminjamans.id_barang', '=', 'barangs.id_barang')
                ->leftJoin('users as user2', 'user2.id', '=', 'barangs.id_pic')
                ->orderBy('peminjamans.created_at', 'desc')
                ->get();
            // $pendingRequestCount = Peminjaman::where('status', 'menunggu')->count();
        } elseif (auth()->user()->is_admin === 'pic') {

            $pengembalian = DB::table('peminjamans')
                ->select('peminjamans.*', 'barangs.*', 'users.name as nama_peminjam', 'barangs.id_pic as id_pic', 'user2.name as nama_pic')
                ->leftJoin('users', 'peminjamans.id_user', '=', 'users.id')
                ->leftJoin('barangs', 'peminjamans.id_barang', '=', 'barangs.id_barang')
                ->leftJoin('users as user2', 'user2.id', '=', 'barangs.id_pic')
                ->where('user2.id', '=', auth()->user()->id)
                ->where('status', '=', 'selesai')
                ->orderBy('peminjamans.created_at', 'desc')
                ->get();
        } elseif (auth()->user()->is_admin === 'user') {

            $pengembalian = DB::table('peminjamans')
                ->select('peminjamans.*', 'barangs.*', 'users.name as nama_peminjam', 'barangs.id_pic as id_pic', 'user2.name as nama_pic')
                ->leftJoin('users', 'peminjamans.id_user', '=', 'users.id')
                ->leftJoin('barangs', 'peminjamans.id_barang', '=', 'barangs.id_barang')
                ->leftJoin('users as user2', 'user2.id', '=', 'barangs.id_pic')
                ->where('peminjamans.id_user', '=', auth()->id())
                ->where('status', '=', 'selesai')
                ->orderBy('peminjamans.created_at', 'desc')
                ->get();
        }

        return view('layout.pengembalian.index', [
            'pengembalian' => $pengembalian,
            'barang' => $barang,
            'user' => $user,
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Peminjaman $peminjaman)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Peminjaman $peminjaman)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Peminjaman $peminjaman)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Peminjaman $peminjaman)
    {
        //
    }
}
