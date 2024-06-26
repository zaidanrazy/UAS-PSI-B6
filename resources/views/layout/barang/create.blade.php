@extends ('layout.main')
{{-- @push('css')
    <link href="{{ asset('assets/plugins/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css" />
@endpush

@push('js')
    <script src="{{ asset('assets/plugins/select2/js/select2.min.js') }}"></script>

    <script src="{{ asset('assets/js/pages/form-select2.js') }}"></script>
@endpush --}}
@section('tes')
    <div class="page-inner">
        <div class="page-title">
            <h3 class="breadcrumb-header">Barang </h3>
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
                    <h4 class="panel-title">Add New Items</h4>
                </div>
                {{-- <div class="row"> --}} <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('databarang.store') }}">
                        @csrf

                        <div class="row row-sm mb-3 ms-5">
                            <div class="col-lg-6 form-group">
                                <label for="barcode" class="form-label">
                                    <h4 class="no-m m-b-sm">Barcode</h4>
                                </label>

                                <input type="text" class="form-control @error('barcode') is-invalid @enderror"
                                    id="barcode" maxlength="8" name="barcode" required autofocus
                                    value="{{ old('barcode') }}">
                                @error('barcode')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror

                            </div>


                            <div class="col-lg-6 form-group ms-5">
                                <label for="barang" class="form-label">
                                    <h4 class="no-m m-b-sm">Barang</h4>
                                </label>

                                <input type="text" class="form-control  @error('barang') is-invalid @enderror"
                                    id="barang" name="barang" required autofocus value="{{ old('barang') }}">
                                @error('barang')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                                <p class="help-block"></p>

                            </div>
                        </div>

                        <div class="row row-sm mb-3 ms-5">
                            {{-- <div class="col-lg-6 form-group">
                                <label for="jenis_barang" class="form-label">
                                    <h4 class="no-m m-b-sm">Jenis</h4>
                                </label>

                                <select class="form-select  form-select-lg" id="jenis_barang" name="jenis_barang" required>
                                    <option value=""> Pilih Jenis Barang </option>
                                    @foreach ($jenis as $j)
                                        <option value="{{ $j->id_jb }}">
                                            {{ $j->jenis_barang }}</option>
                                    @endforeach
                                </select>
                                @error('jenis_barang')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                                <p class="help-block"></p>

                            </div> --}}
                            <div class="col-lg-6 form-group">
                                <label for="jenis_barang" class="form-label">
                                    <h4 class="no-m m-b-sm">Kategori</h4>
                                </label>

                                <select class="form-select  form-select-lg" id="jenis_barang" name="jenis_barang" required>
                                    <option value=""> Pilih Kategori Barang </option>
                                    @foreach ($jenis as $j)
                                        <option value="{{ $j->id_jb }}">

                                            {{ $j->jenis_barang }}</option>
                                    @endforeach
                                </select>
                                @error('jenis_barang')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                                <p class="help-block"></p>

                            </div>

                            <div class="col-lg-6 form-group ms-5">
                                <label for="jumlah" class="form-label">
                                    <h4 class="no-m m-b-sm">Jumlah</h4>
                                </label>

                                <input type="number" class="form-control @error('jumlah') is-invalid @enderror"
                                    id="jumlah" name="jumlah" required autofocus value="{{ old('jumlah') }}">
                                @error('jumlah')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                                <p class="help-block"></p>

                            </div>
                        </div>

                        <div class="row row-sm mb-3 ms-5">
                            {{-- <div class="col-sm-6 form-group">
                                <label for="harga" class="form-label">
                                    <h4 class="no-m m-b-sm">Harga</h4>
                                </label>

                                <input type="number" class="form-control @error('harga') is-invalid @enderror"
                                    id="harga" name="harga" required autofocus value="{{ old('harga') }}">
                                @error('harga')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                                <p class="help-block"></p>

                            </div> --}}

                            {{-- <div class="col-lg-6 form-group ms-5 ">
                                <label for="pic" class="form-label">
                                    <h4 class="no-m m-b-sm">PIC</h4>
                                </label>

                                <select class="form-select form-select-lg" id="pic" name="pic" required>
                                    <option value=""> Pilih PIC Barang </option>
                                    @foreach ($user as $u)
                                        <option value="{{ $u->id }}">
                                            {{ $u->name }}</option>
                                    @endforeach

                                </select>
                                @error('pic')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                                <p class="help-block"></p>
                            </div> --}}
                        </div>
                        {{-- <div class="form-group d-flex justify-content-center ">

                            <a href="{{ route('databarang.index') }}" class="btn btn-info">Kembali</a> &nbsp; &nbsp;
                            <button type="submit" class="btn btn-primary">Simpan</button>

                        </div> --}}
                        <br>
                        <div class="form-group row justify-content-center">
                            <div class="col-sm-1"></div>
                            <div class="col-sm-4">
                                <a href="{{ route('home') }}" class="btn btn-info">Kembali</a>

                                <button type="submit" class="btn btn-primary">Save <i class="bx bxs-save ms-20">
                                </button></i><br>
                            </div>
                        </div>
                    </form>
                </div>



                {{-- <button type="button" class="btn btn-info btn-sm" data-toggle="modal"
                    data-target="#myModal{{ $p->barcode }}">Kembalikan
                    <i class=" icon-action-undo"></i></button> --}}





            </div>
        </div>
    </div>
@endsection
