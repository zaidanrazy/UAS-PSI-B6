@extends('layout.main')
@section('tes')
    <div class="page-inner">
        <div class="page-title">
            <h3 class="breadcrumb-header">Laporan</h3>
            <div class="page-breadcrumb">
                <ol class="breadcrumb breadcrumb-with-header"></ol>
            </div>
        </div><br>
        <div class="col-lg-12">
            <div class="panel panel-white">
                <div class="panel-body">
                    <form action="" method="get">
                        @csrf
                        <div class="row row-sm mb-3">
                            <div class="col-lg-6 form-group">
                                <input type="date" class="form-control" name="start_date" id="start_date" required
                                    value="{{ old('start_date', request()->start_date) }}">
                                @error('kembali')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="col-lg-6 form-group ">
                                <input type="date" class="form-control" name="end_date" id="end_date" required
                                    value="{{ old('end_date', request()->end_date) }}">
                                @error('end_date')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        {{-- <div class="row row-sm mb-3"> --}}

                        <button type="submit" class="btn btn-sm btn-primary mt-2" title="Submit">GET DATA</button>
                        @if (request()->filled('start_date') && request()->filled('end_date') && count($laporan) > 0)
                            <a href="{{ route('UIO', ['start_date' => request()->start_date, 'end_date' => request()->end_date]) }}"
                                target="__blank" class="btn btn-sm btn-primary mt-2" title="Submit"> PRINT<i
                                    class='bx bx-printer bx-sm fs-3 text-white'></i></a>
                        @endif


                        {{-- <a href="{{ route('layout.pengembalian.cetak', ['start_date' => request()->start_date, 'end_date' => request()->end_date]) }}" class="btn btn-sm btn-primary mt-2" title="Submit">PRINT</a> --}}




                    </form>
                    <br>
                    <table id="example" class="display table" style="width: 100%; cellspacing: 0;">
                        {{-- <table id="zero_config" class="table border table-striped table-bordered text-nowrap"> --}}
                        <thead>
                            <!-- start row -->
                            <tr>
                                <th style="text-align: center;">No</th>
                                <th style="text-align: center;">Barcode</th>
                                <th style="text-align: center;">Barang</th>
                                <th style="text-align: center;">Peminjaman</th>
                                {{-- <th style="text-align: center;">Pic</th> --}}
                                <th style="text-align: center;">Pinjam</th>
                                <th style="text-align: center;">Tgl Pinjam</th>
                                <th style="text-align: center;">Tgl Kembali</th>
                                <th style="text-align: center;">Status</th>


                                <th style="text-align: center;">Gambar Akhir </th>
                                <th style="text-align: center;">Message </th>


                            </tr>
                            <!-- end row -->
                        </thead>
                        <tbody>
                            @php
                                $count = 0; // Inisialisasi variabel penghitung
                            @endphp
                            @foreach ($laporan as $p)
                                @if ($p->status != 'menunggu' && $p->status != 'diterima')
                                    @if (auth()->user()->is_admin === 'admin' || auth()->user()->is_admin === 'pic' || auth()->user()->is_admin === 'user')
                                        <tr>

                                            @php
                                                $count++;
                                            @endphp

                                            <td style="text-align: center; font-size: 14px">{{ $count }}</td>
                                            <td style="text-align: center; font-size: 14px">{{ $p->barcode }}</td>
                                            <td style="text-align: center; font-size: 14px">{{ $p->barang }}</td>
                                            <td style="text-align: center; font-size: 14px">{{ $p->nama_peminjam }}</td>
                                            <td style="text-align: center; font-size: 14px">{{ $p->nama_pic }}</td>
                                            <td style="text-align: center; font-size: 14px">{{ $p->qty_barang }}</td>
                                            <td style="text-align: center;  font-size: 14px">
                                                {{ \Carbon\Carbon::parse($p->tgl_pinjam)->isoFormat('D MMMM YYYY HH:ss') }}
                                            </td>
                                            <td style="text-align: center;  font-size: 14px">
                                                {{ \Carbon\Carbon::parse($p->tgl_kembali_real)->isoFormat('D MMMM YYYY HH:ss') }}
                                            </td>

                                            <td style="text-align: center;">
                                                @if ($p->status == 'selesai')
                                                    <div class="mt-4  text-center"> <button
                                                            style=" padding: 5px 10px; border: none; border-radius: 5px; font-size: small; font-weight: bold; width: 75px;"
                                                            class="btn-sm">Selesai</button>
                                                    </div>
                                                @elseif ($p->status == 'telat')
                                                    <div class="mt-4  text-center"> <button
                                                            style="padding: 5px 10px; border: none; border-radius: 5px; font-size: small; font-weight: bold; width: 75px;"
                                                            class="btn-sm">Terlambat</button>
                                                    </div>
                                                @elseif ($p->status == 'ditolak')
                                                    <div class="mt-4  text-center"> <button
                                                            style="padding: 5px 10px; border: none; border-radius: 5px; font-size: small; width: 60px; font-weight: bold;"
                                                            class="btn-sm">Ditolak
                                                    </div>
                                                @endif
                                            </td>
                                            <td style="text-align: center; font-size: 14px">
                                                @if ($p->image_new != null || $p->image_new != '')
                                                    <img src="{{ asset('storage/' . $p->image_new) }}"
                                                        class="rounded img-fluid img-rounded w-25 h-25"
                                                        style="width: 120px">
                                                @endif
                                            </td>
                                            <td style="text-align: center;  font-size: 14px">{{ $p->mark }}
                                            </td>
                                        </tr>
                                    @endif
                                @endif
                            @endforeach
                        </tbody>
                    </table>



                    </tbody>
                    </table>
                </div>














            </div>
        </div>
    </div>
    </div>
@endsection



{{-- <a href="{{ route('laporan.index') }}" class="btn btn-success">
    <i class="bx bx-printer bx-sm"></i> Cetak
</a> --}}
