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


                <div class="panel-body mb-auto">
                    <div class="table-responsive">
                        <table id="example" class="table table-bordered table-sm mb-3 ">
                            <thead>
                                <tr>
                                    <th style="text-align: center;">No</th>
                                    <th style="text-align: center;">Barcode</th>
                                    <th style="text-align: center;" width="90">Barang</th>
                                    <th style="text-align: center;">Jumlah
                                        pinjam
                                    </th>
                                    <th style="text-align: center;">Tgl Pinjam</th>
                                    <th style="text-align: center;">Tgl Kembali</th>
                                    <th style="text-align: center;">Peminjam</th>
                                    <th style="text-align: center;"width="90">Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($peminjaman as $p)
                                    <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td>{{ $p->barcode }}</td>
                                        <td>{{ $p->barang }}</td>
                                        <td>{{ $p->jumlah == null ? 'empty' : $p->jumlah }}</td>
                                        <td>{{ \Carbon\Carbon::parse($p->tgl_pinjam)->isoFormat('D MMMM YYYY HH:ss') }}</td>
                                        <td>{{ \Carbon\Carbon::parse($p->tgl_kembali)->isoFormat('D MMMM YYYY HH:ss') }}
                                        </td>
                                        {{-- <td>{{ $p->tgl_kembali }}</td> --}}
                                        <td>{{ $p->name }}</td>
                                        <td>
                                            <a class="btn btn-primary btn-sm " href="">
                                                <i class="fas fa-check"></i>
                                            </a>

                                            <a class="btn btn-danger btn-sm " href="#"
                                                onclick="deleteData(''); return false;">
                                                <i class="fas fa-times"></i></a>
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
