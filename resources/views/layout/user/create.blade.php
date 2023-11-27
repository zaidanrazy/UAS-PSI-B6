@extends('layout.main')
@section('tes')
    <div class="page-inner">
        <div class="page-title">
            <h3 class="breadcrumb-header">User </h3>
            <div class="page-breadcrumb">
                <ol class="breadcrumb breadcrumb-with-header">
                    {{-- <li><a href="#">Layouts</a></li>
                    <li class="active">Blank Page</li> --}}
                </ol>
            </div>
        </div>
        <br>
        <div class="col-md-12">
            <div class="panel panel-white">
                <div class="panel-heading clearfix">
                    <h4 class="panel-title">Add New User</h4>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="/user">
                        @csrf
                        <div class="form-group">
                            <label for="name" class="col-sm-1 control-label">Nama</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control @error('name') is-invalid @enderror"
                                    id="name" name="name" required autofocus value="{{ old('name') }}">
                                @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="col-sm-1 control-label">Email</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control @error('email') is-invalid @enderror"
                                    id="email" name="email" required autofocus value="{{ old('email') }}">
                                @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nik" class="col-sm-1 control-label">Nik</label>
                            <div class="col-sm-5">
                                <input type="number" class="form-control @error('nik') is-invalid @enderror" id="nik"
                                    name="nik" required autofocus value="{{ old('nik') }}">
                                @error('nik')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="role" class="col-sm-1 control-label">Role</label>
                            <div class="col-sm-5">
                                <select class="form-select form-select-lg" id="role" name="role" required>
                                    <option value=""disabled>Pilih role</option>
                                    @foreach ($role as $a)
                                        <option value="{{ $a->is_admin }}">
                                            {{ $a->is_admin }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('role')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password" class="col-sm-1 control-label">Password</label>
                            <div class="col-sm-5">
                                <input type="password" class="form-control @error('password') is-invalid @enderror"
                                    id="password" name="password" required autofocus value="{{ old('password') }}">
                                @error('password')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-1"></div>
                            <div class="col-sm-2">
                                <a href="{{ route('user.index') }}" class="btn btn-info">Kembali</a>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
