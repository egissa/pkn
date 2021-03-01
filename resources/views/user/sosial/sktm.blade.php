@extends('layouts.template.master')
@section('nav')
<nav class="bottom-navbar">
        <div class="container">
            <ul class="nav page-navigation">
              <li class="nav-item">
                <a class="nav-link" href="">
                  <i class="mdi mdi-file-document-box menu-icon"></i>
                  <span class="menu-title">Surat Belom Pernah menikah</span>
                </a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('sktm') }}">
                  <i class="mdi mdi-file-document-box menu-icon"></i>
                  <span class="menu-title">Surat SKTM</span>
                </a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="">
                  <i class="mdi mdi-file-document-box menu-icon"></i>
                  <span class="menu-title">Surat Keterangan Beasiswa</span>
                </a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="">
                  <i class="mdi mdi-file-document-box menu-icon"></i>
                  <span class="menu-title">Surat Keterangan Tdk Mampu (BPJS Kesehatan)</span>
                </a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="">
                  <i class="mdi mdi-file-document-box menu-icon"></i>
                  <span class="menu-title">Surat Keterangan TTI & TTII</span>
                </a>
              </li>
            </ul>
        </div>
      </nav>
@stop
@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                        @if ($hasil < 30)
                        <h4 class="card-title">Surat keterangan Tidak Mampu</h4>
                            <form action="{{ route('buat.sktm') }}" method="POST">
                            @csrf
                            <input type="hidden" name="user_id" value="{{ $user->id }}">
                            <div class="form-group">
                                    <label>Nama</label>
                                    <input type="text" class="form-control" name="nama" value="{{ $user->penduduk->nama }}">
                                    @if ($errors->has('nama'))
                                    <span class="text-danger">{{ $errors->first('nama') }}</span>
                                    @endif
                                </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Jenis Kelamin</label>
                                    <input type="text" class="form-control" name="kelamin" value="{{ $user->penduduk->kelamin }}">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Kewarganegaraan</label>
                                    <input type="text" class="form-control" name="kewarganegaraan" value="Indonesia">
                                    @if ($errors->has('nama'))
                                    <span class="text-danger">{{ $errors->first('nama') }}</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Tanggal Lahir</label>
                                    <input type="date" class="form-control" name="tggl_lhr" value="{{ $user->penduduk->tggl_lhr }}">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Agama</label>
                                    <input type="text" class="form-control" name="agama" value="{{ $user->penduduk->agama }}">
                                    @if ($errors->has('nama'))
                                    <span class="text-danger">{{ $errors->first('nama') }}</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Pekerjaan</label>
                                    <input type="text" class="form-control" name="pekerjaan" value="{{ $user->penduduk->pekerjaan }}">
                                    @if ($errors->has('nama'))
                                    <span class="text-danger">{{ $errors->first('nama') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Status Perkawinan</label>
                                    <input type="text" class="form-control" name="perkawinan" value="{{ $user->penduduk->perkawinan }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>No KTP</label>
                                    <input type="text" class="form-control" name="nik" value="{{ $user->penduduk->nik }}">
                                    @if ($errors->has('nama'))
                                    <span class="text-danger">{{ $errors->first('nama') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Alamat</label>
                                    <input type="text" class="form-control" name="alamat" value="{{ $user->penduduk->alamat }}">
                                    @if ($errors->has('nama'))
                                    <span class="text-danger">{{ $errors->first('nama') }}</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>No BDT</label>
                                    <input type="text" class="form-control" name="no_bdt" value="" placeholder="No BDT">
                                </div>
                        </div>
                        <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Nama Anak (Yang bersangkutan untuk membuat SKTM)</label>
                                    <input type="text" class="form-control" name="nama_anak" value="{{ $user->penduduk->nama_anak }}" placeholder="Nama Anak">
                                    @if ($errors->has('nama_anak'))
                                    <span class="text-danger">{{ $errors->first('nama_anak') }}</span>
                                    @endif
                                </div>
                        </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>NIS</label>
                                    <input type="text" class="form-control" name="nis" value="{{ $user->penduduk->nis }}" placeholder="NIS">
                                </div>
                        </div>
                        <div class="col-lg-4">
                                <div class="form-group">
                                    <label>Sekolah</label>
                                    <input type="text" class="form-control" name="sekolah" value="{{ $user->penduduk->sekolah }}" placeholder="Sekolah">
                                    @if ($errors->has('sekolah'))
                                    <span class="text-danger">{{ $errors->first('sekolah') }}</span>
                                    @endif
                                </div>
                        </div>
                        <div class="col-lg-4">
                                <div class="form-group">
                                    <label>Alamat Sekolah</label>
                                    <input type="text" class="form-control" name="almt_sekolah" value="{{ $user->penduduk->almt_sekolah }}" placeholder="Alamat Sekolah">
                                    @if ($errors->has('almt_sekolah'))
                                    <span class="text-danger">{{ $errors->first('almt_sekolah') }}</span>
                                    @endif
                                </div>
                        </div>
                        </div>
                        <div class="col-lg-12">
                                <div class="form-group">
                                    <label></label>
                                    <button class="btn btn-primary btn-sm float-right btn-block">Kirim</button>
                                </div>
                            </div>
                    </form>
                    @else
                        <h4 class="card-title text-center">Surat keterangan Tidak Mampu</h4>
                        <div class="text-center"><span class="bagge badge-pill badge-danger"><i class="mdi mdi-arrow-left-bold"></i> Akses Ditolak</span></div>
                        <div class="text-center">
                            <span class="badge-pill badge badge-danger"><i class="mdi mdi-account"></i>Usia Masih {{ $hasil }} Tahun</span>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@stop