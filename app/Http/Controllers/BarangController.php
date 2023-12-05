<?php

namespace App\Http\Controllers;

use App\Models\Assets;
use App\Models\Barang;
use App\Models\User;
use App\Models\JenisBarang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BarangController extends Controller
{
    public function __construct(private $name = 'Barang')
    {
        //
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $barang = Barang::leftJoin('users as pics', 'barangs.id_pic', '=', 'pics.id')
            ->leftJoin('jenis_barang', 'barangs.id_jb', '=', 'jenis_barang.id_jb')
            // ->leftJoin('')
            ->latest('barangs.created_at')
            ->get();

        return view('layout.barang.index', [
            'name' => $this->name,
            'barang' => $barang,
            'jenis' => jenisBarang::all()
        ]);

        // return view('layout.barang.index', compact('barang'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layout.barang.create', [
            'name' => $this->name,
            'user' => User::all(),
            'jenis' => JenisBarang::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $validate = Validator::make(
            $request->all(),
            [
                'barcode' => 'required|size:8',
                'jenis_barang' => 'required',
                'barang' => 'required',
                'harga' => 'required',
                'pic'   => 'required',
            ],

            [
                // 'barcode' => 'barcode harus 8 karakter!',
                'barcode' => 'barcode harus 8 karakter!',


            ]
        );

        if (!$validate->fails()) {

            // $pic = new User();
            // $pic->name = $request->input('pic');
            // $pic->save();
            // $barang = new Barang();
            // $barang->barcode =  $request->barcode;
            // $barang->jenis_barang =  $request->jenis_barang;
            // $barang->barang =  $request->barang;
            // $barang->harga =  $request->harga;
            // $barang->pic   =  $request->pic;
            // $barang->save();

            Barang::create([
                'barcode'     => $request->input('barcode'),
                'barang'   => $request->input('barang'),
                'jumlah'   => $request->input('jumlah'),
                'harga'   => $request->input('harga'),
                'id_pic'   => $request->input('pic'),
                'tersedia' => $request->input('jumlah'),
                'terpinjam' => 0,
                'id_jb' => $request->input('jenis_barang'),
            ]);

            // return response()->json(['data' => $data], 200);
            return redirect('databarang')->with('success', 'Data Berhasil Disimpan!');
        } else {
            return redirect('databarang')->with('failed', $validate->getMessageBag())->withInput();
        }
    }







    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Barang $barang)
    {
        // return view('layout.barang.edit', [
        //     'barang' => $barang->find(request()->segment(2)),
        //     'jenis' => JenisBarang::all(),
        //     'user' => User::all(),
        // ]);

        $data =  [
            'barang' => $barang->find(request()->segment(2)),
            'jenis' => JenisBarang::all(),
            'user' => User::all(),
        ];

        // dd($data);

        return view('layout.barang.edit')->with($data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, String $id)
    {

        $validate = Validator::make(
            $request->all(),
            [
                'barcode' => 'required|min:8',
                'jenis_barang' => 'required',
                'barang' => 'required',
                'harga' => 'required',
                'pic'   => 'required',
            ],

            // [
            //     // 'barcode' => 'barcode harus 8 karakter!',
            //     'pic' => 'pic harus 2 karakter!',
            //     'barcode' => 'barcode harus 8 karakter!',
            // ]
        );
        if (!$validate->fails()) {

            $dataBarang = [
                'barcode'     => $request->input('barcode'),
                'barang'   => $request->input('barang'),
                'jenis_barang'   => $request->input('jenis_barang'),
                'jumlah'   => $request->input('jumlah'),
                'harga'   => $request->input('harga'),
                'id_pic'   => $request->input('pic'),
                'tersedia' => $request->input('jumlah'),
                'terpinjam' => 0
            ];
            // dd($request->all());
            // $dataBarang = Barang::find(request()->segment(2));
            // $sites = Site::find($id);
            Barang::find($id)->update($dataBarang);

            return redirect('databarang')->with('success', 'Data Berhasil Diupdate!');
        } else {
            return redirect('databarang/create')->with('failed', $validate->getMessageBag());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(String $id)
    {
        Barang::destroy($id);
        // Barang::destroy($idd);

        return redirect('databarang')->with('success', 'Data Berhasil Dihapus!');
    }
}
