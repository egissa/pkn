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
			<td>SURAT KETERANGAN PERMOHONAN</td>
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
			<td colspan="2"><p>Kepala Kelurahan Kuala Samboja, Kecamatan Samboja, Kabupaten Kutai Kartanegara, dengan ini menerangkan bahwa :</p></td>
		</tr>
		<tr>
			<td class="tengah">1. Nama</td>
			<td width="300">: {{$ktp['jabatan']['nama']}}</td>
		</tr>
		<tr>
			<td class="tengah">2. Nip</td>
			<td width="300">: {{$ktp['jabatan']['nip']}}</td>
		</tr>
		<tr>
			<td class="tengah">3. Jabatan</td>
			<td width="300">: @if($ktp->jabatan)
					{{$ktp['jabatan']['jabatan']}}
				@else
					{{$ktp['jabatan']['jabatan2']}}
				@endif</td>
		</tr>
		<tr>
			<td colspan="2"><p>FORMULIR PERMOHONAN KTP BARU :</p></td>
		</tr>
		<tr>
			<td class="tengah">1. PERMOHONAN</td>
			<td>: {{ $ktp->permohonan }}</td>
		</tr>
		<tr>
			<td class="tengah">2.  Nama</td>
			<td>: {{ $ktp->nama }}</td>
		</tr>
{{-- 		<tr>
			<td class="tengah">NO KK</td>
			<td>: {{ $ktp->no_kk }}</td>
		</tr> --}}
		<tr>
			<td class="tengah">3.NO NIK</td>
			<td>: {{ $ktp->no_nik }}</td>
		</tr>
		<tr>
			<td class="tengah">4. ALAMAT</td>
			<td>: {{ $ktp->alamat }}</td>
		</tr>
		<tr>
			<td class="tengah">5. NO RT</td>
			<td>: {{ $ktp->no_rt }}</td>
		</tr>
		<tr>
			<td class="tengah">6. KODE POS</td>
			<td>: {{ $ktp->kode_pos }}</td>
		</tr>
		<tr>
			<td colspan="2"><p>Demikian surat keterangan ini diberikan kepada yang bersangkutan untuk dapat dipergunakan sebagaimana
mestinya.</p></td>
		</tr>
		<tr>
			<td class="tengah"></td>
			<td align="center">Kuala Samboja, </td>
		</tr>
		<tr>
			<td class="tengah"></td>
			<td align="center">{{$ktp['jabatan']['jabatan']}}<br>
			{{$ktp['jabatan']['jabatan2']}}</td>
		</tr>
		<tr>
			<td class="tengah"></td>
			<td align="center" style="padding-top: 40px; text-decoration: underline;">{{$ktp['jabatan']['nama']}}
			</td>
		</tr>
		<tr>
			<td class="tengah"></td>
			<td align="center"><p style="margin-top: -9px">Nip {{$ktp['jabatan']['nip']}}</p></td>
		</tr>
	</table>
</body>
</html>