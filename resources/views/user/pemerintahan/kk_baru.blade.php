@extends('layouts.template.master')
@section('nav')
<nav class="bottom-navbar">
        <div class="container">
            <ul class="nav page-navigation">
              <li class="nav-item">
                <a class="nav-link" href="{{ route('user.domisili') }}">
                  <i class="mdi mdi-file-document-box menu-icon"></i>
                  <span class="menu-title">Domisili</span>
                </a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('user.skck') }}">
                  <i class="mdi mdi-file-document-box menu-icon"></i>
                  <span class="menu-title">SKCK</span>
                </a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('user.kehilangan') }}">
                  <i class="mdi mdi-file-document-box menu-icon"></i>
                  <span class="menu-title">Surat Kehilangan</span>
                </a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('user.kematian') }}">
                  <i class="mdi mdi-file-document-box menu-icon"></i>
                  <span class="menu-title">Kematian</span>
                </a>
              </li>

              
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('user.ktp') }}">
                  <i class="mdi mdi-file-document-box menu-icon"></i>
                  <span class="menu-title">  KTP </span>
                </a>
              </li>
              
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('user.kk_baru') }}">
                  <i class="mdi mdi-file-document-box menu-icon"></i>
                  <span class="menu-title">KK BARU</span>
                </a>
              </li>

              
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('user.KKmenumpang') }}">
                  <i class="mdi mdi-file-document-box menu-icon"></i>
                  <span class="menu-title"> MENUMPANG KK </span>
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
  <h4 class="card-title">Formulir permohonan KK baru </h4>
  <form action="{{ route('buat.kk_baru') }}" method="POST">
@csrf
<input type="hidden" name="user_id" value="{{ $user->id }}">

<div class="form-group">
    <label>Nama</label>
    <input type="text" class="form-control" name="nama" value="{{ $user->penduduk->nama }}">
    @if ($errors->has('nama'))
    <span class="text-danger">{{ $errors->first('nama') }}</span>
    @endif
</div>

<div class="form-group">
    <label>No KK Semula</label>
    <input type="text" class="form-control" name="no_kk" value="{{ $user->penduduk->no_kk }}">
    @if ($errors->has('no_kk'))
    <span class="text-danger">{{ $errors->first('no_kk') }}</span>
    @endif
</div>

<div class="form-group">
    <label>Nik Permohonan KK</label>
    <input type="text" class="form-control" name="nik" value="{{ $user->nik }}">
    @if ($errors->has('nik'))
    <span class="text-danger">{{ $errors->first('nik') }}</span>
    @endif
</div>


<div class="row">
<div class="col-lg-6">
<div class="form-group">
    <label> Alamat</label>
    <input type="text" class="form-control" name="alamat" value="{{ $user->penduduk->alamat }}">
    @if ($errors->has('alamat'))
    <span class="text-danger">{{ $errors->first('alamat') }}</span>
    @endif
</div>
</div>
<div class="col-lg-6">
<div class="form-group">
    <label>No_Rt</label>
    <input type="text" class="form-control" name="no_rt" value="{{ $user->penduduk->no_rt }}">
</div>
</div>
</div>
<div class="form-group">
    <label>No_Hp</label>
    <input type="text" class="form-control" name="no_hp" value="{{ $user->no_hp }}">
    @if ($errors->has('no_hp'))
    <span class="text-danger">{{ $errors->first('no_hp') }}</span>
    @endif
</div>



<div class="col-lg-6">
<div class="form-group">
    <label>Alasan</label>
    <select name="alasan" class="form-control">
  <option value="baru" {{ $user->alasan == 'baru' ? 'selected' : ''}} name="alasan">baru</option>
  <option value="hilang" {{ $user->alasan == 'hilang' ? 'selected' : ''}} name="alasan">hilang</option>
  <option value="lainnya" {{ $user->alasan == 'lainnya' ? 'selected' : ''}} name="lainnya">lainnya</option>

  </select>
</div>
</div>
<div class="col-lg-1">

<div class="form-group">
    <label>Jumlah </label>
    <input type="textarea" class="form-control" name="jumlah" value="{{ $user->jumlah }}">
    @if ($errors->has('jumlah'))
    <span class="text-danger">{{ $errors->first('jumlah') }}</span>
    @endif
</div>
</div>


<div class="row">
<div class="col-lg-6">
<div class="form-group">
    <label> Daftar Anggota Nik</label>
    <input type="textarea" class="form-control" name="daftar_anggota_nik" value="{{ $user->daftar_anggota_nik }}">
    @if ($errors->has('daftar_anggota_nik'))
    <span class="text-danger">{{ $errors->first('daftar_anggota_nik') }}</span>
    @endif
</div>
</div>
<div class="col-lg-6">
<div class="form-group">
    <label>Daftar Nama Anggota</label>
    <input type="text" class="form-control" name="daftar_nama_anggota" value="{{ $user->daftar_nama_anggota }}">
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
</div>
</div>
</div>
</div>
</div>
@stop