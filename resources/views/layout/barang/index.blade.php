@extends ('layout.main')
@section('tes')
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
                <!-- Modal -->

                <div class="px-2 py-2">

                    <div class="col-md-4">
                        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    {{-- <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                                aria-hidden="true">&times;</span></button>
                                        <h3 class="modal-title" id="myModalLabel">Semangat Bolo</h3>
                                    </div> --}}
                                    <div class="modal-body">
                                        <form class="form-horizontal" method="POST"
                                            action="{{ route('jenisBarang.store') }}">
                                            @csrf
                                            <label for="jenisbarangg">Add Jenis Barang</label>
                                            <div class="row">
                                                <div class="col-6">


                                                    <input type="text" class="form-control" name="jenisbarangg"
                                                        id="jenisbarangg" placeholder="add jenis">

                                                    @error('jenisbarangg')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="col-2">

                                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                                </div>
                                            </div>

                                        </form>
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
                                        <button type="submit" class="btn btn-success">Save changes</button>
                                    </div>
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
                                    <th style="text-align: center; width: 200px;">Barang</th>
                                    <th style="text-align: center;" width="10%">Harga</th>
                                    <th style="text-align: center;">Jumlah</th>
                                    <th style="text-align: center;" width="20%">Pic</th>
                                    <th style="text-align: center;" width="10%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($barang as $b)
                                    <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td>{{ $b->barcode }}</td>
                                        <td>{{ $b->jenis_barang }}</td>
                                        <td>{{ $b->barang }}</td>
                                        <td>{{ $b->harga }}</td>
                                        <td>{{ $b->jumlah == null ? 'empty' : $b->jumlah }}</td>
                                        <td>{{ $b->name }}</td>
                                        <td>
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
                                        </td>
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
