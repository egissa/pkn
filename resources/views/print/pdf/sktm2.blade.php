<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>
<body>
	<style>
.wrapper {
  display: flex;
  flex-flow: row wrap;
  font-weight: bold;
  text-align: center;
}

.wrapper > * {
  padding: 20px;
  flex: 1 100%;
}

.header {
  background: tomato;
}

.footer {
  background: lightgreen;
}

.main {
  text-align: center;
}



@media all and (min-width: 600px) {
  .aside { flex: 1 0 0; }
}

@media all and (min-width: 800px) {
  .main    { flex: 3 0px; }
  .aside-1 { order: 1; }
  .main    { order: 2; }
  .aside-2 { order: 3; }
  .footer  { order: 4; }
}

body {
	margin-top: -40px;
  	padding: 1em;
  	line-height: 1.5;
}

.kop{
	line-height: 1;
	padding: 0em;
	padding-right: -40;
	padding-left: -40;
	
}

.pp {
	margin-top: -35px;
	margin-left: -227px;
}

.kanan{
	padding-left: 130px;
	padding-top: 10px;
}

.kiri{
	padding-left: 148px;
}
.kirii{
	padding-left: 152px;
}

.kanant{
	padding-left: 157px;
	padding-bottom: 40px;
}
.tt{
	padding-left: 37px;
	padding-right: 217px;
}

.aa{
	padding-left: 37px;
	padding-right: 120px;
}

.bb{
	padding-left: 37px;
	padding-right: 162px;
}

.rata{
	text-align: justify;
}

.aside-1 {
	float: left;
	width: 97px
	height:50px;
}

  </style>
	<div class="wrapper">
  <article class="main"> 
  	<table class="kop">
  		<tr>
	  		<td><img src="{{ asset('frontend/logo/logo1.png') }}" width="90" height="110"></td>
	  		<td class="kantor"><center>
	  			<font size="4">PEMERINTAH KABUPATEN KUTAI KARTANEGARA</font><br>
	  			<font size="4">KECAMATAN SAMBOJA</font><br>
	  			<font size="5">KELURAHAN KUALA SAMBOJA</font><br>
	  			<font size="2">Kantor : Jl.Raya Balikpapan-Handil II RT. 008 Kuala Samboja Kecamatan Samboja Kode Pos 75277</font><br>
	  			<font size="2">Email : sambojakuala@kutai-kartanegarakab.go.id</font></center>
	  		</td>
	  	</tr>
	  	<hr style="margin-left: -44px; margin-right: -44px; margin-bottom: -20px; border: 2px solid">
  	</table>
  	<h4 style="padding-top: 40px;">SURAT KETERANGAN TIDAK MAMPU</h5>
  		<hr width="46%" align="center" style="margin-top: -2;">
			<p class="pp">Nomor :</p>
  </article>
</div>
<p style="padding-top: -17">Yang Bertandatangan dibawah ini:</p>
<table>
	<tr>
		<td class="tt">1. Nama</td>
		
		<td style="font-weight: bold;">: {{$sktm['jabatan']['nama']}}</td>
	</tr>
	<tr>
		<td class="tt">2. NIP</td>
		
		<td >: {{$sktm['jabatan']['nip']}}</td>
	</tr>
	<tr>
		<td class="tt">3. Jabatan</td>
		
		<td >: @if($sktm->jabatan->jabatan == 'Lurah')
					{{$sktm['jabatan']['jabatan']}}
				@else
					{{$sktm['jabatan']['jabatan2']}}
				@endif
		</td>
	</tr>
</table>
	<p style="padding-top: -10">Menerangkan dengan sebenarnya bahwa :</p>
<table style="padding-top: -15">
	<tr>
		<td class="aa">1. Nama</td>
		
		<td style="font-weight: bold;">: {{ $sktm->nama }}</td>
	</tr>
	<tr>
		<td class="aa">2. Jenis Kelamin</td>
		
		<td>: {{ $sktm->kelamin }}</td>
	</tr>
	<tr>
		<td class="aa">3. Kewarganegaraan</td>
		
		<td>: {{ $sktm->kewarganegaraan }}</td>
	</tr>
	<tr>
		<td class="aa">4. Tempat/Tanggal Lahir</td>
		
		<td>: {{ $sktm->tggl_lhr }}</td>
	</tr>
	<tr>
		<td class="aa">5. Agama</td>
		
		<td>: {{ $sktm->agama }}</td>
	</tr>
	<tr>
		<td class="aa">6. Pekerjaan</td>
		
		<td>: {{ $sktm->pekerjaan }}</td>
	</tr>
	<tr>
		<td class="aa">8. No KTP</td>
		
		<td>: {{ $sktm->nik }}</td>
	</tr>
	<tr>
		<td class="aa">7. No BDT</td>
		
		<td>: {{ $sktm['no_bdt'] }}</td>
	</tr>
	<tr>
		<td class="aa">9. Alamat</td>
		
		<td>: {{ $sktm->alamat }}</td>
	</tr>
	<p class="rata" style="padding-top: -15">Yang bersangkutan adalah penduduk yang berdomisili di RT. {{ $sktm['user']['penduduk']['no_rt'] }} Kelurahan Kuala Samboja, Kecamatan Samboja Kabupaten Kutai Kartanegara dan tergolong tidak mampu</p>
</table>
<p>Mempunyai seorang anak :</p>
<table style="padding-top: -15">
	<tr>
		<td class="bb">1. Nama</td>
		
		<td>: {{ $sktm->nama_anak }}</td>
	</tr>
	<tr>
		<td class="bb">2. NIS</td>
		
		<td>: {{ $sktm->nis }}</td>
	</tr>
	<tr>
		<td class="bb">3. Sekolah</td>
		
		<td>: {{ $sktm->sekolah }}</td>
	</tr>
	<tr>
		<td class="bb">4. Alamat Sekolah</td>
		<td>: {{ $sktm->almt_sekolah }}</td>
	</tr>
	<p style="padding-top: -15">Demikian surat keterangan ini diberikan kepada yang bersangkutan Untuk Melengkapi Persyaratan Beasiswa Kaltim</p>
</table>
<table>
	<tr>
		<td></td>
		<td class="kanan"></td>
		<td class="kanan"><center>Kuala Samboja, {{ $create }}</center></td>
	</tr>
	<tr>
		<td></td>
		<td class="kanant"></td>
		<td class="kanant" style="font-weight: bold;"><center>{{$sktm['jabatan']['jabatan']}}<br>
			{{$sktm['jabatan']['jabatan2']}}</center>
		</td>
	</tr>
</table>
<table>
	<tr>
		<td></td>
		<td class="kiri"></td>
		<td class="kiri" style="font-weight: bold; text-decoration: underline; font-size: 11"><center>{{$sktm['jabatan']['nama']}}</center></td>
	</tr>
	<tr>
		<td></td>
		<td class="kirii"></td>
		<td class="kirii" style="padding-top: -5"><center>NIP : {{$sktm['jabatan']['nip']}}</center></td>
	</tr>
</table>
</body>
</html>