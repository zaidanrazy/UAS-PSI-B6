@extends ('layout.main')
@section('tes')
    <div class="page-inner">
        <div class="page-title">
            <h3 class="breadcrumb-header">Peminjaman </h3>
            <div class="page-breadcrumb">
                <ol class="breadcrumb breadcrumb-with-header">
                </ol>
            </div>
        </div>
        <br>

        <div class="col-md-12 mb-5">
            <div class="panel panel-white mb-3">
                {{-- <div class="panel-heading clearfix mb-3">
                    <div class="d-flex">
                        <a href="{{ route('user.create') }}" class="btn btn-primary">
                            <i class="far fa-plus"></i> Tambah Barang
                        </a>
                    </div>
                </div> --}}

                {{-- form input --}}

                {{-- form input --}}

                <div class="panel-body mb-auto">
                    {{-- @if (count($peminjaman) > 0) --}}
                    <div class="table-responsive">
                        <table id="example" class="table table-bordered table-sm mb-3 ">
                            <thead>
                                <tr>
                                    <th style="text-align: center;">No</th>
                                    <th style="text-align: center;">Barcode</th>
                                    <th style="text-align: center;" width="90">Barang</th>
                                    <th style="text-align: center;">Peminjam</th>
                                    <th style="text-align: center;">Pic</th>

                                    <th style="text-align: center;">Jumlah
                                        pinjam
                                    </th>
                                    {{-- <th style="text-align: center;">Sisa</th> --}}
                                    <th style="text-align: center;">Tgl Pinjam</th>
                                    <th style="text-align: center;">Tgl Kembali</th>
                                    <th style="text-align: center;">Gambar</th>
                                    <th style="text-align: center;"width="13%">Status</th>
                                </tr>
                            </thead>
                            {{-- @endif --}}
                            <tbody>

                                @foreach ($peminjaman as $p)
                                    <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td style="text-align: center;">{{ $p->barcode }}</td>
                                        <td style="text-align: center;">{{ $p->barang }}</td>
                                        <td style="text-align: center;">{{ $p->nama_peminjam }}</td>
                                        <td style="text-align: center;">{{ $p->nama_pic }}</td>
                                        <td style="text-align: center;">{{ $p->qty_barang }}</td>
                                        {{-- <td style="text-align:center;
                                        ">
                                            {{ $p->sisa_barang }}
                                        </td> --}}
                                        <td>{{ \Carbon\Carbon::parse($p->tgl_pinjam)->isoFormat('D MMMM YYYY HH:ss') }}
                                        </td>
                                        <td>{{ \Carbon\Carbon::parse($p->tgl_kembali)->isoFormat('D MMMM YYYY HH:ss') }}
                                        </td>

                                        <td>
                                            @if ($p->image != null || $p->image != '')
                                                <img src="{{ asset('storage/pinjam/' . $p->image) }}"
                                                    class="rounded img-fluid img-rounded w-25 h-25" style="width: 120px">
                                        </td>
                                @endif
                                </td>

                                {{-- <td style="text-align: center;">
                                    @if ($p->image_new != null || $p->image_new != '')
                                        <img src="{{ asset('storage/' . $p->image_new) }}"
                                            class="rounded img-fluid img-rounded w-25 h-25"
                                            style="width: 120px">
                                    @endif --}}

                                <td style="text-align: center;">
                                    @if ($p->status == 'menunggu' && auth()->user()->id == 1)
                                        <form action="{{ route('peminjaman.acc', $p->id) }}" method="post">
                                            @csrf
                                            @method('put')
                                            <input type="hidden" name="peminjaman_id" value="{{ $p->id }}">
                                            <input type="hidden" name="jumlah" value="{{ $p->jumlah }}">
                                            <button type="submit" class="btn btn-success btn-sm">Terima</button>

                                        </form>
                                    @elseif ($p->status == 'diterima')
                                        Dipinjam
                                    @elseif($p->status == 'menunggu')
                                        Menunggu
                                    @elseif ($p->status == 'ditolak')
                                        Ditolak
                                    @elseif ($p->status == 'selesai')
                                        selesai
                                    @endif
                                    @if ($p->status == 'menunggu' && auth()->user()->id == 1)
                                        <form action="{{ route('peminjaman.declined', $p->id) }}" method="post">
                                            @csrf
                                            @method('put')
                                            <input type="hidden" name="peminjaman_id" value="{{ $p->id }}">
                                            <button type="submit" class="btn btn-danger btn-sm ">Tolak</button>
                                        </form>
                                    @endif
                                </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div><!-- Row -->
    </div>
@endsection
