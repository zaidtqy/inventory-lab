@extends('layouts.default')

@section('content')
<!-- Animated -->
<div class="animated fadeIn">
    <!-- Widgets  -->
    <div class="row">
        <div class="col-lg-6 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="stat-widget-five">
                        <div class="stat-icon dib flat-color-1">
                            <i class="pe-7s-box2"></i>
                        </div>
                        <div class="stat-content">
                            <div class="text-left dib">
                            <div class="stat-text"><span class="count">{{ $psidasar['dipakai'] }}</span> barang dipakai</div>
                                <div class="stat-heading">Laboratorium Psikologi Dasar</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-6 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="stat-widget-five">
                        <div class="stat-icon dib flat-color-4">
                            <i class="pe-7s-close-circle"></i>
                        </div>
                        <div class="stat-content">
                            <div class="text-left dib">
                                <div class="stat-text"><span class="count">{{ $psidasar['rusak'] }}</span> barang rusak</div>
                                <div class="stat-heading">Laboratorium Psikologi Dasar</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-6 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="stat-widget-five">
                        <div class="stat-icon dib flat-color-3">
                            <i class="pe-7s-box2"></i>
                        </div>
                        <div class="stat-content">
                            <div class="text-left dib">
                            <div class="stat-text"><span class="count">{{ $psimenengah['dipakai'] }}</span> barang dipakai</div>
                                <div class="stat-heading">Laboratorium Psikologi Menengah</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-6 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="stat-widget-five">
                        <div class="stat-icon dib flat-color-4">
                            <i class="pe-7s-close-circle"></i>
                        </div>
                        <div class="stat-content">
                            <div class="text-left dib">
                                <div class="stat-text"><span class="count">{{ $psimenengah['rusak'] }}</span> barang rusak</div>
                                <div class="stat-heading">Laboratorium Psikologi Menengah</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-6 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="stat-widget-five">
                        <div class="stat-icon dib flat-color-6">
                            <i class="pe-7s-box2"></i>
                        </div>
                        <div class="stat-content">
                            <div class="text-left dib">
                            <div class="stat-text"><span class="count">{{ $psilanjut['dipakai'] }}</span> barang dipakai</div>
                                <div class="stat-heading">Laboratorium Psikologi Lanjut</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-6 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="stat-widget-five">
                        <div class="stat-icon dib flat-color-4">
                            <i class="pe-7s-close-circle"></i>
                        </div>
                        <div class="stat-content">
                            <div class="text-left dib">
                                <div class="stat-text"><span class="count">{{ $psilanjut['rusak'] }}</span> barang rusak</div>
                                <div class="stat-heading">Laboratorium Psikologi Lanjut</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Widgets -->
    <!--  /Traffic -->
    <div class="clearfix"></div>
</div>
@endsection

@push('after-script')

@endpush