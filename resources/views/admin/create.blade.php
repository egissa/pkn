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
                    <form action="{{ route('store_nik') }}" method="post">
                        @csrf
                        <div class="form-group row">
                            <label for="" class="col-sm-2 col-form-label">Nik</label>
                            <div class="col-sm-10">
                                <input class="form-control @error('nik') is-invalid @enderror" type="text" name="nik" value="{{ old('nik') }}">
                                @error('nik')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
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