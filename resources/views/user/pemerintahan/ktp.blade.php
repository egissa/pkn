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
                  <span class="menu-title">  KK baru </span>
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
  <h4 class="card-title">Surat permohonan Ktp</h4>
  <form action="{{ route('buat.ktp') }}" method="POST">
@csrf
<input type="hidden" name="user_id" value="{{ $user->id }}">

<div class="col-lg-6">
<div class="form-group">
    <label>permohonan</label>
    <select name="permohonan" class="form-control">
  <option value="baru" {{ $user->permohonan == 'baru' ? 'selected' : ''}} name="permohonan">baru</option>
  <option value="perpanjangan" {{ $user->permohonan == 'perpanjangan' ? 'selected' : ''}} name="permohonan">perpanjangan</option>
  <option value="pergantian" {{ $user->permohonan == 'pergantian' ? 'selected' : ''}} name="permohonan">pergantian</option>

  </select>
</div>
</div>

<div class="form-group">
    <label>Nama</label>
    <input type="text" class="form-control" name="nama" value="{{ $user->penduduk->nama }}">
    @if ($errors->has('nama'))
    <span class="text-danger">{{ $errors->first('nama') }}</span>
    @endif
</div>

<div class="form-group">
    <label>no_kk</label>
    <input type="text" class="form-control" name="no_kk" value="{{ $user->penduduk->no_kk }}">
    @if ($errors->has('no_kk'))
    <span class="text-danger">{{ $errors->first('no_kk') }}</span>
    @endif
</div>

<div class="form-group">
    <label>no_nik</label>
    <input type="text" class="form-control" name="no_nik" value="{{ $user->nik }}">
    @if ($errors->has('no_nik'))
    <span class="text-danger">{{ $errors->first('no_nik') }}</span>
    @endif
</div>


<div class="form-group">
    <label>alamat</label>
    <input type="text" class="form-control" name="alamat" value="{{ $user->penduduk->alamat }}">
    @if ($errors->has('no_nik'))
    <span class="text-danger">{{ $errors->first('alamat') }}</span>
    @endif
</div>

<div class="form-group">
    <label>no_rt</label>
    <input type="text" class="form-control" name="no_rt" value="{{ $user->penduduk->no_rt }}">
    @if ($errors->has('no_rt'))
    <span class="text-danger">{{ $errors->first('no_rt') }}</span>
    @endif
</div>


<div class="form-group">
    <label>kode_pos</label>
    <input type="text" class="form-control" name="kode_pos" value="{{ $user->penduduk->kode_pos }}">
    @if ($errors->has('kode_pos'))
    <span class="text-danger">{{ $errors->first('kode_pos') }}</span>
    @endif
</div>


<div class="form-group">
    <label>no_hp</label>
    <input type="text" class="form-control" name="no_hp" value="{{ $user->no_hp }}">
    @if ($errors->has('no_hp'))
    <span class="text-danger">{{ $errors->first('no_hp') }}</span>
    @endif
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