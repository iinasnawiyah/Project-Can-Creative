@extends('layouts/AdminAccount')

@section('title', 'Data Project - Admin Account')

@section ('container')
                    <div class="app-main__inner">
                        <div class="app-page-title">
                            {{-- <a href="dataadmin.tambah" class="btn btn-icon icon-right btn-primary"><i class="pe-7s-add-user"> Tambah Data</i></a>
                                <br><br> --}}
                        <div class="tab-content">
                            <div class="tab-pane tabs-animation fade show active" id="tab-content-1" role="tabpanel">
                                <div class="row">
                                    <div class="col-md-4">
                                        <a href="{{route('superadmin.admindivisi.adminaccount')}}">
                                            <div  class="main-card mb-3 card">
                                                <img width="317px" height="210" src="{{url('template/assets/images/adproject.png')}}" alt="Card image cap" class="card-img-top">
                                                <div class="card-body">
                                                    <h5 class="card-title">Tambah Project</h5>
                                                </div>
                                            </div>
                                        </a>
                                       
                                    </div>
                                    <div class="col-md-4">
                                        <a href="{{route('AdminAccount.project.praproduksi')}}">
                                            <div  class="main-card mb-3 card">
                                                <img width="317px" height="210" src="{{url('template/assets/images/projectplanning.png')}}" alt="Card image cap" class="card-img-top">
                                                <div class="card-body">
                                                    <h5 class="card-title">Pra-Produksi</h5>
                                                </div>
                                            </div>
                                        </a>
                                       
                                    </div>
                                    <div class="col-md-4">
                                        <a href="{{route('AdminAccount.project.produksi')}}">
                                            <div  class="main-card mb-3 card">
                                                <img width="317px" height="210" src="{{url('template/assets/images/produksi.png')}}" alt="Card image cap" class="card-img-top">
                                                <div class="card-body">
                                                    <h2 class="card-title">Produksi</h2>
                                                </div>
                                            </div>
                                        </a>
                                       
                                    </div>
                                    <div class="col-md-4">
                                        <a href="{{route('AdminAccount.project.pascaproduksi')}}">
                                            <div  class="main-card mb-3 card">
                                                <img width="317px" height="210" src="{{url('template/assets/images/pascaproduksi.png')}}" alt="Card image cap" class="card-img-top">
                                                <div class="card-body">
                                                    <h2 class="card-title">Pasca-PRODUKSI</h2>
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