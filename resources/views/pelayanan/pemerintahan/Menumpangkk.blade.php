@extends('layouts.back.master')
@section('content')
<div class="content">
    <div class="container-fluid">


        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="row align-items-center">      
                        <div class="col-md-8">
                            <h4 class="page-title mb-0"> Menumpang KK</h4>
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

                        <h4 class="mt-0 header-title"> Kk Menumpang </h4>
                        <a href="{{ route('KKMenumpangExport') }}" class="btn btn-primary btn-sm mb-2">Export </a>
                            <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
                                <thead>
                                    <tr>
                                       
                                        <th>Nama KK Lama</th>
                                        <th> No KK Semula</th>
                                        <th> Nik  KK lama</th>
                                        <th>Nama KK Ditempati</th>
                                        <th>No KK Ditempati</th>
                                        <th>Nik KK Ditempati</th>
                                        <th>Alamat Ditempati</th>
                                        <th>No Rt </th>
                                        <!-- <th>Kelurahan </th>
                                        <th> Kota</th>
                                        <th>kecematan </th>
                                        <th>Provinsi </th>!-->
                                        <th>No Hp </th>
                                        <th> Alasan </th>
                                        <th> Jumlah nik Keluarga</th>
                                        <th> Jumlah Anggota Keluarga</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($Menumpangkk as $data)
                                    <tr>
                                        <td>{{ $data->nama_kk_lama }}</td>
                                        <td>{{ $data->no_kk_lama }}</td>
                                        <td>{{ $data->nik_kk_lama }}</td>
                                        <td>{{ $data->nama_kk_ditempati }}</td>
                                        <td>{{ $data->no_kk_ditempati }}</td>
                                        <td>{{ $data->nik_kk_ditempati }}</td>
                                        <td>{{ $data->alamat_kk_ditempati }}</td>
                                        <td>{{ $data->no_rt }}</td>
                                       <!-- <td>{{ $data->kelurahan }}</td>
                                        <td>{{ $data->kota }}</td>
                                        <td>{{ $data->kecematan }}</td>
                                        <td>{{ $data->provinsi }}</td>!-->
                                        <td>{{ $data->no_hp }}</td>
                                        <td>{{ $data->alasan_menumpang }}</td>
                                        <td>{{ $data->daftar_anggota_nik }}</td>
                                        <td>{{ $data->daftar_nama_anggota }}</td>
                                        
                                        
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
    $('#datatable').DataTable({
        responsive: true
    });
    new $.fn.dataTable.FixedHeader( table );
} );
</script>
@endsection
