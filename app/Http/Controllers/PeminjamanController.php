<?php

namespace App\Http\Controllers;

use App\Models\User;

use App\Models\Barang;
use App\Models\Peminjaman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;



class PeminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    // public function laporan()
    // {
    //     $laporan = Peminjaman::all();

    //     $laporan = DB::table('peminjamans')
    //         ->select('peminjamans.*', 'barangs.*', 'users.name as nama_peminjam', 'barangs.id_pic as id_pic', 'user2.name as nama_pic')
    //         ->leftJoin('users', 'peminjamans.id_user', '=', 'users.id')
    //         ->leftJoin('barangs', 'peminjamans.id_barang', '=', 'barangs.id_barang')
    //         ->leftJoin('users as user2', 'user2.id', '=', 'barangs.id_pic')
    //         ->orderBy('peminjamans.created_at', 'desc')
    //         ->get();

    //     return view('layout.laporan.index', [
    //         'laporan' => $laporan,
    //     ]);
    // }



    public function cetak(Request $request)
    {

        // $cetak = Peminjaman::all();
        // $barang = Barang::all();
        // $user = User::all();
        // dd($cetak);

        $start_date = $request->input('start_date');
        $end_date = $request->input('end_date');

        $cetak = DB::table('peminjamans')
            ->select('peminjamans.*', 'barangs.*', 'users.name as nama_peminjam', 'barangs.id_pic as id_pic', 'user2.name as nama_pic')
            ->leftJoin('users', 'peminjamans.id_user', '=', 'users.id')
            ->leftJoin('barangs', 'peminjamans.id_barang', '=', 'barangs.id_barang')
            ->leftJoin('users as user2', 'user2.id', '=', 'barangs.id_pic')
            ->where('peminjamans.created_at', '>=', $start_date)
            ->where('peminjamans.created_at', '<=', $end_date)
            ->orderBy('peminjamans.created_at', 'desc')
            ->get();

        return view('layout.pengembalian.cetak', [
            'cetak' => $cetak,
            'start_date' => $start_date,
            'end_date' => $end_date,
        ]);
    }



    public function index()
    {
        $pinjam = Barang::all();
        $user = User::all();
        // $yuser = Auth::user()->name;

        if (auth()->user()->is_admin === 'admin') {
            $peminjaman = DB::table('peminjamans')
                ->select('peminjamans.*', 'barangs.*', 'users.name as nama_peminjam', 'barangs.id_pic as id_pic', 'user2.name as nama_pic')
                ->leftJoin('users', 'peminjamans.id_user', '=', 'users.id')
                ->leftJoin('barangs', 'peminjamans.id_barang', '=', 'barangs.id_barang')
                ->leftJoin('users as user2', 'user2.id', '=', 'barangs.id_pic')
                ->orderBy('peminjamans.created_at', 'desc')
                ->get();
            // $pendingRequestCount = Peminjaman::where('status', 'menunggu')->count();
        } else {
            $peminjaman = DB::table('peminjamans')
                ->select('peminjamans.*', 'barangs.*', 'users.name as nama_peminjam', 'barangs.id_pic as id_pic', 'user2.name as nama_pic')
                ->leftJoin('users', 'peminjamans.id_user', '=', 'users.id')
                ->leftJoin('barangs', 'peminjamans.id_barang', '=', 'barangs.id_barang')
                ->leftJoin('users as user2', 'user2.id', '=', 'barangs.id_pic')
                ->where('user2.id', '=', auth()->user()->id)
                ->orderBy('peminjamans.created_at', 'desc')
                ->get();
        }



        // ini dari blackbox
        // if (auth()->user()->is_admin === 'admin') {
        //     $peminjaman = DB::table('peminjamans')
        //         ->select('peminjamans.id_barang', DB::raw('sum(peminjamans.qty_barang) as total_qty'), 'barangs.*', 'users.name as nama_peminjam', 'barangs.id_pic as id_pic', 'user2.name as nama_pic')
        //         ->leftJoin('users', 'peminjamans.id_user', '=', 'users.id')
        //         ->leftJoin('barangs', 'peminjamans.id_barang', '=', 'barangs.id_barang')
        //         ->leftJoin('users as user2', 'user2.id', '=', 'barangs.id_pic')
        //         ->groupBy('peminjamans.id_barang', 'barangs.*', 'users.name', 'barangs.id_pic', 'user2.name')
        //         ->orderBy('peminjamans.created_at', 'desc')
        //         ->get();
        // } else {
        //     $peminjaman = DB::table('peminjamans')
        //         ->select('peminjamans.id_barang', DB::raw('sum(peminjamans.qty_barang) as total_qty'), 'barangs.*', 'users.name as nama_peminjam', 'barangs.id_pic as id_pic', 'user2.name as nama_pic')
        //         ->leftJoin('users', 'peminjamans.id_user', '=', 'users.id')
        //         ->leftJoin('barangs', 'peminjamans.id_barang', '=', 'barangs.id_barang')
        //         ->leftJoin('users as user2', 'user2.id', '=', 'barangs.id_pic')
        //         ->where('user2.id', '=', auth()->user()->id)
        //         ->groupBy('peminjamans.id_barang', 'barangs.*', 'users.name', 'barangs.id_pic', 'user2.name')
        //         ->orderBy('peminjamans.created_at', 'desc')
        //         ->get();
        // }


        // } else{

        // $peminjaman = Peminjaman::select('peminjamans.*', 'barangs.*', 'users.name as nama_peminjam', 'barangs.id_pic as id_pic', 'user2.name as nama_pic')
        // ->leftJoin('users', 'peminjamans.id_user', '=', 'users.id')
        // ->leftJoin('barangs', 'peminjamans.id_barang', '=', 'barangs.id_barang')
        // ->leftJoin('users as user2', 'user2.id', '=', 'barangs.id_pic')
        // ->where('peminjamans.id_user', auth()->id())
        // ->orderBy('peminjamans.created_at', 'desc')
        // ->get();

        //}

        // ->where('users.name', $yuser)
        return view('layout.peminjam.index', [

            'peminjaman' => $peminjaman,
            'pinjam' => $pinjam,
            'user' => $user,
            // 'pendingRequestCount' => $pendingRequestCount,
            // 'yuser' => $yuser,

        ]);
    }


    // public function acc(Request $request,  Peminjaman $peminjaman)
    // {
    //     // dd($request->all());

    //     $barang = Barang::where('id_barang', $peminjaman->id_barang)->first();
    //     $jumlah = $barang->jumlah - $request->input('jumlah');

    //     Peminjaman::where('id', $peminjaman->id)->update([
    //         'status' => 'diterima',
    //         'jumlah' => $jumlah,

    //     ]);

    //     // $barang->jumlah -= $request->input('jumlah');
    //     // $barang->save();


    //     return redirect()->back()->with('success', 'Success update data peminjaman!');
    // }

    public function acc(Request $request, $id)
    {
        $peminjaman = Peminjaman::findOrFail($id);
        $barang = Barang::findOrFail($peminjaman->id_barang);
        // dd($peminjaman);
        $sisa = $barang->sisa;
        $jumlah = $peminjaman->qty_barang;

        if ($peminjaman->status === 'menunggu') {
            if ($sisa <= 0) {
                return redirect()->back()->with('failed', 'Stok Tidak Tersedia');
            }

            if ($jumlah > $sisa) {
                return redirect()->back()->with('failed', 'Peminjaman Melebihi Stok');
            }


            $peminjaman->status = 'diterima';
            $peminjaman->save();

            // $barang = Barang::findOrFail($peminjaman->id_barang);
            // $jumlah = $barang->jumlah - $peminjaman->qty_barang;
            // $barang->jumlah = $jumlah;

            // $barang = Barang::findOrFail($peminjaman->id_barang);
            // $sisa = $barang->jumlah - $peminjaman->qty_barang;
            // $barang->sisa = $sisa;
            // $barang->save();
            // dd($sisa);
            return redirect()->back()->with('success', 'Barang Anda Dipinjam!');
        }

        return redirect()->back()->with('error', 'Cannot update data peminjaman. Invalid status!');
    }


    public function refuse(Peminjaman $peminjaman)
    {
        // dd($peminjaman);

        Peminjaman::where('id', $peminjaman->id)->update([
            'status' => 'ditolak'
        ]);

        return redirect()->back()->with('success', 'Berhasil Menolak Peminjaman!');
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
