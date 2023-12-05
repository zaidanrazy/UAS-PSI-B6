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
                {{-- <div class="panel-heading clearfix mb-1">
                    <h4 class="panel-title">Data Barang</h4>
                    <div class="d-flex">
                        <a href="{{ route('user.create') }}" class="btn btn-primary">
                            <i class="far fa-plus"></i> Tambah User
                        </a>
                    </div>
                </div> --}}


                <div class="panel-body mb-auto">
                    <div class="table-responsive">
                        <table id="example" class="table table-bordered table-sm mb-3 ">
                            <thead>
                                <tr>
                                    <th style="text-align: center;">No</th>
                                    <th style="text-align: center;">Barcode</th>
                                    <th style="text-align: center;">Barang</th>
                                    <th style="text-align: center;">Peminjaman</th>
                                    <th style="text-align: center;">Pic</th>
                                    <th style="text-align: center;">Jumlah Pinjam</th>
                                    <th style="text-align: center;">Tgl Pinjam</th>
                                    <th style="text-align: center;">Tgl Kembali</th>
                                    <th style="text-align: center;">Gambar Akhir </th>
                                    <th style="text-align: center;">Message </th>



                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pengembalian as $p)
                                    <tr>
                                        <td style="text-align: center;">{{ $loop->iteration }}</td>
                                        <td style="text-align: center;">{{ $p->barcode }}</td>
                                        <td style="text-align: center;">{{ $p->barang }}</td>
                                        <td style="text-align: center;">{{ $p->nama_peminjam }}</td>
                                        <td style="text-align: center;">{{ $p->nama_pic }}</td>
                                        <td style="text-align: center;">{{ $p->qty_barang }}</td>
                                        <td style="text-align: center">
                                            {{ \Carbon\Carbon::parse($p->tgl_pinjam)->isoFormat('D MMMM YYYY HH:ss') }}
                                        </td>
                                        <td style="text-align: center">
                                            {{ \Carbon\Carbon::parse($p->tgl_kembali_real)->isoFormat('D MMMM YYYY HH:ss') }}
                                        </td>
                                        <td style="text-align: center;">
                                            @if ($p->image_new != null || $p->image_new != '')
                                                <img src="{{ asset('storage/' . $p->image_new) }}"
                                                    class="rounded img-fluid img-rounded w-25 h-25" style="width: 120px">
                                            @endif


                                        </td>
                                        <td style="text-align: center;">{{ $p->mark }}</td>



                                    </tr>
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
