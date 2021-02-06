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
                  <span class="menu-title">Surat Permohonan Ktp </span>
                </a>
              </li>
            </ul>
        </div>
      </nav>
@stop
@section('content')
<div class="content-wrapper">
  <div class="row">
      <div class="col-md-4 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <label><b>Selamat datang
              @if (Route::has('login'))
                        @auth
                          <label class="badge badge-primary badge-sm">{{ Auth::user()->penduduk->nama }}</label>
                          @else
                          <label style="color: red;">Anonymous</label>
                        @endauth
                      @endif
            </b><br>
              Ini dipelayanan pemerintahan anda sudah terakses di website kelurahan kuala samboja <br>
              Semoga pelayanan ini memuaskan</label>
          </div>
      </div>
    </div>
    <div class="col-md-8 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">address</h4>
            <div class="row">
                    <div class="col-md-6">
                      <address>
                        <p class="font-weight-bold">Kuala Samboja.</p>
                        <p>
                          695 lsom Ave,
                        </p>
                        <p>
                           Suite 00
                        </p>
                        <p>
                          Kalimantan Timur
                        </p>
                      </address>
                    </div>
                    <div class="col-md-6">
                      <address class="text-primary">
                        <p class="font-weight-bold">
                          E-mail
                        </p>
                        <p class="mb-2">
                          kualasamboja2020@gmail.com
                        </p>
                        <p class="font-weight-bold">
                          Web Address
                        </p>
                        <p>
                          www.kelurahankualasamboja.com
                        </p>
                      </address>
                    </div>
                  </div>
          </div>
      </div>
    </div>
  </div>
</div>
@stop