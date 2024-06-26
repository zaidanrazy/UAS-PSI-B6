<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Cetak</title>

    <style>
        .page-header {
            position: absolute !important;
            top: 0mm !important;
            width: 100% !important;
        }

        .page-footer {
            position: fixed !important;
            bottom: 0 !important;
            width: 100% !important;
        }
    </style>
</head>

<body>


    {{-- <div class="form-group"> --}}
    <div class="page-header">
        <img src="{!! asset('assets/images/header.png') !!}" alt="header" style="max-width: 100%;">
    </div>
    <div class="page-footer">
        <img src="{!! asset('assets/images/footer.png') !!}" alt="footer" style="max-width: 100%;">
    </div>
    <table class="table-sm table table-striped ms-auto" style="margin-top: 190px;">
        <thead>
            <tr>
                <th style="text-align: center;">No</th>
                <th style="text-align: center;">Barcode</th>
                <th style="text-align: center;">Barang</th>
                <th style="text-align: center;">Peminjaman</th>
                <th style="text-align: center;">Pic</th>
                <th style="text-align: center;">Pinjam</th>
                <th style="text-align: center;">Tgl Pinjam</th>
                <th style="text-align: center;">Tgl Kembali</th>
                <th style="text-align: center;">Status</th>
                {{-- <th style="text-align: center;">Gambar Akhir </th>
                <th style="text-align: center;">Message </th> --}}

            </tr>
        </thead>
        <tbody>
            @php
                $count = 0; // Inisialisasi variabel penghitung
            @endphp
            @foreach ($cetak as $p)
                @if ($p->status != 'menunggu' && $p->status != 'diterima')
                    @if (auth()->user()->is_admin === 'admin' || auth()->user()->is_admin === 'pic' || auth()->user()->is_admin === 'user')
                        <tr>

                            @php
                                $count++;
                            @endphp
                            {{-- <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <span class="user-name">{{ auth()->user()->name }}<i
                                                class="fa fa-angle-down"></i></span>
                                    </a> --}}
                            <td style="text-align: center; font-size: 14px">{{ $count }}</td>
                            <td style="text-align: center; font-size: 14px">{{ $p->barcode }}</td>
                            <td style="text-align: center; font-size: 14px">{{ $p->barang }}</td>
                            <td style="text-align: center; font-size: 14px">{{ $p->nama_peminjam }}
                            </td>
                            <td style="text-align: center; font-size: 14px">{{ $p->nama_pic }}</td>
                            <td style="text-align: center; font-size: 14px">{{ $p->qty_barang }}
                            </td>
                            <td style="text-align: center;  font-size: 14px">
                                {{ \Carbon\Carbon::parse($p->tgl_pinjam)->isoFormat('D MMMM YYYY HH:ss') }}
                            </td>
                            <td style="text-align: center;  font-size: 14px">
                                {{ \Carbon\Carbon::parse($p->tgl_kembali_real)->isoFormat('D MMMM YYYY HH:ss') }}
                            </td>

                            <td style="text-align: center;">
                                @if ($p->status == 'selesai')
                                    <div class="mt-1"> <button
                                            style="padding: 5px 10px; border: none; border-radius: 5px; font-size: small; font-weight: bold; width: 75px;"
                                            class="btn-sm">Selesai</button>
                                    </div>
                                @elseif ($p->status == 'telat')
                                    <div class="mt-1"> <button
                                            style="padding: 5px 10px; border: none; border-radius: 5px; font-size: small; font-weight: bold; width: 75px;"
                                            class="btn-sm">Terlambat</button>
                                    </div>
                                @elseif ($p->status == 'ditolak')
                                    <div class="mt-1"> <button
                                            style=" padding: 5px 10px; border: none; border-radius: 5px; font-size: small; width: 60px; font-weight: bold; width: 75px;"
                                            class="btn-sm">Ditolak
                                    </div>
                                @endif
                            </td>
                            {{-- <td style="text-align: center; font-size: 14px">
                                @if ($p->image_new != null || $p->image_new != '')
                                    <img src="{{ asset('storage/' . $p->image_new) }}"
                                        class="rounded img-fluid img-rounded w-25 h-25" style="width: 120px">
                                @endif
                            </td>
                            <td style="text-align: center;  font-size: 14px">{{ $p->mark }}
                            </td> --}}
                        </tr>
                    @endif
                @endif
            @endforeach
        </tbody>
        {{-- </div> --}}
    </table>
    </div>
    </div>

    <script>
        window.print();
    </script>
</body>

</html>
