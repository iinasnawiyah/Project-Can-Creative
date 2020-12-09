@extends('layouts/AdminAccount')

@section('title', 'Project Managament System - Admin Account')

@section ('container')
                    <div class="app-main__inner">
                        <div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div class="page-title-icon">
                                        <i class="pe-7s-drawer icon-gradient bg-happy-itmeo">
                                        </i>
                                    </div>
                                    <div>Data Project Pasca-Produksi
                                        <div class="page-title-subheading">Tabel dibawah ini merupakan list projek dalam masa produksi.
                                        </div>
                                    </div>
                                </div>
                                <div class="page-title-actions">
                                    <button type="button" data-toggle="tooltip" title="Example Tooltip" data-placement="bottom" class="btn-shadow mr-3 btn btn-dark">
                                        <i class="fa fa-star"></i>
                                    </button>
                                    <div class="d-inline-block dropdown">
                                        <button type="button" aria-expanded="false" class="btn-shadow btn btn-info">
                                            <span class="btn-icon-wrapper pr-2 opacity-7">
                                                <i class="fa fa-business-time fa-w-20"></i>
                                            </span>
                                            Tambah Project
                                        </button>
                                    </div>
                                </div>    
                            </div>
                        </div>           
                                
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Data Projek Produksi</h6>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama</th>
                                                    {{-- <th>Email</th>
                                                    <th>Nomor Hp</th>
                                                    <th>Alamat</th> --}}
                                                    <th>Karir</th>
                                                    <th>Keterangan</th>
                                                    {{-- <th>File</th> --}}
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                           
                                            
                                            {{-- <tbody>
                                                @foreach ($DataAdmin as $no => $fb)
                                                <tr>
                                                    <th>{{$no+1}}</th>
                                                    <th>{{$fb->nama}}</th>
                                                    <th>{{$fb->email}}</th>
                                                    <th>{{$fb->tlp}}</th>
                                                    <th>{{$fb->alamat}}</th>
                                                    <th>{{$fb->karir}}</th>
                                                    <th>
                                                        @if ($fb->keterangan == "belumdiverivikasi")
                                                            <button class="btn-sm btn-danger" disabled>Belum di Verifikasi</button>
                                                        @else
                                                            <button class="btn-sm btn-success" disabled>Sudah di Verifikasi</button>
                                                        @endif
                                                    </th>
                                                    <th>{{$fb->file}}</th>
                                                    <th>
                                                        <a href="dataadmin.show.{{$fb->id_admin}}" class="btn btn-success">
                                                            <i class="fa fa-eye" aria-hidden="true"></i>
                                                        </a>
                                                        
                                                        <form action="" onsubmit="return confirm('yakin ingin menghapus?')" class="d-inline" method="POST">
                                                            @method('delete')
                                                            <button class="btn btn-icon icon-left btn-danger"><i class="fas fa-trash-alt"></i></button>
                                                            @csrf
                                                        </form>
                                                    </th>
                                                </tr>
                                                @endforeach
                                            </tbody> --}}
                                            
                                        </table>
                                    </div>
                                </div>
                            </div>
                        
                        </div>
                        <!-- /.container-fluid -->
                        
                            <!-- Bootstrap core JavaScript-->
                            <script src="{{url('assets/vendor/jquery/jquery.min.js')}}"></script>
                            <script src="{{url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
                        
                            <!-- Core plugin JavaScript-->
                            <script src="{{url('assets/vendor/jquery-easing/jquery.easing.min.js')}}"></script>
                        
                            <!-- Custom scripts for all pages-->
                            <script src="{{url('assets/js/sb-admin-2.min.js')}}"></script>
                        
                            <!-- Page level plugins -->
                            <script src="{{url('assets/vendor/datatables/jquery.dataTables.min.js')}}"></script>
                            <script src="{{url('assets/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>
                        
                            <!-- Page level custom scripts -->
                            <script src="{{url('assets/js/demo/datatables-demo.js')}}"></script>
                            <br><br><br><br><br><br><br><br>
                    @endsection