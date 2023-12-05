@extends('layout.main')

{{-- @push('css')
    <link href="{{ asset('assets/plugins/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css" />
@endpush

@push('js')
    <script src="{{ asset('assets/plugins/select2/js/select2.min.js') }}"></script>

    <script src="{{ asset('assets/js/pages/form-select2.js') }}"></script>
@endpush --}}
<style>
    .hr {
        border: none;
        border-top: 1px solid rgb(170, 170, 170);
        /* margin: 20px 0; */
    }
</style>

@section('tes')
    <div class="page-inner">
        <div class="page-title">
            <h3 class="breadcrumb-header">Jenis Barang</h3>
            <div class="page-breadcrumb">
                <ol class="breadcrumb breadcrumb-with-header"></ol>
            </div>
        </div><br>{{-- <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-body">

                        <div class="row">
                            <div class="class">
                                <form class="form-horizontal" method="POST" action="/jenisBarang"
                                    action="{{ route('jenisBarang.store') }}">
                                    @csrf
                                    <div class="form-group">
                                        <label for="jenis" class="col-sm-1  "></label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control @error('jenis') is-invalid @enderror"
                                                id="jenis" name="jenis" placeholder="Tambahkan Jenis Barang" required
                                                autofocus value="{{ old('jenis') }}">
                                            @error('jenis')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="justify-content">
                                            <button type="submit" class="btn btn-primary">Save</button>
                                        </div>
                                    </div>
                                </form>
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th style="width: 5%">No</th>
                                            <th style="text-align: center;">Jenis Barang</th>
                                            <th style="width: 20%; text-align: center;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($jenis as $j)
                                            <tr>
                                                <th scope="row">{{ $loop->iteration }}</th>
                                                <td>{{ $j->jenis_barang }}</td>
                                                <td style="text-align: center;">
                                                    <a class="btn btn-danger btn-sm" href="#"
                                                        onclick="deleteData('{{ route('jenisBarang.destroy', $j->id_jb) }}'); return false;">
                                                        <i class="fas fa-trash"></i></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div><!-- Row -->
                </div>
            </div>
            <form method="POST" id="deleteForm">
                @csrf
                @method('DELETE')
            </form> --}} {{-- <div class="row">
            <div class="col-md-12">

                <div class="row justify-content-center">
                    <div class="col-md-8">

                        <div class="panel panel-white ">

                            <form class="form-horizontal" method="POST" action="/jenisBarang"
                                action="{{ route('jenisBarang.store') }}">
                                @csrf
                                <br>
                                <div class="justify-conten-beetwen mt-10">

                                    <div class="col-sm-4">
                                        <input type="text" class="form-control @error('jenis') is-invalid @enderror"
                                            id="jenis" name="jenis" placeholder="Tambahkan Jenis Barang" required
                                            autofocus value="{{ old('jenis') }}">
                                        @error('jenis')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <button type="submit" class="btn btn-primary">Save</button>

                                </div>
                            </form>

                            <div class="ms-4 mt-5">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th style="width: 5%">No</th>
                                            <th style="text-align: center;">Jenis Barang</th>
                                            <th style="width: 20%; text-align: center;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($jenis as $j)
                                            <tr>
                                                <th scope="row">{{ $loop->iteration }}</th>
                                                <td>{{ $j->jenis_barang }}</td>
                                                <td style="text-align: center;">
                                                    <a class="btn btn-danger btn-sm" href="#"
                                                        onclick="deleteData('{{ route('jenisBarang.destroy', $j->id_jb) }}'); return false;">
                                                        <i class="fas fa-trash"></i></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="main-wrapper">
    </div>

    <form method="POST" id="deleteForm">
        @csrf
        @method('DELETE')
    </form>
@endsection --}} <div class="col-md-6 ms-4 mt-3">{{-- <div class="panel panel-white"> --}} <form
                class="form-horizontal" method="POST" action="/jenisBarang" action="{{ route('jenisBarang.store') }}">@csrf
                <div class="form-group mt-3 ms-auto">
                    <div class="col-sm-5"><input type="text" class="form-control @error('jenis') is-invalid @enderror"
                            id="jenis" name="jenis" placeholder="Tambahkan Jenis Barang" required autofocus
                            value="{{ old('jenis') }}">
                        @error('jenis')
                            <div class="invalid-feedback">{{ $message }} </div>
                        @enderror
                    </div>
                    <div class="justify-content-beetwen "><button type="submit" class="btn btn-primary">Save</button></div>
                </div>
            </form>{{-- <div class="panel-body"> --}}

            <table class="table-sm table table-striped ms-auto ">
                <thead>
                    <tr>
                        <th style="width: 5%">No</th>
                        <th style="text-align: center;">Jenis Barang</th>
                        <th style="width: 20%; text-align: center;">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($jenis as $j)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $j->jenis_barang }}</td>
                            <td style="text-align: center;"><a class="btn btn-warning btn-sm" href="#"
                                    onclick="deleteData('{{ route('jenisBarang.destroy', $j->id_jb) }}'); return false;"><i
                                        class='bx bx-trash-alt bx-sm fs-3 text-white'></i></a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="hr" style="">
            </div>
        </div>
    </div>
    </div>
    <form method="POST" id="deleteForm">@csrf @method('DELETE') </form>
@endsection {{-- @extends ('layout.main')
@section('tes')
    <div class="page-inner">
        <div class="page-title">
            <h3 class="breadcrumb-header">Jenis Barang</h3>
            <div class="page-breadcrumb">
            </div>
        </div>
        <br>

        <div class="col-md-12 mb-5">

            <div class="panel panel-white mb-5">
                <div class="panel-heading clearfix mb-3">
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
                    <form class="form-horizontal" method="POST" action="{{ route('jenisBarang.store') }}">
                        @csrf
                        <div class="col-md-4">
                        </div>
                    </form>
                </div>
                <div class="panel panel-white">
                    <div class="panel-heading clearfix">
                        <h4 class="panel-title">Bordered table</h4>
                    </div>
                    <div class="panel-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Jenis Barang</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($jenis as $j)
                                    <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td>{{ $j->jenis_barang }}</td>
                                        <td> <a class="btn btn-primary btn-sm " href="">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <a class="btn btn-danger btn-sm " href="#"
                                                onclick="deleteData return false;">
                                                <i class="fas fa-trash"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>


    </div>
    </div>
    </div>
    </div>

    <form method="POST" id="deleteForm">
        @csrf
        @method('DELETE')
    </form>
@endsection --}}
