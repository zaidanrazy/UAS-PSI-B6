@extends ('layout.main')
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
                    <h4 class="panel-title">Edit Items</h4>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST"
                        action="{{ route('databarang.update', $barang->id_barang) }}">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="barcode" class="col-sm-1 control-label">Barcode</label>
                            <div class="col-sm-7">
                                <input type="number" class="form-control @error('barcode') is-invalid @enderror"
                                    id="barcode" name="barcode" required autofocus
                                    value="{{ old('barcode', $barang->barcode) }}">
                                @error('barcode')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="barang" class="col-sm-1 control-label">Barang</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control  @error('barang') is-invalid @enderror"
                                    id="barang" name="barang" required value="{{ old('barang', $barang->barang) }}">
                                @error('barang')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                                <p class="help-block"></p>
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="jenis_barang" class="col-sm-1 control-label">Jenis</label>
                            <div class="col-sm-7">
                                <select class="form-select form-select-lg" aria-label="Default select example"
                                    id="jenis_barang" name="jenis_barang" required>
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
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="jumlah" class="col-sm-1 control-label">Jumlah</label>
                            <div class="col-sm-7">
                                <input type="number" class="form-control @error('jumlah') is-invalid @enderror"
                                    id="jumlah" name="jumlah" required value="{{ old('jumlah', $barang->jumlah) }}">
                                @error('jumlah')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                                <p class="help-block"></p>
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="harga" class="col-sm-1 control-label">Harga</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control @error('harga') is-invalid @enderror"
                                    id="harga" name="harga" required value="{{ $barang->harga }}">
                                @error('harga')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                                <p class="help-block"></p>
                            </div>
                        </div>

                        {{-- <div class="form-group">
                            <label for="harga" class="col-sm-1 control-label">Harga</label>
                            <div class="col-sm-7">
                                <input type="text" name="harga" class="form-control" id="input-Default"
                                    value="{{ $barang->harga }}">
                            </div>
                        </div> --}}

                        <div class="form-group">
                            <label for="pic" class="col-sm-1 control-label">PIC</label>
                            <div class="col-sm-7">
                                <select class="form-select form-select-lg" id="pic" name="pic" required>
                                    <option value=""> Pilih PIC Barang </option>
                                    @foreach ($user as $u)
                                        @if (old('pic', $barang->id_pic) == $u->id)
                                            <option value="{{ $u->id }}" selected> {{ $u->name }}</option>
                                        @else
                                            <option value="{{ $u->id }}"> {{ $u->name }}</option>
                                        @endif
                                    @endforeach

                                </select>
                                @error('pic')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                                <p class="help-block"></p>
                            </div>
                        </div>
                        <div class="form-group d-flex justify-content-center ">

                            <a href="{{ route('databarang.index') }}" class="btn btn-info">Kembali</a> &nbsp; &nbsp;
                            <button type="submit" class="btn btn-primary">Simpan</button>

                        </div>

                </div>
                </form>


            </div>
        </div>
    </div>
@endsection
