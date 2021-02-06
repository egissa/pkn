@extends('layouts.back.master')
@section('content')
<div class="content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="row align-items-center">
                        <div class="col-md-8">
                            <h4 class="page-title mb-0">Data Penduduk</h4>
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="#">Foxia</a></li>
                                <li class="breadcrumb-item"><a href="#">Tables</a></li>
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
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">

                        <h4 class="mt-0 header-title">Registrasi Jabatan</h4>
                        <form action="{{ route('createjabatan') }}" method="POST">
                        	@csrf
                        	<div class="form-group row">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Nama</label>
                                <div class="col-sm-10">
                                    <input class="form-control" name="nama" type="text" value="{{ old('nip') }}" id="example-text-input" placeholder="Masukkan Nama">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Nip</label>
                                <div class="col-sm-10">
                                    <input class="form-control" name="nip" type="text" value="{{ old('nip') }}" id="example-text-input" placeholder="Masukkan NIP">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Jabatan</label>
                                <div class="col-sm-10">
                                    <input class="form-control" name="jabatan" type="text" value="{{ old('jabatan') }}" id="example-text-input" placeholder="Isi Jabatan Lurah / a.n. Lurah">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Jabatan2</label>
                                <div class="col-sm-10">
                                    <input class="form-control" name="jabatan2" type="text" value="{{ old('jabatan2') }}" id="example-text-input" placeholder="Jabatan 2 Boleh Kosong Khusu Lurah">
                                </div>
                            </div>
                            <div class="form-group row">
                            	<label class="col-sm-2 col-form-label"></label>
                            	<div class="col-sm-10">
                            		<button class="btn btn-primary btn-sm float-right"><i class="fa fa-save"></i> Simpan</button>
                            	</div>
                            </div>
                        </form>
                    </div>
                </div>
            </div> <!-- end col -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">

                        <h4 class="mt-0 header-title">Registrasi Jabatan</h4>
                            <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
                                <thead>
                                    <tr>
                                    	<th>No</th>
                                    	<th>Nama</th>
                                    	<th>Nip</th>
                                    	<th>Jabatan</th>
                                        <th>Jabatan 2</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($jabatan as $item)
                                    <tr>
                                    	<td>{{ $loop->iteration }}</td>
                                    	<td>{{ $item->nama }}</td>
                                    	<td>{{ $item->nip }}</td>
                                    	<td>{{ $item->jabatan }}</td>
                                        <td>{{ $item->jabatan2 }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->

    </div> <!-- container-fluid -->
@endsection
@section('footer')
<script>
    $(document).ready(function() {
    $('#datatable').DataTable();
    } );
</script>
@stop