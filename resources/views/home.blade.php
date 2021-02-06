@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table id="example" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
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
                        <tr>
                            <td>{{ $data['penduduk']['no_kk']  }}</td>
                            <td>{{ $data['penduduk']['nik_kk']  }}</td>
                            <td>{{ $data['penduduk']['nama_kk']  }}</td>
                            <td>{{ $data['penduduk']['nik'] }}</td>
                            <td>{{ $data['penduduk']['nama']  }}</td>
                            <td>{{ $data['penduduk']['tggl_lhr']  }}</td>
                            <td>{{ $data['penduduk']['nik_ibu']  }}</td>
                            <td>{{ $data['penduduk']['nik_ayah']  }}</td>
                            <td>{{ $data['penduduk']['kelamin']  }}</td>
                            <td>{{ $data['penduduk']['umur']  }}</td>
                            <td>{{ $data['penduduk']['pendidikan']  }}</td>
                            <td>{{ $data['penduduk']['hub_kel']  }}</td>
                            <td>{{ $data['penduduk']['gol_darah']  }}</td>
                            <td>{{ $data['penduduk']['perkawinan']  }}</td>
                            <td>{{ $data['penduduk']['agama']  }}</td>
                            <td>{{ $data['penduduk']['alamat']  }}</td>
                            <td>{{ $data['penduduk']['kode_pos']  }}</td>
                            <td>{{ $data['penduduk']['pekerjaan']  }}</td>
                            <td>{{ $data['penduduk']['cacat']  }}</td>
                            <td>{{ $data['penduduk']['kecamatan']  }}</td>
                            <td>{{ $data['penduduk']['kelurahan'] }}</td>
                            <td>{{ $data['penduduk']['no_rt']  }}</td>
                        </tr>
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
