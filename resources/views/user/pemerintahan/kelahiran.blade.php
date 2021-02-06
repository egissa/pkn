<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"
  />
    <title>Hello, world!</title>
  </head>
  <body>
<div class="particles-container" id="particles-js"></div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card shadow mt-2">
                <div class="card-header">
                    <h6>Akte Kelahiran</h6>
                </div>
                <div class="card-body">
                    <div class="form-group">
                                <label>No. Surat Pengantar</label>
                                <input type="text" class="form-control" name="nama" value="">
                                @if ($errors->has('nama'))
                                <span class="text-danger">{{ $errors->first('nama') }}</span>
                                @endif
                            </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Nama Lengkap Bayi</label>
                                <input type="text" class="form-control" name="nama" value="">
                                @if ($errors->has('nama'))
                                <span class="text-danger">{{ $errors->first('nama') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Jenis Kelamin</label>
                                <input type="text" class="form-control" name="email" value="">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Tempat Lahir Bayi</label>
                                <input type="text" class="form-control" name="nama" value="">
                                @if ($errors->has('nama'))
                                <span class="text-danger">{{ $errors->first('nama') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Tanggal Lahir Bayi</label>
                                <input type="text" class="form-control" name="email" value="">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>No.Kartu Keluarga</label>
                                <input type="text" class="form-control" name="nama" value="">
                                @if ($errors->has('nama'))
                                <span class="text-danger">{{ $errors->first('nama') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Nama Ayah Kandung</label>
                                <input type="text" class="form-control" name="email" value="">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Nama Ibu Kandung</label>
                                <input type="text" class="form-control" name="nama" value="">
                                @if ($errors->has('nama'))
                                <span class="text-danger">{{ $errors->first('nama') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Nama Pelapor</label>
                                <input type="text" class="form-control" name="email" value="">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Nomor Hp pelapor</label>
                                <input type="text" class="form-control" name="nama" value="">
                                @if ($errors->has('nama'))
                                <span class="text-danger">{{ $errors->first('nama') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Surat Pengantar RT</label>
                                <input type="text" class="form-control" name="email" value="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                            <div class="form-group">
                                <label></label>
                                <button class="btn btn-primary btn-sm float-right btn-block">Kirim</button>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('front/js/bootstrap.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
  </body>
</html>