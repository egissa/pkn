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
      <div class="col-md-4 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            
          </div>
      </div>
    </div>
    <div class="col-md-8 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            
          </div>
      </div>
    </div>
  </div>
</div>
@stop