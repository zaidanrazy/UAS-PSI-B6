@extends ('layout.main')
@section('tes')
    <div class="page-inner">
        <div class="page-title">
            <h3 class="breadcrumb-header">User </h3>
            <div class="page-breadcrumb">
                <ol class="breadcrumb breadcrumb-with-header">
                </ol>
            </div>
        </div>
        <br>

        <div class="col-md-12 mb-5">
            <div class="panel panel-white mb-5">
                <div class="panel-heading clearfix mb-3">
                    {{-- <h4 class="panel-title">Data Barang</h4> --}}
                    <div class="d-flex">
                        <a href="{{ route('user.create') }}" class="btn btn-primary">
                            <i class="far fa-plus"></i> Tambah User
                        </a>
                    </div>
                </div>


                <div class="panel-body mb-auto">
                    <div class="table-responsive">
                        <table id="example" class="table table-bordered table-sm mb-3 ">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Nik</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($user as $u)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $u->name }}</td>
                                        <td>{{ $u->email }}</td>
                                        <td>{{ $u->nik_pic }}</td>
                                        <td>
                                            <a class="btn btn-primary btn-sm " href="{{ route('user.edit', $u->id) }}">
                                                <i class="fas fa-edit"></i>
                                            </a>


                                            <a class="btn btn-danger btn-sm " href="#"
                                                onclick="deleteData('{{ route('user.destroy', $u->id) }}'); return false;">
                                                <i class="fas fa-trash"></i></a>

                                        </td>
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

    <form method="POST" id="deleteForm">
        @csrf
        @method('DELETE')
    </form>
@endsection
