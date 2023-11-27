@extends('layout.main')
@section('tes')
    <div class="page-inner">
        <div class="page-title">
            <h3 class="breadcrumb-header">Home</h3>
            <div class="page-breadcrumb">
                <ol class="breadcrumb breadcrumb-with-header">
                </ol>
            </div>
        </div>

        {{-- isi --}}
        <div class="panel-body mb-auto">
            <div class="table-responsive">
                <table id="example" class="table table-bordered table-sm mb-2 ">
                    <thead>
                        <tr>
                            <th style="text-align: center; width: 10px;">No</th>
                            <th style="text-align: center;">Name</th>
                            <th style="text-align: center;" width="10%">Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        @if ($groups->count())
                            {{-- @foreach ($gruops as $gruop) --}}
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{!! $group->group_name !!}</td>
                                <td>
                                    <a class="btn btn-primary btn-sm " href="{{ route('gruop.edit', $b->id_barang) }}">
                                        <i class="fas fa-edit"></i>
                                    </a>

                                    <a class="btn btn-danger btn-sm " href="#"
                                        onclick="deleteData('{{ route('gruop.destroy', $b->id_barang) }}'); return false;">
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
                            {{-- @endforeach --}}
                        @else
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <form method="POST" id="deleteForm">
        @csrf
        @method('DELETE')
    </form>
@endsection
