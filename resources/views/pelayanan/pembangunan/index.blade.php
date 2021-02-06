@extends('layouts.back.master')
@section('content')
<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12">
                <div class="page-title-box">
                    <div class="row align-items-center">
                        <div class="col-md-8">
                            <h4 class="page-title mb-0">Cards</h4>
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="#">Foxia</a></li>
                                <li class="breadcrumb-item"><a href="#">UI Elements</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Cards</li>
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
		<div class="row">
			<div class="col-lg-4 ">
			    <div class="card card-body text-center">
			        <h4 class="card-title font-20 mt-0">Surat Keterangan Usaha</h4>
			        <p class="card-text">With supporting text below as a natural lead-in to additional
			            content.</p>
			        <a href="{{ route('admin.usaha') }}" class="btn btn-primary waves-effect waves-light">Buka</a>
			    </div>
			</div>
		</div>
	</div>
</div>
@stop