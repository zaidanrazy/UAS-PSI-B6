@extends ('layout.main')
@section('tes')
    {{-- <style>
        .modal-body {
            backdrop-filter: blur(15px);
        }
    </style> --}}
    <div class="page-inner">
        <div class="page-title">
            <h3 class="breadcrumb-header">{{ $name }}</h3>
            <div class="page-breadcrumb">
                {{-- <ol class="breadcrumb breadcrumb-with-header">
                </ol> --}}
            </div>
        </div>
        <br>
        {{-- @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show col-sm-5" role="alert">
                {{ session('success') }}
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        @endif
        @if (session('failed'))
            <div class="alert alert-danger alert-dismissible fade show col-sm-5" role="alert">
                {{ session('failed') }}
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        @endif --}}
        <div class="col-md-12 mb-5">
            {{-- @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success!</strong> {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            @endif
            @if (session('failed'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Failed!</strong> {{ session('failed') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            @endif --}}
            <div class="panel panel-white mb-5">
                @if (auth()->user()->is_admin === 'admin')
                    <div class="panel-heading clearfix mb-3">
                        {{-- <h4 class="panel-title">Data Barang</h4> --}}

                        <div class="d-flex justify-content-between   ">
                            <a href="{{ route('databarang.create') }}" class="btn btn-info">
                                <i class="far fa-plus"></i> Barang
                            </a>
                            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">
                                <i class="far fa-plus"></i> Jenis Barang
                            </button>
                        </div>
                    </div>
                @endif
                <!-- Modal -->

                <div class="px-2 py-2">
                    <div class="col-md-4">
                        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-body ">
                                        <form class="form-horizontal" method="POST"
                                            action="{{ route('jenisBarang.store') }}">
                                            @csrf
                                            {{-- <label for="jenisbarangg">Add Jenis Barang</label> --}}
                                            <div class="row">
                                                <div class="mx-auto col-md-8 col-6 col-lg-8">

                                                    <label for="jenisbarangg">Add Jenis Barang</label>
                                                    <input type="text" class="form-control" name="jenisbarangg"
                                                        id="jenisbarangg" placeholder="Add Jenis">

                                                    @error('jenisbarangg')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                {{-- <div class="col-4">

                                                    <button type="submit" class="btn btn-primary">Simpan</button>

                                                    <button type="button" class="btn btn-default"
                                                        data-dismiss="modal">Close</button>
                                                </div> --}}
                                            </div>

                                            {{-- </form> --}}
                                            <br>
                                            <div class="row">
                                                {{-- <div class="col-md-2 col-md-offset-2"> --}}
                                                {{-- <div class="panel panel-default"> --}}
                                                <div class="panel-body">
                                                    <table class="table table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <th style="width: 5%">No</th>
                                                                <th style="text-align: center;">Jenis Barang</th>

                                                                <th style="width: 20%; text-align: center;">Action
                                                                </th>

                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($jenis as $j)
                                                                <tr>
                                                                    <th scope="row">{{ $loop->iteration }}</th>
                                                                    <td>{{ $j->jenis_barang }}</td>
                                                                    <td style="text-align: center;">
                                                                        {{-- <a class="btn btn-primary btn-sm" href=""><i class="fas fa-edit"></i></a> --}}
                                                                        <a class="btn btn-danger btn-sm" href="#"
                                                                            onclick="deleteData('{{ route('jenisBarang.destroy', $j->id_jb) }}'); return false;">
                                                                            <i class="fas fa-trash"></i></a>
                                                                    </td>
                                                                </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                                {{-- </div> --}}
                                                {{-- </div><!-- Row --> --}}
                                            </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        {{-- <button type="submit" class="btn btn-success">Save changes</button> --}}
                                        <button type="submit" class="btn btn-primary">Save</button>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="panel-body mb-auto">
                    <div class="table-responsive">
                        <table id="example" class="table table-bordered table-sm mb-2 ">
                            <thead>
                                <tr>
                                    <th style="text-align: center; width: 10px;">No</th>
                                    <th style="text-align: center;">Barcode</th>
                                    <th style="text-align: center;" width="10%">Jenis Barang</th>
                                    <th style="text-align: center; width: 300px;">Barang</th>
                                    @if (auth()->user()->is_admin === 'admin')
                                        {{-- <th style="text-align: center;" width="10%">Harga</th> --}}
                                        <th style="text-align: center; width: 10%;">
                                            <span style="display: flex; flex-direction: column; align-items: center;">
                                                <i class="icon-credit-card"></i>
                                                <span style="margin-top: 5px;">Harga</span>
                                            </span>
                                        </th>
                                    @endif
                                    <th style="text-align: center;">Stok</th>
                                    <th style="text-align: center;">Sisa</th>
                                    <th style="text-align: center;" width="20%">Pic</th>
                                    @if (auth()->user()->is_admin === 'admin')
                                        <th style="text-align: center;" width="14%">Action</th>
                                    @endif

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($barang as $b)
                                    <tr>
                                        <th style="text-align:center;"scope="row">{{ $loop->iteration }}</th>
                                        <td style="text-align:center;">{{ $b->barcode }}</td>
                                        <td style="text-align:center;">{{ $b->jenis_barang }}</td>
                                        <td style="text-align:center;">{{ $b->barang }}</td>
                                        @if (auth()->user()->is_admin === 'admin')
                                            <td style="text-align:center;">{{ $b->harga }}</td>
                                        @endif
                                        <td style="text-align:center;">{{ $b->jumlah == null ? 'empty' : $b->jumlah }}</td>

                                        @php
                                            $total_stock = (int) $b->jumlah;
                                            $qty_peminjaman = (int) \App\Models\Peminjaman::where('id_barang', $b->id_barang)
                                                ->where('status', 'diterima')
                                                ->sum('qty_barang');
                                            $sisa = $total_stock - $qty_peminjaman;

                                            //save
                                            $barang = \App\Models\Barang::findOrFail($b->id_barang);
                                            $barang->sisa = $sisa;
                                            $barang->save();
                                        @endphp

                                        <td style="text-align:center;">{{ $sisa }}</td>

                                        {{--


                                @foreach ($pinjam as $p)
                                    @php $jumlah = \App\Models\Barang::where('id_barang', $p->id_barang)->value('jumlah'); @endphp
                                    <option value="{{ $p->id_barang }}"> {{ $p->barang }}

                                        <span
                                            class="badge badge-warning justify-content-end">[{{ 'Stock : ' . $jumlah }}]</span>
                                    </option>
                                @endforeach --}}







                                        <td style="text-align:center;">{{ $b->name }}</td>
                                        @if (auth()->user()->is_admin === 'admin')
                                            <td style="text-align:center;">
                                                <a class="btn btn-primary btn-sm "
                                                    href="{{ route('databarang.edit', $b->id_barang) }}">
                                                    <i class="fas fa-edit"></i>
                                                </a>

                                                <a class="btn btn-danger btn-sm " href="#"
                                                    onclick="deleteData('{{ route('databarang.destroy', $b->id_barang) }}'); return false;">
                                                    <i class="fas fa-trash"></i></a>
                                                {{-- <form action="{{ route('databarang.destroy', $b->id_barang) }}" method="post">
                                                @method('delete')
                                                @csrf
                                                <a class="btn btn-danger btn-sm " href="#"
                                                    onclick="return confirm ('are you sure deleted?')">
                                                    <i class="fas fa-trash"></i></a>
                                            </form> --}}
                                                {{-- <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                                action="{{ route('databarang.destroy', $b->id_barang) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <a class="btn btn-danger btn-sm " href="#">
                                                    <i class="fas fa-trash"></i>
                                                </a>
                                            </form> --}}
                                                {{-- <a class="btn btn-info   btn-sm " href="{{ route('stok.index') }}">
                                                    <i class="far fa-plus"></i>
                                                </a> --}}
                                            </td>
                                        @endif
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>x
    </div>
    </div>

    {{-- {{ $barang->links() }} --}}
    </div>
    </div>
    </div><!-- Row -->
    </div>

    <form method="POST" id="deleteForm">
        @csrf
        @method('DELETE')
    </form>
@endsection
