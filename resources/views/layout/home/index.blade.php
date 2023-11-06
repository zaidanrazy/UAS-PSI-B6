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
        <div id="main-wrapper">
            <div class="row">
                <div class="col-md-6">
                    <div class="panel panel-white">
                        <div class="panel-heading clearfix">
                            <h3 class="panel-title">Sales</h3>
                            <div class="panel-control">
                                <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title=""
                                    class="panel-reload" data-original-title="Reload"><i class="icon-reload"></i></a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="panel-header-stats">

                                <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script>

                                <dotlottie-player
                                    src="https://lottie.host/0932913c-31d6-473c-bbcc-6680c468fe9f/GBP8sv2dQS.json"
                                    background="transparent" speed="1" style="width: 150px; height: 150px;" loop
                                    autoplay></dotlottie-player>

                                <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script>

                                <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script>

                                <dotlottie-player
                                    src="https://lottie.host/f19f6e39-f8d3-46fd-be05-8c80c2feeaa2/raIxNBk7ds.json"
                                    background="transparent" speed="1" style="width: 40; height: 40px;" loop
                                    autoplay></dotlottie-player>

                                {{-- <div class="row">
                                    <div class="col-md-3 col-xs-6">
                                        <i class="icon-basket"></i>
                                        <h4 class="no-m">$14,213</h4>
                                    </div>
                                    <div class="col-md-3 col-xs-6">
                                        <i class="icon-globe"></i>
                                        <h4 class="no-m">$374,700</h4>
                                    </div>
                                    <div class="col-md-3 col-xs-6">
                                        <i class="icon-credit-card"></i>
                                        <h4 class="no-m">$2,134</h4>
                                    </div>
                                    <div class="col-md-3 col-xs-6">
                                        <i class="icon-shield"></i>
                                        <h4 class="no-m">907</h4>
                                    </div>
                                </div> --}}
                            </div>
                            <div>
                                <canvas id="chart1" height="165"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="panel panel-white">
                        <div class="panel-heading clearfix">
                            <h3 class="panel-title">Visitors</h3>
                            <div class="panel-control">
                                <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title=""
                                    class="panel-reload" data-original-title="Reload"><i class="icon-reload"></i></a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="panel-header-stats">
                                <div class="row">
                                    <div class="col-md-3 col-xs-6">
                                        <i class="icon-users"></i>
                                        <h4 class="no-m">Total: 4500</h4>
                                    </div>
                                    <div class="col-md-3 col-xs-6">
                                        <i class="icon-user"></i>
                                        <h4 class="no-m">Male: 2600</h4>
                                    </div>
                                    <div class="col-md-3 col-xs-6">
                                        <i class="icon-user-female"></i>
                                        <h4 class="no-m">Female: 1900</h4>
                                    </div>
                                    <div class="col-md-3 col-xs-6">
                                        <i class="icon-user-follow"></i>
                                        <h4 class="no-m">Avg: 2250</h4>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <canvas id="chart2" height="165"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
