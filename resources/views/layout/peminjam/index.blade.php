@extends ('layout.main')
@section('tes')
    {{-- <style>
        .transparent-card {
            background: rgb(220, 81, 81);
            /* border: 2px solid rgba(100, 1, 1, 0.1); */
            border-radius: 50px;
            backdrop-filter: blur(200px);
            /* background-color: rgba(255, 255, 255, 0.5);
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        border: none;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        box-shadow: none; */
        }

        .panel {
            border-radius: 50px;
        }
    </style> --}}
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
            <div class="panel panel-white mb-3 transparent-card">
                <div class="card-body">
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
                            {{-- <table id="example" class="table table-bordered table-sm mb-3 "> --}}
                            <table id="example" class="display table" style="width: 100%; cellpacing: 0;">
                                <thead>
                                    <tr>
                                        <th style="text-align: center;">No</th>
                                        <th style="text-align: center;">Barcode</th>
                                        <th style="text-align: center;" width="90">Barang</th>
                                        <th style="text-align: center;">Peminjam</th>
                                        {{-- <th style="text-align: center;">Pic</th> --}}

                                        <th style="text-align: center;" width="1%">Jumlah

                                        </th>
                                        {{-- <th style="text-align: center;">Sisa</th> --}}
                                        <th style="text-align: center;" width="10%">Tgl Pinjam</th>
                                        <th style="text-align: center;" width="10%">Estimasi Kembali</th>
                                        <th style="text-align: center;">Gambar</th>
                                        <th style="text-align: center;"width="1%">Status</th>
                                    </tr>
                                </thead>
                                {{-- @endif --}}
                                <tbody>
                                    {{-- @endif --}}
                                    @php
                                        $count = 0;
                                    @endphp
                                    @foreach ($peminjaman as $p)
                                        @if ($p->status == 'menunggu' || $p->status == 'diterima')
                                            @if (auth()->user()->is_admin === 'admin' || auth()->user()->is_admin === 'pic' || auth()->user()->is_admin === 'user')
                                                <tr>
                                                    @php
                                                        $count++;
                                                    @endphp
                                                    <td style="text-align: center; font-size: 14px">{{ $count }}</td>
                                                    <td style="text-align: center;font-size:14px;">{{ $p->barcode }}</td>
                                                    <td style="text-align: center;font-size:14px;">{{ $p->barang }}</td>
                                                    <td style="text-align: center;font-size:14px;">{{ $p->nama_peminjam }}
                                                    </td>
                                                    {{-- <td style="text-align: center;font-size:14px;">{{ $p->nama_pic }}</td> --}}
                                                    <td style="text-align: center;font-size:14px;">{{ $p->qty_barang }}</td>
                                                    {{-- <td style="text-align:center;
                                        ">
                                            {{ $p->sisa_barang }}
                                        </td> --}}
                                                    <td style="text-align: center;font-size:14px;">
                                                        {{ \Carbon\Carbon::parse($p->tgl_pinjam)->isoFormat('D MMMM YYYY HH:ss') }}
                                                    </td>
                                                    <td style="text-align: center;font-size:14px;">
                                                        {{ \Carbon\Carbon::parse($p->tgl_kembali)->isoFormat('D MMMM YYYY HH:ss') }}
                                                    </td>




                                                    <td>
                                                        @if ($p->image != null || $p->image != '')
                                                            <img src="{{ asset('storage/pinjam/' . $p->image) }}"
                                                                class="rounded img-fluid img-rounded" style="height: 80px;">
                                                        @endif
                                                    </td>


                                                    {{-- <td style="text-align: center;">
                                    @if ($p->image_new != null || $p->image_new != '')
                                        <img src="{{ asset('storage/' . $p->image_new) }}"
                                            class="rounded img-fluid img-rounded w-25 h-25"
                                            style="width: 120px">
                                    @endif --}}

                                                    <td style="text-align: center;">
                                                        <div
                                                            class="d-flex justify-content-between justify-content-lg-center">
                                                            @if ($p->status == 'menunggu' && auth()->user()->id == 1)
                                                                <form action="{{ route('peminjaman.acc', $p->id) }}"
                                                                    method="post">
                                                                    @csrf
                                                                    @method('put')
                                                                    <input type="hidden" name="peminjaman_id"
                                                                        value="{{ $p->id }}">
                                                                    <input type="hidden" name="jumlah"
                                                                        value="{{ $p->jumlah }}">
                                                                    <button type="submit"
                                                                        class="btn btn-success btn-sm me-2 ">Terima</button>

                                                                </form>

                                                                {{-- <div class="text-align: center;"> --}}
                                                            @elseif ($p->status == 'diterima')
                                                                <div class="mt-4  text-center"> <button
                                                                        style="background-color: rgb(73, 87, 147); color: white; padding: 5px 10px; border: none; border-radius: 5px; font-size: small; font-weight: bold; width: 75px;"
                                                                        class="btn-sm">Dipinjam</button>
                                                                </div>
                                                            @elseif ($p->status == 'telat')
                                                                <div class="mt-4  text-center"> <button
                                                                        style="background-color: rgb(236, 236, 25); color: white; padding: 5px 10px; border: none; border-radius: 5px; font-size: small; font-weight: bold; width: 75px;"
                                                                        class="btn-sm">Terlambat</button>
                                                                </div>
                                                            @elseif($p->status == 'menunggu')
                                                                <div class="mt-4 text-center"> <button
                                                                        style="background-color: #34b0e4; color: white; padding: 5px 10px; border: none; border-radius: 5px; font-size: small; font-weight: bold; width: 75px;"
                                                                        class="btn-sm">Menunggu</button>
                                                                </div>
                                                            @elseif ($p->status == 'ditolak')
                                                                <div class="mt-4 text-center"> <button
                                                                        style="background-color: rgb(255, 64, 0); color: white; padding: 5px 10px; border: none; border-radius: 5px; font-size: small; width: 60px; font-weight: bold;"
                                                                        class="btn-sm">Ditolak
                                                                    </button>
                                                                </div>
                                                            @elseif ($p->status == 'selesai')
                                                                {{-- <button type="button" class="btn btn-success">Selesai</button> --}}
                                                                {{-- <i class='bx bx-badge-check bx-lg mt-3'></i> --}}

                                                                <box-icon name='badge-check' size='lg' color='green'
                                                                    class="mt-4"></box-icon>
                                                            @endif
                                                            {{-- </div> --}}

                                                            @if ($p->status == 'menunggu' && auth()->user()->id == 1)
                                                                <form action="{{ route('peminjaman.declined', $p->id) }}"
                                                                    method="post">
                                                                    @csrf
                                                                    @method('put')
                                                                    <input type="hidden" name="peminjaman_id"
                                                                        value="{{ $p->id }}">
                                                                    <button type="submit"
                                                                        class="btn btn-danger btn-sm d-inline btn-block ">Tolak
                                                                        &nbsp;</button>
                                                                </form>
                                                            @endif

                                                        </div>
                                                    </td>
                                                </tr>
                                            @endif
                                        @endif
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div><!-- Row -->
        </div>

    </div>
@endsection
