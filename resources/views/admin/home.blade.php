@extends('layouts.back.master')
@section('content')
	<div class="content">
		<div class="container-fluid">
			<div class="row">
				@foreach($sktm as $sktm)
				<div class="col-md-6 col-12 col-sm-6 col-lg-3">
					<div class="card" style="margin-top: 40px;">
						<div class="card-body">
							<div class="card">
								<table>
									<thead>
										<tr>
											<th style="color: red;">SKTM</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>Nama</td>
											<td>:</td>
											<td>{{ $sktm->nama }}</td>
										</tr>
										<tr>
											<td>Nik</td>
											<td>:</td>
											<td>{{ $sktm->nik }}</td>
										</tr>
										<tr>
											<td></td>
											<td></td>
											<td>
												<a href="{{ route('admin.edit',[$sktm->id]) }}" class="btn btn-primary btn-sm float-right"><i class="fa fa-edit"></i></a>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
				@endforeach
				@foreach($skck as $skck)
				<div class="col-md-6 col-12 col-sm-6 col-lg-3">
					<div class="card" style="margin-top: 40px;">
						<div class="card-body">
							<div class="card">
								<table>
									<thead>
										<tr>
											<th style="color: red;">skck</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>Nama</td>
											<td>:</td>
											<td>{{ $skck->nama }}</td>
										</tr>
										<tr>
											<td>Nik</td>
											<td>:</td>
											<td>{{ $skck->nik }}</td>
										</tr>
										<tr>
											<td></td>
											<td></td>
											<td>
												{{-- <a href="{{ route('admin.edit',[$skck->id]) }}" class="btn btn-primary btn-sm float-right"><i class="fa fa-edit"></i></a> --}}
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
				@endforeach
				@foreach($domisili as $domisili)
				<div class="col-md-6 col-12 col-sm-6 col-lg-3">
					<div class="card" style="margin-top: 40px;">
						<div class="card-body">
							<div class="card">
								<table>
									<thead>
										<tr>
											<th style="color: red;">Domisili</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>Nama</td>
											<td>:</td>
											<td>{{ $domisili->nama }}</td>
										</tr>
										<tr>
											<td>Nik</td>
											<td>:</td>
											<td>{{ $domisili->nik }}</td>
										</tr>
										<tr>
											<td></td>
											<td></td>
											<td>
												<a href="{{ route('domisili.edit',[$domisili->id]) }}" class="btn btn-primary btn-sm float-right"><i class="fa fa-edit"></i></a>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
				@endforeach
			</div>
			{{-- <div class="row">
				<div class="col-12 col-md-6 col-sm-4 col-lg-3">
					<div class="card" style="margin-top: 40px;">
						<div class="card-body">

						</div>
					</div>
				</div>
			</div> --}}
		</div>
	</div>
@endsection
