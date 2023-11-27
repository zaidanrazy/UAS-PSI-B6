<?php

namespace App\Http\Controllers;


use App\Models\User;
use App\Models\Barang;
use App\Models\Peminjaman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;


class PinjamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    }

    //     @php
    //     $total_stock = (int) $b->jumlah;
    //     $qty_peminjaman = (int) \App\Models\Peminjaman::where('id_barang', $b->id_barang)
    //         ->where('status', 'diterima')
    //         ->sum('qty_barang');
    //     $sisa = $total_stock - $qty_peminjaman;

    //     //save
    //     $barang = \App\Models\Barang::findOrFail($b->id_barang);
    //     $barang->sisa = $sisa;
    //     $barang->save();
    // @endphp


    public function kembalikan(Request $request, $id)
    {
        $image_new = '';
        $pinjam = Peminjaman::findOrFail($id);
        $barang = Barang::where('id_barang', $pinjam->id_barang)->first();
        // dd($barang);


        if ($pinjam->status === 'diterima') {
            $pinjam->status = 'selesai';
            $pinjam->tgl_kembali_real = now();
            $pinjam->mark = $request->message;
            $pinjam->image_new = $request->image_new;

            if ($request->hasFile('image_new')) {
                $image_new   = $request->file('image_new')->store('pinjam');
                $pinjam->image_new = $image_new;
            }

            // Peminjaman::create([


            //     'image_new'     => $request->image_new ? $image_new->hashName() : '',
            // ]);




            // $pinjam->save();

            // $barang = Barang::findOrFail($barang->id);
            // $pinjam = Peminjaman::findOrFail($pinjam->id_barang);
            $barang->sisa += $pinjam->qty_barang;
            $barang->save();
            $pinjam->save();

            return redirect()->back()->with('success', 'Barang berhasil dikembalikan');
        } else {
            return redirect()->back()->with('error', 'Tidak dapat mengembalikan barang. Status tidak valid.');
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $yuser = Auth::user()->name;
        $pinjam = Barang::all();
        $user = User::all();
        $peminjaman = Peminjaman::where('id_user', auth()->id())->get();


        $peminjaman = Peminjaman::select('peminjamans.*', 'barangs.*', 'users.name as nama_peminjam', 'barangs.id_pic as id_pic', 'user2.name as nama_pic')
            ->leftJoin('users', 'peminjamans.id_user', '=', 'users.id')
            ->leftJoin('barangs', 'peminjamans.id_barang', '=', 'barangs.id_barang')
            ->leftJoin('users as user2', 'user2.id', '=', 'barangs.id_pic')
            ->where('peminjamans.id_user', auth()->id())
            ->get();
        // ->latest('peminjamans.created_at')
        return view('layout.pinjam.index', [

            'peminjaman' => $peminjaman,
            'pinjam' => $pinjam,
            'user' => $user,
            'yuser' => $yuser,
        ]);
    }

    public function store(Request $request)
    {
        $image = '';
        $sisa_barang = '';
        $validate = Validator::make(
            $request->all(),
            [
                'user' => 'required',
                'barang' => 'required',
                'jumlah' => 'required',
                'kembali' => 'required',
                'image'     => 'image',
            ]
        );

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $image = $request->file('image');
            $image->storeAs('pinjam', $image->hashName());
            $validatedData['image'] = $image->hashName();
        }

        if (!$validate->fails()) {
            //baru
            $barang = Barang::find($request->input('barang'));

            if ($request->input('jumlah') > $barang->jumlah) {
                $validate->errors()->add('failed', 'Stok tidak tersedia');
                return redirect()->back()->withErrors($validate)->withInput();
            }

            // ini juga $sisa_barang = $barang->jumlah - $request->input('jumlah');
            //baru
            // $peminjaman = Peminjaman::all();

            $id_pic = $barang->id_pic;

            Peminjaman::create([
                'id_user'     => $request->input('user'),
                'id_pic' => $id_pic,
                'id_barang'   => $request->input('barang'),
                'qty_barang'   => $request->input('jumlah'),
                'tgl_pinjam' => \Carbon\Carbon::now(),
                'tgl_kembali' => $request->input('kembali'),
                'status' => 'menunggu', // 'menunggu'
                'sisa_barang' => $sisa_barang,

                'image'     => $request->image ? $image->hashName() : '',
            ]);


            //    ini juga dipake $barang->jumlah -= $request->input('jumlah');
            //     $barang->save();


            // $user = User::find($request->input('user'));



            // if ($user->hasis_admin)

            // return response()->json(['data' => $dat  a], 200);
            return back()->with('success', 'Data Berhasil Diajukan!');
        } else {
            return redirect('pinjam.create')->with('failed', $validate->getMessageBag())->withInput();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}


// //contohstoreuploadgambar
// public function store(Request $request)
//     {
//         try {
//             $validate = Validator::make($request->all(), [
//                 'img_ordinal' => 'required',
//                 'img_page' => 'required',
//                 'img_desc' => 'required',

//             ]);
//             if (!$validate->fails()) {
//                 $imagelibrary = new ImageLibrary;
//                 $imagelibrary->img_ordinal = $request->img_ordinal;
//                 $imagelibrary->img_page = $request->img_page;
//                 $imagelibrary->img_desc = $request->img_desc;
//                 $imagelibrary->img_name = $request->file('img_name')->storeAs('images',strtolower($request->img_page). $request->file('img_name')->hashName(). \Carbon\Carbon::parse(now())->format('dMY') .'.'. $request->file('img_name')->getClientOriginalExtension());
//                 // return dd($imagelibrary);
//                 $imagelibrary->save();
//                 return redirect('imagelibrary')->with([
//                     'status' => 'success',
//                     'message' => 'Data saved!'
//                 ]);
//             } else {
//                 return back()->with([
//                     'status' => 'failed',
//                     'message' => $validate->errors()->all()
//                 ])->withInput();
//             }
//         } catch (\Throwable $th) {
//             return back()->with([
//                 'status' => 'failed',
//                 'message' => $th->getMessage()
//             ])->withInput();
//         }
//     }


//ada isi


        // $peminjaman = Peminjaman::leftJoin('barangs', 'peminjamans.id_barang', '=', 'barangs.id_barang')
        //     ->leftJoin('users', 'peminjamans.id_user', '=', 'users.id')
        //     ->where('users.name', $yuser)
        //     ->latest('peminjamans.created_at')
        //     ->get();

        // return view('layout.pinjam.index', [

        //     'peminjaman' => $peminjaman,
        //     'pinjam' => $pinjam,
        //     'user' => $user,
        //     'yuser' => $yuser,
        // ]);