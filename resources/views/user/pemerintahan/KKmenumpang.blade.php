@extends('layouts.template.master')
@section('nav')
<div class="content">
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
                  <a class="nav-link" href="{{ route('user.kk_baru') }}">
                  <i class="mdi mdi-file-document-box menu-icon"></i>
                  <span class="menu-title">   KK  BARU </span>
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

@endsection
@section('content')
<div class="content-wrapper">
<div class="row">
    <div class="col-12 grid-margin stretch-card">
      <div class="card">
<div class="card-body">
  <h4 class="card-title">  Menumpang KK  </h4>
  <form action="{{ route('buat.KKmenumpang') }}" method="POST">
@csrf
<input type="hidden" name="user_id" value="{{ $user->id }}">

<div class="form-group">
    <label>Nama KK lama</label>
    <input type="text" class="form-control" name="nama_kk_lama" value="{{ $user->nama_kk_lama }}">
    @if ($errors->has('menumpang_kartukeluarga'))
    <span class="text-danger">{{ $errors->first('menumpang_kartukeluarga') }}</span>
    @endif
</div>

<div class="form-group">
    <label>No KK lama </label>
    <input type="text" class="form-control" name="no_kk_lama" value="{{ $user->no_kk_lama }}">
    @if ($errors->has('no_kk_lama'))
    <span class="text-danger">{{ $errors->first('no_kk_lama') }}</span>
    @endif
</div>

<div class="form-group">
    <label>Nik KK lama </label>
    <input type="text" class="form-control" name="nik_kk_lama" value="{{ $user->nik_kk_lama }}">
    @if ($errors->has('nik_kk_lama'))
    <span class="text-danger">{{ $errors->first('nik_kk_lama') }}</span>
    @endif
</div>


<div class="form-group">
    <label>Nama KK Ditempati </label>
    <input type="text" class="form-control" name="nama_kk_ditempati" value="{{ $user->nama_kk_ditempati }}">
    @if ($errors->has('nama_kk_ditempati'))
    <span class="text-danger">{{ $errors->first('nama_kk_ditempati') }}</span>
    @endif
</div>


<div class="form-group">
    <label>No  KK Ditempati </label>
    <input type="text" class="form-control" name="no_kk_ditempati" value="{{ $user->no_kk_ditempati }}">
    @if ($errors->has('no_kk_ditempati'))
    <span class="text-danger">{{ $errors->first('no_kk_ditempati') }}</span>
    @endif
</div>


<div class="form-group">
    <label>Nik KK Ditempati </label>
    <input type="text" class="form-control" name="nik_kk_ditempati" value="{{ $user->nik_kk_ditempati }}">
    @if ($errors->has('nik_kk_ditempati'))
    <span class="text-danger">{{ $errors->first('nik_kk_ditempati') }}</span>
    @endif
</div>


<div class="row">
<div class="col-lg-6">
<div class="form-group">
    <label> Alamat_kk_ditempati</label>
    <input type="text" class="form-control" name="alamat_kk_ditempati" value="{{ $user->alamat_kk_ditempati }}">
    @if ($errors->has('alamat_kk_ditempati'))
    <span class="text-danger">{{ $errors->first('alamat_kk_ditempati') }}</span>
    @endif
</div>
</div>
<div class="col-lg-6">
<div class="form-group">
    <label>no_rt</label>
    <input type="text" class="form-control" name="no_rt" value="{{ $user->no_rt }}">
</div>
</div>
</div>
<div class="form-group">
    <label>kota</label>
    <input type="text" class="form-control" name="kota" value="{{ $user->kota }}">
    @if ($errors->has('kota'))
    <span class="text-danger">{{ $errors->first('kota') }}</span>
    @endif
</div>



<div class="row">
<div class="col-lg-6">
<div class="form-group">
    <label> kelurahan</label>
    <input type="text" class="form-control" name="kelurahan" value="{{ $user->kelurahan }}">
    @if ($errors->has('kelurahan'))
    <span class="text-danger">{{ $errors->first('kelurahan') }}</span>
    @endif
</div>
</div>
<div class="col-lg-6">
<div class="form-group">
    <label>Kabupaten/kota</label>
    <input type="text" class="form-control" name="kota" value="{{ $user->kota }}">
</div>
</div>
</div>



<div class="row">
<div class="col-lg-6">
<div class="form-group">
    <label> kecamatan</label>
    <input type="text" class="form-control" name="kecamatan" value="{{ $user->kecamatan }}">
    @if ($errors->has('kelurahan'))
    <span class="text-danger">{{ $errors->first('kecamatan') }}</span>
    @endif
</div>
</div>
<div class="col-lg-6">
<div class="form-group">
    <label>provinsi</label>
    <input type="text" class="form-control" name="provinsi" value="{{ $user->provinsi }}">
</div>
</div>
</div>

<div class="col-lg-6">
<div class="form-group">
    <label>no_hp</label>
    <input type="text" class="form-control" name="no_hp" value="{{ $user->no_hp }}">
    @if ($errors->has('no_hp'))
    <span class="text-danger">{{ $errors->first('no_hp') }}</span>
    @endif
</div>
</div>




<div class="col-lg-6">
<div class="form-group">
    <label>alasan_menumpang</label>
    <select name="alasan_menumpang" class="form-control">
  <option value="baru" {{ $user->alasan == 'baru' ? 'selected' : ''}} name="alasan">baru</option>
  <option value="hilang" {{ $user->alasan == 'hilang' ? 'selected' : ''}} name="alasan">hilang</option>
  <option value="lainnya" {{ $user->alasan == 'lainnya' ? 'selected' : ''}} name="lainnya">lainnya</option>

  </select>
</div>
</div>
<div class="col-lg-6">

<div class="form-group">
    <label>jumlah anggota keluarga pengikut</label>
    <input type="textarea" class="form-control" name="jumlah_anggota_menumpang" value="{{ $user->jumlah_anggota_menumpang }}">
    @if ($errors->has('jumlah'))
    <span class="text-danger">{{ $errors->first('jumlah') }}</span>
    @endif
</div>
</div>


<div class="row">
<div class="col-lg-6">
<div class="form-group">
    <label> daftar_anggota_nik</label>
    <input type="textarea" class="form-control" name="daftar_anggota_nik" value="{{ $user->daftar_anggota_nik }}">
    @if ($errors->has('daftar_anggota_nik'))
    <span class="text-danger">{{ $errors->first('daftar_anggota_nik') }}</span>
    @endif
</div>
</div>
<div class="col-lg-6">
<div class="form-group">
    <label>daftar_nama_anggota</label>
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
</div>

@endsection