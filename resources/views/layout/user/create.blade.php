@extends('layout.main')

{{-- @push('css')
    <link href="{{ asset('assets/plugins/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css" />
@endpush

@push('js')
    <script src="{{ asset('assets/plugins/select2/js/select2.min.js') }}"></script>

    <script src="{{ asset('assets/js/pages/form-select2.js') }}"></script>
@endpush --}}

<style>
    .oiii {
        margin-right: 5px;
    }
</style>

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






                        <div class="row row-sm mb-3 ms-5">
                            <div class="col-lg-6 form-group">
                                <label for="name" class="form-label"></label>
                                <h4 class="no-m m-b-sm">Nama</h4>
                                {{-- <div class="col-sm-5"> --}}
                                <input type="text" class="form-control me-1 @error('name') is-invalid @enderror"
                                    id="name" name="name" required autofocus value="{{ old('name') }}">
                                @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="col-lg-6 form-group ms-5">
                                <label for="email" class="form-label">
                                    <h4 class="no-m m-b-sm">Email</h4>
                                </label>
                                {{-- <div class="col-sm-5"> --}}
                                <input type="text" class="form-control @error('email') is-invalid @enderror"
                                    id="email" name="email" required autofocus value="{{ old('email') }}">
                                @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                                {{-- </div> --}}
                            </div>
                        </div>


                        <div class="row row-sm mb-3 ms-5">
                            <div class="col-lg-6 form-group">
                                <label for="nik" class="form-label ">
                                    <h4 class="no-m m-b-sm">Nik</h4>
                                </label>
                                <input type="text" maxlength="8"
                                    class="form-control me-1  @error('nik') is-invalid @enderror" id="nik"
                                    name="nik" required autofocus value="{{ old('nik') }}">
                                @error('nik')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="col-lg-6 form-group ms-5">
                                <label class="form-label  ">
                                    <h4 class="no-m m-b-sm">Password</h4>
                                </label>

                                <div class="input-group m-b-sm ">
                                    {{-- <ion-icon name="eye-off-outline" class="seep" id="seep"></ion-icon> --}}
                                    <input type="password"
                                        class="form-control ms-1  @error('password') is-invalid @enderror" id="password"
                                        name="password" required autofocus value="{{ old('password') }}"
                                        aria-describedby="basic-addon2">
                                    <span class="input-group-addon" id="basic-addon2"> <ion-icon name="eye-off-outline"
                                            class="seep" id="seep"></ion-icon></span>
                                    @error('password')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 ms-3 form-group">
                            <label for="role" class="form-label">
                                <h4 class="no-m m-b-sm">Role</h4>
                            </label>
                            <select class=" form-select form-select-lg" id="role" name="role" required>
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

                <br>



                <div class="form-group row justify-content-center">
                    <div class="col-sm-1"></div>
                    <div class="col-sm-4">
                        <a href="{{ route('user.index') }}" class="btn btn-info">Kembali</a>
                        <button type="submit" class="btn btn-primary">Simpan <i class="bx bxs-save ms-20"></button></i>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>
    </div>
    </div>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <script>
        let seep = document.getElementById("seep");
        let password = document.getElementById("password");

        seep.onclick = function() {
            if (password.type === "password") {
                password.type = "text";
                seep.setAttribute("name", "eye-outline");
            } else {
                password.type = "password";
                seep.setAttribute("name", "eye-off-outline");
            }
        };
    </script>
@endsection
{{-- <div class="form-group row">
    <div class="col-sm-1"></div>
    <div class="col-sm-4">
        <a href="{{ route('home') }}" class="btn btn-info">Kembali</a>

        <button type="submit" class="btn btn-primary">Save <i class="bx bxs-save ms-20">
        </button></i><br>
    </div>
</div> --}}
