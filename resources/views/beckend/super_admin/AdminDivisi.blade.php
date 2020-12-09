@extends('layouts/main')

@section('title', 'Data Admin - Super Admin')

@section ('container')
<div class="app-main__inner">
    <div class="app-page-title">
        {{-- <a href="dataadmin.tambah" class="btn btn-icon icon-right btn-primary"><i class="pe-7s-add-user"> Tambah Data</i></a>
                                <br><br> --}}
        <div class="tab-content">
            <div class="tab-pane tabs-animation fade show active" id="tab-content-1" role="tabpanel">
                <div class="row">
                    <!-- <div class="col-md-4">
                        <a href="{{route('superadmin.tambahadmindivisi')}}">
                            <div class="main-card mb-3 card">
                                <img width="317px" height="210" src="{{url('template/assets/images/2978471-removebg-preview.png')}}" alt="Card image cap" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title">TAMBAH ADMIN</h5>
                                </div>
                            </div>
                        </a>

                    </div> -->
                    <div class="col-md-4">
                        <a href="{{route('superadmin.admindivisi.adminaccount')}}">
                            <div class="main-card mb-3 card">
                                <img width="317px" height="210" src="{{url('template/assets/images/adminaccount.png')}}" alt="Card image cap" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title">ADMIN ACCOUNT</h5>
                                </div>
                            </div>
                        </a>

                    </div>
                    <div class="col-md-4">
                        <a href="{{route('superadmin.admindivisi.admininfo')}}">
                            <div class="main-card mb-3 card">
                                <img width="317px" height="210" src="{{url('template/assets/images/898-removebg-preview.png')}}" alt="Card image cap" class="card-img-top">
                                <div class="card-body">
                                    <h2 class="card-title">ADMIN INFO</h2>
                                </div>
                            </div>
                        </a>

                    </div>
                    <div class="col-md-4">
                        <a href="{{route('superadmin.admindivisi.adminproduksi')}}">
                            <div class="main-card mb-3 card">
                                <img width="317px" height="210" src="{{url('template/assets/images/adminproduction.png')}}" alt="Card image cap" class="card-img-top">
                                <div class="card-body">
                                    <h2 class="card-title">ADMIN PRODUKSI</h2>
                                </div>
                            </div>
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection