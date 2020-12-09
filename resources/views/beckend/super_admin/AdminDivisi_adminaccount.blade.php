@extends('layouts/main')

@section('title', 'Project Managament System - Super Admin')

@section ('container')
<div class="app-main__inner">
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-drawer icon-gradient bg-happy-itmeo">
                    </i>
                </div>
                <div>Data Admin Account
                    <div class="page-title-subheading">Tables are the backbone of almost all web applications.
                    </div>
                </div>
            </div>
            <div class="page-title-actions">
                <button type="button" data-toggle="tooltip" title="Example Tooltip" data-placement="bottom" class="btn-shadow mr-3 btn btn-dark">
                    <i class="fa fa-star"></i>
                </button>
                <div class="d-inline-block dropdown">
                    <a href="{{route('superadmin.tambahadmin_account')}}">
                        <button type="button" aria-expanded="false" class="btn-shadow btn btn-info">
                            <span class="btn-icon-wrapper pr-2 opacity-7">
                                <i class="fa fa-business-time fa-w-20"></i>
                            </span>
                            Tambah Admin
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="main-card mb-12 card">
            <div class="card-body">
                <h5 class="card-title">Table Data Admin Account</h5>
                <div class="table-responsive">
                    <table class="mb-3 table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Kontak</th>

                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 0; ?>
                            @foreach($admin as $adm_divisi)
                            <?php $no++; ?>
                            <tr>
                                <td>{{ $no }}</td>
                                <td>{{$adm_divisi -> name }}</td>
                                <td>{{$adm_divisi -> email}}</td>
                                <td>{{$adm_divisi -> tlp}}</td>


                                <td>
                                    <a href="" class="btn btn-success">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </a>
                                    <a href="/hapus_data/{{$adm_divisi -> id}}/destroy" class="btn btn-danger" onclick="return confirm('Yakin mau dihapus ?')">
                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                    </a>
                                </td>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <br><br><br><br><br><br><br><br>
    @endsection