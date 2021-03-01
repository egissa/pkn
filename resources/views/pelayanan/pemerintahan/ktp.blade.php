@extends('layouts.back.master')
@section('content')
<div class="content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="row align-items-center">
                        <div class="col-md-8">
                            <h4 class="page-title mb-0">Surat Permohonan Ktp</h4>
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

                        <h4 class="mt-0 header-title">Surat Permohonan Ktp</h4>
                        <a href="{{ route('KtpExport') }}" class="btn btn-primary btn-sm mb-2">Export </a>
                               
  <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>Permohonan</th>
                                        <th> Nama</th>
                                        <th>No KK</th>
                                        <th>No_nik</th>
                                        <th>Alamat</th>
                                        <th>Rt</th>
                                        <th>Kode Pos</th>
                                        <th> No HP</th>
                                        <th>Action</th>

                                                                                
                                         </tr>
                                </thead>
                                <tbody>
                                    @foreach($ktp as $data)
                                    <tr>
                                        <td>{{ $data->id }}</td>
                                        <td>{{ $data->permohonan }}</td>
                                        <td>{{ $data->nama }}</td>
                                        <td>{{ $data->no_kk }}</td>
                                        <td>{{ $data->no_nik }}</td>
                                        <td>{{ $data->alamat }}</td>
                                        <td>{{ $data->no_rt }}</td>
                                        <td>{{ $data->kode_pos }}</td>
                                        <td>{{ $data->no_hp }}</td>

                                         <td>
                                            @if ($data->status == '1')
                                                <a href="{{ route('pdfktp',[$data->id]) }}" class="btn btn-primary">Edit</a>
                                            @else
                                                <a href="{{ route('pdfktp',[$data->id]) }}" class="btn btn-warning">Edit Ulang</a>
                                            @endif
                                        </td>

                                        
                                        
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
