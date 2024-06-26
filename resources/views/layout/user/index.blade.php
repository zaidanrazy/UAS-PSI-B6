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
                        {{-- <table id="example" class="table table-bordered table-sm mb-3 "> --}}
                        <table id="example" class="display table" style="width: 100%; cellpacing: 0;">
                            <thead>
                                <tr>
                                    <th style="text-align: center;">No</th>
                                    <th style="text-align: center;">Nama</th>
                                    <th style="text-align: center;">Email</th>
                                    <th style="text-align: center;">Nik</th>
                                    <th style="text-align: center;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($user as $u)
                                    <tr>
                                        <td style="text-align: center; font-size: 14px;">{{ $loop->iteration }}</td>
                                        <td style="text-align: center; font-size: 14px;">{{ $u->name }}</td>
                                        <td style="text-align: center; font-size: 14px;">{{ $u->email }}</td>
                                        <td style="text-align: center; font-size: 14px;">{{ $u->nik_pic }}</td>
                                        <td style="text-align: center; font-size: 14px;">
                                            <a class="btn btn-success btn-sm " href="{{ route('user.edit', $u->id) }}">
                                                <i class="fas fa-edit"></i>
                                            </a>


                                            <a class="btn btn-warning btn-sm " href="#"
                                                onclick="deleteData('{{ route('user.destroy', $u->id) }}'); return false;">
                                                <i class='bx bx-trash-alt bx-sm fs-3 text-white'></i>
                                                {{-- <iclass="fasfa-trash"></i> --}}</a>

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
