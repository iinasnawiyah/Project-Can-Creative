@extends('layouts/main')

@section('title', 'Data Admin - Super Admin')

@section ('container')
<div class="app-main__inner">
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-graph text-success">
                    </i>
                </div>
                <div>Tambah Admin Account
                    <div class="page-title-subheading">Build whatever layout you need with our Architect framework.
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="tab-content">
        <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
            <div class="main-card mb-3 card">
                <div class="card-body">
                    <h5 class="card-title">TAMBAH ADMIN ACCOUNT</h5>

                    @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status')}}
                    </div>
                    @endif
                    <form method="POST" action="{{route('prosesTambahadmin_account')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="position-relative form-group"><label for="exampleEmail11" class="">Email</label>
                                    <input name="email" id="email" placeholder="email" type="email" class="form-control"></div>
                                @error('email')<div class="invalid-feedback">{{$message}}</div> @enderror
                            </div>
                            <div class="col-md-6">
                                <div class="position-relative form-group"><label for="examplePassword11" class="">Password</label>
                                    <input name="password" id="examplePassword11" placeholder="password" type="password" class="form-control"></div>
                                @error('password')<div class="invalid-feedback">{{$message}}</div> @enderror
                            </div>
                        </div>
                        <div class="position-relative form-group"><label for="exampleAddress" class="">Nama</label>
                            <input name="name" id="name" placeholder="nama" type="text" class="form-control"></div>
                        @error('nama')<div class="invalid-feedback">{{$message}}</div> @enderror
                        <div class="position-relative form-group"><label for="exampleAddress2" class="">Alamat</label>
                            <input name="alamat" id="alamat" placeholder="alamat" type="text" class="form-control">
                            @error('alamat')<div class="invalid-feedback">{{$message}}</div> @enderror
                        </div>
                        <div class="form-row">
                            <select class="form-control" name="adm_role" id="inlineFormCustomSelect">
                                <option selected>Pilih Divisi</option>
                                <?php

                                use Illuminate\Support\Facades\DB;

                                $role = DB::table('role_admin')->get(); ?>
                                @foreach($role as $item)
                                <option value="{{$item->id}}">{{$item->adm_role_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <button class="mt-2 btn btn-primary">Tambah</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection