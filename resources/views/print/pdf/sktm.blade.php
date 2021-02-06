<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>
		body{
			padding: 1em;
			line-height: 1.5;
		}
		.kop{
			line-height: 1;
		}
		.tengah{
			padding-left: 37px;
			padding-right: 90px;
		}
	</style>
</head>
<body>
	<table align="center" class="kop">
		<tr>
			<td><img src="{{ asset('frontend/logo/logo1.png') }}" alt="" style="width: 90px; height: 110px;"></td>
			<td align="center">
				<font size="4">PEMERINTAH KABUPATEN KUTAI KARTANEGARA</font><br>
				<font size="4">KECAMATAN SAMBOJA</font><br>
				<font size="5"><b>KELURAHAN KUALA SAMBOJA</b></font><br>
				<font size="2">Kantor : Jl.Raya Balikpapan-Handil II RT. 008 Kuala Samboja Kecamatan Samboja Kode Pos 75277</font><br>
				<font size="2">Email : sambojakuala@kutai-kartanegarakab.go.id</font>
			</td>
		</tr>
		<tr>
			<td colspan="2"><hr style="border: 2px solid"></td>
		</tr>
	</table>
	<table align="center">
		<tr>
			<td>SURAT KETERANGAN TIDAK MAMPU</td>
		</tr>
		<tr>
			<td><hr style="margin-top: -2px"></td>
		</tr>
		<tr>
			<td><p style="margin-top: -7px; margin-left: 27px">Nomor :</p></td>
		</tr>
	</table>
	<table align="center">
		<tr>
			<td colspan="2"><p>Yang bertanda tangan dibawah ini :</p></td>
		</tr>
		<tr>
			<td class="tengah">Nama</td>
			<td width="300">: {{$sktm['jabatan']['nama']}}</td>
		</tr>
		<tr>
			<td class="tengah">Nip</td>
			<td width="300">: {{$sktm['jabatan']['nip']}}</td>
		</tr>
		<tr>
			<td class="tengah">Jabatan</td>
			<td width="300">: @if($sktm->jabatan->jabatan == 'Lurah')
					{{$sktm['jabatan']['jabatan']}}
				@else
					{{$sktm['jabatan']['jabatan2']}}
				@endif</td>
		</tr>
		<tr>
			<td colspan="2"><p>Menerangkan dengan sebenarnya bahwa :</p></td>
		</tr>
		<tr>
			<td class="tengah">Nama</td>
			<td>: {{ $sktm->nama }}</td>
		</tr>
		<tr>
			<td class="tengah">Jenis Kelamin</td>
			<td>: {{ $sktm->kelamin }}</td>
		</tr>
		<tr>
			<td class="tengah">Kewarganegaraan</td>
			<td>: {{ $sktm->kewarganegaraan }}</td>
		</tr>
		<tr>
			<td class="tengah">Tempat/Tanggal Lahir</td>
			<td>: {{ $sktm->tggl_lhr }}</td>
		</tr>
		<tr>
			<td class="tengah">Agama</td>
			<td>: {{ $sktm->agama }}</td>
		</tr>
		<tr>
			<td class="tengah">Pekerjaan</td>
			<td>: {{ $sktm->pekerjaan }}</td>
		</tr>
		<tr>
			<td class="tengah">No Ktp</td>
			<td>: {{ $sktm->nik }}</td>
		</tr>
		<tr>
			<td class="tengah">No BDT</td>
			<td>: {{ $sktm->no_bdt }}</td>
		</tr>
		<tr>
			<td class="tengah">Alamat</td>
			<td>: {{ $sktm->alamat }}</td>
		</tr>
		<tr>
			<td colspan="2"><p>Yang bersangkutan adalah penduduk yang berdomisili di RT. {{ $sktm['user']['penduduk']['no_rt'] }} Kelurahan Kuala Samboja, Kecamatan Samboja Kabupaten Kutai Kartanegara dan tergolong tidak mampu</p></td>
		</tr>
		<tr>
			<td colspan="2"><p>Mempunyai seorang anak :</p></td>
		</tr>
		<tr>
			<td class="tengah">Nama</td>
			<td>: {{ $sktm->nama_anak }}</td>
		</tr>
		<tr>
			<td class="tengah">Nis</td>
			<td>: {{ $sktm->nis }}</td>
		</tr>
		<tr>
			<td class="tengah">Sekolah</td>
			<td>: {{ $sktm->sekolah }}</td>
		</tr>
		<tr>
			<td class="tengah">Alamat Sekolah</td>
			<td>: {{ $sktm->almt_sekolah }}</td>
		</tr>
		<tr>
			<td colspan="2"><p>Demikian surat keterangan ini diberikan kepada yang bersangkutan Untuk Melengkapi Persyaratan
Beasiswa Kaltim</p></td>
		</tr>
		<tr>
			<td class="tengah"></td>
			<td align="center">Kuala Samboja, {{ $create }}</td>
		</tr>
		<tr>
			<td class="tengah"></td>
			<td align="center">{{$sktm['jabatan']['jabatan']}}<br>
			{{$sktm['jabatan']['jabatan2']}}</td>
		</tr>
		<tr>
			<td class="tengah"></td>
			<td align="center" style="padding-top: 40px; text-decoration: underline;">{{$sktm['jabatan']['nama']}}
			</td>
		</tr>
		<tr>
			<td class="tengah"></td>
			<td align="center"><p style="margin-top: -9px">Nip {{$sktm['jabatan']['nip']}}</p></td>
		</tr>
	</table>
</body>
</html>