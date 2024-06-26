@extends('layout.main')
@section('tes')
    <style>
        .card-body {
            position: relative;
            /* width: 400px;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    height: 450px; */
            background: transparent;
            border: 20px solid rgba(255, 255, 255, 0.5);
            border-radius: 50px;
            backdrop-filter: blur(100px);
            display: flex;
            /* justify-content: center; */
        }

        .transparent-card {
            background: rgb(228, 223, 223);
            /* border: 2px solid rgba(100, 1, 1, 0.1); */
            border-radius: 10px;
            backdrop-filter: blur(200px);
            /* background-color: rgba(255, 255, 255, 0.5);
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        border: none;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        box-shadow: none; */
        }

        align-items: center;
        */
    </style>


    <div class="page-inner">
        <div class="page-title">
            <h3 class="breadcrumb-header">Dashboard</h3>
            <div class="page-breadcrumb">
                <ol class="breadcrumb breadcrumb-with-header">
                </ol>
            </div>
        </div>

        {{-- isi --}}
        {{-- <div id="main-wrapper">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-white">
                        <div class="panel-heading clearfix">
                            <h3 class="panel-title">Sales</h3>
                            <div class="panel-control">

                            </div>

                            <li class=icon-energy></li>
                        </div>
                    </div>
                </div>

            </div>
        </div> --}}

        <div id="main-wrapper">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-white ">
                        {{-- <div class="panel-heading clearfix">
                            <h3 class="panel-title">Sales</h3>
                        </div> --}}
                        <div class="woi">
                            <div class="card-body  border-radius: 10px; rounded d-flex align-items-center"
                                style="height: 250px;">
                                <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script>
                                {{-- <div style="display: flex; justify-content: left;"> --}}
                                <div class="ms-6" style="margin-left: 100px";>
                                    <dotlottie-player
                                        src="https://lottie.host/cd9233b8-0c76-4973-b7fb-fa192c6f08b2/39wvmD2QGO.json"
                                        background="transparent" speed="1"
                                        style="width: 220px; height: 200px; margin-right:20px;" loop autoplay>
                                    </dotlottie-player>
                                </div>
                                {{-- </div> --}}
                                <div class="flex-grow-1 mr-3">
                                    <h3 class="mb-3">
                                        <span class="font-weight-bold text-white">Assalamualaikum warahmatullāhi wabarakātuh
                                            <br>
                                            {{ auth()->user()->name }}</span>
                                        {{-- <box-icon type="solid" name="rocket" size="lg" rotate="90"></box-icon> --}}
                                        <i class='bx bxs-rocket bx-fade-up bx-md'></i>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="uy">
                <div class="panel panel-primary transparent-card">

                    <div class="row row-cols-1 row-cols-md-2 row-cols-xl-4 row-group g-0">
                        <div class="col">
                            <div class="panel-body">
                                <div class="d-flex align-items-center">
                                    <div class="">
                                        {{-- <i class="bx bxs-user fs-3 text-white"></i> --}}

                                        @php
                                            $barangSelesai = \App\Models\Peminjaman::where('status', 'selesai')->count();
                                            $barangMenunggu = \App\Models\Peminjaman::where('status', 'menunggu')->count();
                                            $barangDiterima = \App\Models\Peminjaman::where('status', 'diterima')->count();
                                            $barang = \App\Models\Barang::whereNotNull('barang')->count();

                                            // if (auth()->user()->is_admin === 'admin' || auth()->user()->is_admin === 'user') {
                                            //     $pendingRequestCountt = App\Models\Peminjaman::whereIn('status', ['menunggu', 'diterima', 'ditolak', 'selesai'])->count();
                                            // } else {
                                            //     $pendingRequestCountt = App\Models\Peminjaman::where('id_pic', auth()->user()->id)
                                            //         ->whereIn('status', ['menunggu', 'diterima', 'ditolak', 'selesai'])
                                            //         ->count();
                                            // }

                                        @endphp

                                        <p class="mb-0 text-white">Barang Dipinjam</p>
                                        <h4 class="my-1 text-white"> {{ $barangDiterima }}</h4>

                                    </div>
                                    <div class="widgets-icons fs-3 bg-light-transparent ms-auto"> <i
                                            class='bx bx-sitemap bx-border bx-lg fs-10 text-white'></i>
                                    </div>

                                </div>
                                <div class="progress my-3" style="height:4px;">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="25" aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="panel-body">
                                <div class="d-flex align-items-center">
                                    <div class="">
                                        <p class="mb-0">Barang Selesai</p>
                                        <h4 class="my-1 text-white">{{ $barangSelesai }}</h4>

                                    </div>
                                    <div class="widgets-icons bg-light-transparent  ms-auto"> <i
                                            class='bx bx-message-square-check bx-lg bx-border fs-3 text-white'></i>
                                    </div>

                                </div>
                                <div class="progress my-3" style="height:4px;">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="25" aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>
                                {{-- <div class="d-flex align-items-center text-white">
                                    <p class="mb-0">New</p>
                                    <p class="mb-0 ms-auto">
                                        <span>2</span>
                                    </p>
                                </div>
                                <div class="d-flex align-items-center text-white">
                                    <p class="mb-0">Continue</p>
                                    <p class="mb-0 ms-auto">
                                        <span>10</span>
                                    </p>
                                </div>
                                <div class="d-flex align-items-center text-white">
                                    <p class="mb-0">Complete</p>
                                    <p class="mb-0 ms-auto">
                                        <span>0</span>
                                    </p>
                                </div>
                                <div class="d-flex align-items-center text-white">
                                    <p class="mb-0">Close</p>
                                    <p class="mb-0 ms-auto">
                                        <span>35</span>
                                    </p>
                                </div> --}}
                            </div>
                        </div>
                        <div class="col">
                            <div class="panel-body">
                                <div class="d-flex align-items-center">
                                    <div class="">
                                        <p class="mb-0 text-white ">Barang Menunggu</p>
                                        <h4 class="my-1 text-white ">{{ $barangMenunggu }}</h4>

                                    </div>
                                    <div class="widgets-icons bg-light-transparent  ms-auto"> <i
                                            class='bx bx-time bx-border bx-lg fs-3 text-white'></i>
                                    </div>
                                </div>
                                <div class="progress my-3" style="height:4px;">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="25" aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="panel-body">
                                <div class="d-flex align-items-center">
                                    <div class="">
                                        <p class="mb-0 text-white ">Total Barang</p>
                                        <h4 class="my-1 text-white ">{{ $barang }}</h4>

                                    </div>
                                    <div class="widgets-icons bg-light-transparent  ms-auto"> <i
                                            class='bx bx-chalkboard  bx-border bx-lg fs-3 text-white'></i>
                                    </div>
                                </div>
                                <div class="progress my-3" style="height:4px;">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="25" aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
