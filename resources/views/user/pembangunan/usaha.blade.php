@extends('layouts.template.master')
@section('nav')
<nav class="bottom-navbar">
        <div class="container">
            <ul class="nav page-navigation">
              <li class="nav-item">
                <a class="nav-link" href="{{ route('user.usaha') }}">
                  <i class="mdi mdi-file-document-box menu-icon"></i>
                  <span class="menu-title">Surat Keterangan Usaha</span>
                </a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="">
                  <i class="mdi mdi-file-document-box menu-icon"></i>
                  <span class="menu-title">Surat Keterangan Umum</span>
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
            <h4 class="card-title">Surat Keterangan Usaha</h4>
            <form action="{{ route('buat.usaha') }}" method="POST">
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
                        <select name="agama" class="form-control">
      <option value="Islam" {{ $user->penduduk->agama == 'Islam' ? 'selected' : ''}} name="agama">Islam</option>
         <option value="Kristen" {{ $user->penduduk->agama == 'Kristen' ? 'selected' : ''}} name="agama">Kristen</option>
          <option value="Katolik" {{ $user->penduduk->agama == 'Katolik' ? 'selected' : ''}} name="agama">Katolik</option>
          <option value="Budha" {{ $user->penduduk->agama == 'Budha' ? 'selected' : ''}} name="agama">Budha</option>
         <option value="Konghucu" {{ $user->penduduk->agama == 'Konghucu' ? 'selected' : ''}} name="agama">Konghucu</option>
    </select>
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
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label>Nama Usaha</label>
                        <input type="text" class="form-control @error('nama_usaha') is-invalid @enderror" name="nama_usaha" value="{{ $user->penduduk->nama_usaha }}" placeholder="Nama Usaha" required autocomplete="nama_usaha" autofocus>
                        @error('nama_usaha')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label>Mulai Usaha</label>
                        <input type="text" class="form-control @error('mulai_usaha') is-invalid @enderror" name="mulai_usaha" value="{{ $user->penduduk->mulai_usaha }}" placeholder="Mulai Usaha" required autocomplete="mulai_usaha" autofocus>
                        @error('mulai_usaha')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label>Jenis Usaha</label>
                        <input type="text" class="form-control @error('jenis_usaha') is-invalid @enderror" name="jenis_usaha" value="{{ $user->penduduk->jenis_usaha }}" placeholder="Jenis Usaha" required autocomplete="jenis_usaha" autofocus>
                        @error('jenis_usaha')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label>Alamat Usaha</label>
                        <input type="text" class="form-control @error('alamat_usaha') is-invalid @enderror" name="alamat_usaha" value="{{ $user->penduduk->alamat_usaha }}" placeholder="Mulai Usaha" required autocomplete="alamat_usaha" autofocus>
                        @error('alamat_usaha')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label>Panjang Usaha</label>
                        <input type="text" class="form-control @error('panjang') is-invalid @enderror" name="panjang" value="{{ $user->penduduk->panjang }}" placeholder="Panjang Usaha" required autocomplete="panjang" autofocus>
                        @error('panjang')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label>Lebar Usaha</label>
                        <input type="text" class="form-control @error('lebar') is-invalid @enderror" name="lebar" value="{{ $user->penduduk->lebar }}" placeholder="Lebar Usaha" required autocomplete="lebar" autofocus>
                        @error('lebar')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                        @enderror
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