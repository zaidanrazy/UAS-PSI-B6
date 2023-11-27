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

                            </div>
                            <div>
                                <canvas id="chart1" height="165"></canvas>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    @endsection
