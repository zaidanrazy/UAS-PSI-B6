<?php

namespace App\Http\Controllers;

use App\Models\Peminjaman;
use Illuminate\Http\Request;
use App\Models\Barang;
use Illuminate\Support\Facades\DB;


class LaporanController extends Controller
{

    public function index(Peminjaman $laporan, Request $request)
    {

        if (auth()->user()->is_admin === 'user') {

            $this->authorize('index', $laporan);
        }

        // $laporan = Peminjaman::all();
        // $datee = $request->input('datee');
        // $kembali = $request->input('kembali');
        if ($request->input('start_date') && $request->input('end_date')) {
            $start_date = \Carbon\Carbon::parse($request->input('start_date'))->startOfDay();
            $end_date = \Carbon\Carbon::parse($request->input('end_date'))->endOfDay();

            $laporan = Peminjaman::select('peminjamans.*', 'barangs.*', 'users.name as nama_peminjam', 'barangs.id_pic as id_pic', 'user2.name as nama_pic')
                ->leftJoin('users', 'peminjamans.id_user', '=', 'users.id')
                ->leftJoin('barangs', 'peminjamans.id_barang', '=', 'barangs.id_barang')
                ->leftJoin('users as user2', 'user2.id', '=', 'barangs.id_pic')
                // ->whereBetween('peminjamans.tgl_pinjam', [$datee, $kembali])
                ->whereBetween('peminjamans.tgl_pinjam', [\Carbon\Carbon::parse($request->input('start_date'))->startOfDay(), \Carbon\Carbon::parse($request->input('end_date'))->endOfDay()])
                ->get();

            // $pdf = Peminjaman::loadView('layout.laporan.cetak', compact('laporan'));

            // return $pdf->download('laporan.pdf');

            // $data = [y
            //     'datee' => $datee,
            //     'kembali' => $kembali,
            // ];

            return view('layout.laporan.index', compact('laporan'));
        } else {
            $laporan = Peminjaman::select('peminjamans.*', 'barangs.*', 'users.name as nama_peminjam', 'barangs.id_pic as id_pic', 'user2.name as nama_pic')
                ->leftJoin('users', 'peminjamans.id_user', '=', 'users.id')
                ->leftJoin('barangs', 'peminjamans.id_barang', '=', 'barangs.id_barang')
                ->leftJoin('users as user2', 'user2.id', '=', 'barangs.id_pic')
                ->orderBy('peminjamans.tgl_pinjam', 'desc')
                ->get();

            return view('layout.laporan.index', compact('laporan'));
        }
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
        //
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
