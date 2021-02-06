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
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="mt-0 header-title">Registrasi Penduduk</h4>
                        <div style="padding-bottom: 10px">
                            <a class="btn btn-primary btn-sm" href="{{ route('create') }}"><i class="fa fa-pencil"></i> Tambah Penduduk</a>
                        </div>
                            <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>NO KK</th>
                                        <th>NIK KK</th>
                                        <th>NAMA KK</th>
                                        <th>NIK</th>
                                        <th>NAMA</th>
                                        <th>TGL LAHIR</th>
                                        <th>NIK IBU</th>
                                        <th>NIK AYAH</th>
                                        <th>JENIS KELAMIN</th>
                                        <th>UMUR</th>
                                        <th>PENDIDIKAN</th>
                                        <th>HUB KEL</th>
                                        <th>GOL DARAH</th>
                                        <th>PERKAWINAN</th>
                                        <th>AGAMA</th>
                                        <th>ALAMAT</th>
                                        <th>KODE POS</th>
                                        <th>PEKERJAAN</th>
                                        <th>CACAT</th>
                                        <th>KECAMATAN</th>
                                        <th>KELURAHAN</th>
                                        <th>NO RT</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
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
    $('#datatable').DataTable({
        processing:true,
        serverside:true,
        ajax:"{{ route('ajax.get.penduduk') }}",
        columns:[
            {data:'no_kk', name:'no_kk'},
            {data:'nik_kk', name:'nik_kk'},
            {data:'nama_kk', name:'nama_kk'},
            {data:'nik', name:'nik'},
            {data:'nama', name:'nama'},
            {data:'tggl_lhr', name:'tggl_lhr'},
            {data:'nik_ibu', name:'nik_ibu'},
            {data:'nik_ayah', name:'nik_ayah'},
            {data:'kelamin', name:'kelamin'},
            {data:'umur', name:'umur'},
            {data:'pendidikan', name:'pendidikan'},
            {data:'hub_kel', name:'hub_kel'},
            {data:'gol_darah', name:'gol_darah'},
            {data:'perkawinan', name:'perkawinan'},
            {data:'agama', name:'agama'},
            {data:'alamat', name:'alamat'},
            {data:'kode_pos', name:'kode_pos'},
            {data:'pekerjaan', name:'pekerjaan'},
            {data:'cacat', name:'cacat'},
            {data:'kecamatan', name:'kecamatan'},
            {data:'kelurahan', name:'kelurahan'},
            {data:'no_rt', name:'no_rt'},
        ]
    });
} );
</script>
@endsection
