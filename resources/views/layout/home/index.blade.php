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
                    <div class="panel panel-white">
                        {{-- <div class="panel-heading clearfix">
                            <h3 class="panel-title">Sales</h3>
                        </div> --}}
                        <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script>
                        <div style="display: flex; justify-content: center;     ">
                            <dotlottie-player src="https://lottie.host/cd9233b8-0c76-4973-b7fb-fa192c6f08b2/39wvmD2QGO.json"
                                background="transparent" speed="1" style="width: 300px; height: 300px;" loop autoplay>
                            </dotlottie-player>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
