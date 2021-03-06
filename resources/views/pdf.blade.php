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
			<td>SURAT KETERANGAN KEHILANGAN</td>
		</tr>
		<tr>
			<td><hr style="margin-top: -2px"></td>
		</tr>
		<tr>
			<td><p style="margin-top: -7px; margin-left: 27px">Nomor :</p></td>
		</tr>
	</table>
	<table align="center" border="1">
		<tr>
			<td colspan="2"><p>Kepala Kelurahan Kuala Samboja, Kecamatan Samboja, Kabupaten Kutai Kartanegara, dengan ini menerangkan bahwa :</p></td>
		</tr>
		<tr>
			<td class="tengah">1. Nama</td>
			<td width="300">: {{$kehilangan['jabatan']['nama']}}</td>
		</tr>
		<tr>
			<td class="tengah">2. Nip</td>
			<td width="300">: {{$kehilangan['jabatan']['nip']}}</td>
		</tr>
		<tr>
			<td class="tengah">3. Jabatan</td>
			<td width="300">: @if($kehilangan->jabatan->jabatan == 'Lurah')
					{{$kehilangan['jabatan']['jabatan']}}
				@else
					{{$kehilangan['jabatan']['jabatan2']}}
				@endif</td>
		</tr>
		<tr>
			<td colspan="2"><p>Menerangkan dengan sebenarnya bahwa :</p></td>
		</tr>
		<tr>
			<td class="tengah">1. Nama</td>
			<td>: {{ $kehilangan->nama }}</td>
		</tr>
		<tr>
			<td class="tengah">2. Jenis Kelamin</td>
			<td>: {{ $kehilangan->kelamin }}</td>
		</tr>
{{-- 		<tr>
			<td class="tengah">Kewarganegaraan</td>
			<td>: {{ $kehilangan->kewarganegaraan }}</td>
		</tr> --}}
		<tr>
			<td class="tengah">3. Tempat/Tanggal Lahir</td>
			<td>: {{ $kehilangan->tggl_lhr }}</td>
		</tr>
		<tr>
			<td class="tengah">4. Agama</td>
			<td>: {{ $kehilangan->agama }}</td>
		</tr>
		<tr>
			<td class="tengah">5. Pekerjaan</td>
			<td>: {{ $kehilangan->pekerjaan }}</td>
		</tr>
		<tr>
			<td class="tengah">6. No KTP</td>
			<td>: {{ $kehilangan->nik }}</td>
		</tr>
		<tr>
			<td class="tengah">7. Alamat</td>
			<td>: {{ $kehilangan->alamat }}</td>
		</tr>
		<tr>
			<td class="tengah">8. Keterangan</td>
			<td>: 1. Yang bersangkutan benar adalah penduduk yang berdomisili di RT. {{ $kehilangan['user']['penduduk']['no_rt']  }} Kelurahan Kuala Samboja</td>
		</tr>
		<tr>
			<td class="tengah"></td>
			<td>: 2. KTP EL ASLI YANG BERSANGKUTAN TELAH HILANG/TERCECER</td>
		</tr>
		<tr>
			<td colspan="2"><p>Demikian surat keterangan ini diberikan kepada yang bersangkutan untuk dapat dipergunakan sebagaimana
mestinya.</p></td>
		</tr>
		{{-- <tr>
			<td colspan="2"><p>Mempunyai seorang anak :</p></td>
		</tr>
		<tr>
			<td class="tengah">Nama</td>
			<td>: {{ $kehilangan->nama_anak }}</td>
		</tr>
		<tr>
			<td class="tengah">Nis</td>
			<td>: {{ $kehilangan->nis }}</td>
		</tr>
		<tr>
			<td class="tengah">Sekolah</td>
			<td>: {{ $kehilangan->sekolah }}</td>
		</tr>
		<tr>
			<td class="tengah">Alamat Sekolah</td>
			<td>: {{ $kehilangan->almt_sekolah }}</td>
		</tr>
		<tr>
			<td colspan="2"><p>Demikian surat keterangan ini diberikan kepada yang bersangkutan Untuk Melengkapi Persyaratan
Beasiswa Kaltim</p></td>
		</tr> --}}
		<tr>
			<td class="tengah"></td>
			<td align="center">Kuala Samboja, {{ $create }}</td>
		</tr>
		<tr>
			<td class="tengah"></td>
			<td align="center">{{$kehilangan['jabatan']['jabatan']}}<br>
			{{$kehilangan['jabatan']['jabatan2']}}</td>
		</tr>
		<tr>
			<td class="tengah"></td>
			<td align="center" style="padding-top: 40px; text-decoration: underline;">{{$kehilangan['jabatan']['nama']}}
			</td>
		</tr>
		<tr>
			<td class="tengah"></td>
			<td align="center"><p style="margin-top: -9px">Nip {{$kehilangan['jabatan']['nip']}}</p></td>
		</tr>
	</table>
</body>
</html>