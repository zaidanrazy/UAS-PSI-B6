<?php

namespace App\Http\Controllers;

use App\Models\JenisBarang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class JenisBarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $jenis = jenisBarang::all();
        return view('layout.jenis.index', [
            'jenis' => $jenis
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layout.jenis.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $validate = validator::make(
            $request->all(),
            [
                'jenisbarangg' => 'required',
            ],
        );

        if (!$validate->fails()) {

            JenisBarang::create([
                'jenis_barang' => $request->input('jenisbarangg')
            ]);

            return redirect('databarang')->with('success', 'Data Berhasil Disimpan!');
        } else {
            return redirect('databarang')->with('failed', 'Masukan Data Yang Benar!');
        }
    }


    /**
     * Display the specified resource.
     */
    public function show(JenisBarang $JenisBarang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(JenisBarang $JenisBarang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, JenisBarang $JenisBarang)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(String $id)
    {
        JenisBarang::destroy($id);

        return redirect('jenisBarang')->with('success', 'Data Berhasil Dihapus!');
    }
}
