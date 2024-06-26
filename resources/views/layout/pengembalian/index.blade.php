@extends ('layout.main')
@section('tes')
    <div class="page-inner">
        <div class="page-title">
            <h3 class="breadcrumb-header">Pengembalian </h3>
            <div class="page-breadcrumb">
                <ol class="breadcrumb breadcrumb-with-header">
                </ol>
            </div>
        </div>
        <br>


        <div class="col-md-12 mb-5">
            <div class="panel panel-white mb-5">
                <div class="panel-body mb-auto">
                    <div class="table-responsive">

                        {{-- <div class="col-sm-2 form-group d flex">
                            <select class="js-states form-control" id="tgl_kembali" tabindex="-1"
                                style="display: none; width: 100%">
                                <option selected>-Choose End Date-</option>
                            </select>
                        </div> --}}

                        {{-- <table id="example" class="table table-bordered table-sm mb-3 "> --}}
                        <table id="example" class="display table" style="width: 100%; cellpacing: 0;">
                            <thead>
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
                            </thead>
                            <tbody>
                                @php
                                    $count = 0; // Inisialisasi variabel penghitung
                                @endphp
                                @foreach ($pengembalian as $p)
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
                                                {{-- <td style="text-align: center; font-size: 14px">{{ $p->nama_pic }}</td> --}}
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
                                                                style="background-color: rgb(73, 147, 79); color: white; padding: 5px 10px; border: none; border-radius: 5px; font-size: small; font-weight: bold; width: 75px;"
                                                                class="btn-sm">Selesai</button>
                                                        </div>
                                                    @elseif ($p->status == 'telat')
                                                        <div class="mt-4  text-center"> <button
                                                                style="background-color: rgb(236, 236, 25); color: white; padding: 5px 10px; border: none; border-radius: 5px; font-size: small; font-weight: bold; width: 75px;"
                                                                class="btn-sm">Terlambat</button>
                                                        </div>
                                                    @elseif ($p->status == 'ditolak')
                                                        <div class="mt-4  text-center"> <button
                                                                style="background-color: rgb(255, 64, 0); color: white; padding: 5px 10px; border: none; border-radius: 5px; font-size: small; width: 60px; font-weight: bold;"
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
                    </div>
                </div>

                {{-- {{ $barang->links() }} --}}
            </div>
        </div>
    </div><!-- Row -->
    </div>
@endsection

{{-- <script>
    window.setTimeout(function() {
        window.location.reload();
    }, 100);
</script> --}}
