@extends('layout.main')

@section('tes')
    <div class="page-inner">
        <div class="page-title">
            <h3 class="breadcrumb-header">Jenis Barang</h3>
            <div class="page-breadcrumb">
                <ol class="breadcrumb breadcrumb-with-header">
                </ol>
            </div>
        </div>
        <br>
        <br>


        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-body">
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
                </div>
            </div><!-- Row -->
        </div>
    </div>
    <form method="POST" id="deleteForm">
        @csrf
        @method('DELETE')
    </form>
@endsection





















































































{{-- @extends ('layout.main')
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
