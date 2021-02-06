@extends('layouts.back.master')
@section('content')
<div class="content">
    <div class="container-fluid">
                                <div class="row">
                            <div class="col-sm-12">
                                <div class="page-title-box">
                                    <div class="row align-items-center">
                                        <div class="col-md-8">
                                            <h4 class="page-title mb-0">Form Elements</h4>
                                            <ol class="breadcrumb m-0">
                                                <li class="breadcrumb-item"><a href="#">Foxia</a></li>
                                                <li class="breadcrumb-item"><a href="#">Forms</a></li>
                                                <li class="breadcrumb-item active" aria-current="page">Form Elements</li>
                                            </ol>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="float-right d-none d-md-block">
                                                <div class="dropdown">
                                                    <button class="btn btn-primary btn-rounded dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="ti-settings mr-1"></i> Settings
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated">
                                                        <a class="dropdown-item" href="#">Action</a>
                                                        <a class="dropdown-item" href="#">Another action</a>
                                                        <a class="dropdown-item" href="#">Something else here</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#">Separated link</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="mt-0 header-title">Textual inputs</h4>
                    <form action="{{ route('store_penduduk',[$user->id]) }}" method="post">
                        @csrf
                      <input type="hidden" name="user_id" value="{{ $user->id }}">
                        <div class="form-group row">
                            <label for="" class="col-sm-2 col-form-label">No KK</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="no_kk" value="{{ old('no_kk') }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-2 col-form-label">Nik KK</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="nik_kk" value="{{ old('nik_kk') }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-2 col-form-label">Nama KK</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="nama_kk" value="{{ old('nama_kk') }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-2 col-form-label">Nik</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="nik" value="{{ $user->nik }}" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="nama" value="{{ old('nama') }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="tggl_lhr" value="{{ old('tggl_lhr') }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-2 col-form-label">Nik Ibu</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="nik_ibu" value="{{ old('nik_ibu') }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-2 col-form-label">Nik Ayah</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="nik_ayah" value="{{ old('nik_ayah') }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="kelamin" value="{{ old('kelamin') }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-2 col-form-label">Umur</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="umur" value="{{ old('umur') }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-2 col-form-label">Pendidikan</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="pendidikan" value="{{ old('pendidikan') }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-2 col-form-label">Hub Keluarga</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="hub_kel" value="{{ old('hub_kel') }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-2 col-form-label">Golongan Darah</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="gol_darah" value="{{ old('gol_darah') }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-2 col-form-label">Perkawinan</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="perkawinan" value="{{ old('perkawinan') }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-2 col-form-label">Agama</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="agama" value="{{ old('agama') }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-2 col-form-label">Alamat</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="alamat" value="{{ old('alamat') }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-2 col-form-label">Kode Pos</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="kode_pos" value="{{ old('kode_pos') }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-2 col-form-label">Pekerjaan</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="pekerjaan" value="{{ old('pekerjaan') }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-2 col-form-label">Cacat</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="cacat" value="{{ old('cacat') }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-2 col-form-label">Kecamatan</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="kecamatan" value="{{ old('kecamatan') }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-2 col-form-label">Kelurahan</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="kelurahan" value="{{ old('kelurahan') }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-2 col-form-label">No RT</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="no_rt" value="{{ old('no_rt') }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary btn-md float-right"><i class="fa fa-save"></i>  Simpan</button>
                                </div>
                        </div>
                    </form>
                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->
    </div>
</div>
@endsection