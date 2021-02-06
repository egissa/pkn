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
	margin-top: -25px;
	margin-left: -165px;
}

.kanan{
	padding-left: 150px;
	padding-top: 30px;
}

.kiri{
	padding-left: 148px;
}
.kirii{
	padding-left: 152px;
}

.kanant{
	padding-left: 157px;
	padding-bottom: 50px;
}
.tt{
	padding-left: 37px;
	padding-right: 162px;
}

.aa{
	padding-left: 37px;
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
	  		<td><img src="{{ asset('frontend/logo/logo.png') }}" width="90" height="110"></td>
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
  	<h4 style="padding-top: 40px;">SURAT KETERANGAN SKCK</h5>
  		<hr width="38%" align="center">
			<p class="pp">Nomor :</p>
  </article>
</div>
<p style="padding-top: -17">Yang Bertandatangan dibawah ini:</p>
<table>
	<tr>
		<td class="tt">1. Nama</td>
		
		<td style="font-weight: bold;">: ANTUNG FATAHILLAH,S. PdI</td>
	</tr>
	<tr>
		<td class="tt">2. NIP</td>
		
		<td >: 196604261989031015</td>
	</tr>
	<tr>
		<td class="tt">3. Jabatan</td>
		
		<td >: Lurah</td>
	</tr>
</table>
	<p>Diberikan Kepada :</p>
<table>
	<tr>
		<td class="aa">1. Nama</td>
		<td>:</td>
		<td style="font-weight: bold;">{{ $skck->nama }}</td>
	</tr>
	<tr>
		<td class="aa">2. Jenis Kelamin</td>
		<td>:</td>
		<td>{{ $skck->kelamin }}</td>
	</tr>
	<tr>
		<td class="aa">3. Kewarganegaraan</td>
		<td>:</td>
		<td>{{ $skck->kewarganegaraan }}</td>
	</tr>
	<tr>
		<td class="aa">4. Tempat/Tanggal Lahir</td>
		<td>:</td>
		<td>{{ $skck->tggl_lhr }}</td>
	</tr>
	<tr>
		<td class="aa">5. Agama</td>
		<td>:</td>
		<td>{{ $skck->agama }}</td>
	</tr>
	<tr>
		<td class="aa">6. Pekerjaan</td>
		<td>:</td>
		<td>{{ $skck->pekerjaan }}</td>
	</tr>
	<tr>
		<td class="aa">7. Status Perkawin</td>
		<td>:</td>
		<td>{{ $skck->perkawinan }}</td>
	</tr>
	<tr>
		<td class="aa">8. No KTP</td>
		<td>:</td>
		<td>{{ $skck->nik }}</td>
	</tr>
	<tr>
		<td class="aa">9. Alamat</td>
		<td>:</td>
		<td>{{ $skck->alamat }}</td>
	</tr>
	<tr>
		<td class="aa">10. Maksud minta surat keterangan</td>
		<td>:</td>
		<td>Untuk melengkapi persyaratan kerja</td>
	</tr>
	<p class="rata">Selama yang bersangkutan bertempat tinggal di {{ $skck['user']['penduduk']['alamat'] }} RT. {{ $skck['user']['penduduk']['no_rt']  }} Kelurahan Kuala Samboja, ternyata berkelakuan baik, dan belum pernah tersangkut dalam urusan pihak Kepolisian. Demikian surat keterangan ini di berikan kepada yang bersangkutan, untuk dipergunakan sebagaimana mestinya</p>
</table>
<table>
	<tr>
		<td></td>
		<td class="kanan"></td>
		<td class="kanan">Kuala Samboja, {{ $skck->created_at->format('d M Y') }}</td>
		
	</tr>
	<tr>
		<td></td>
		<td class="kanant"></td>
		<td class="kanant" style="font-weight: bold;">Lurah Kuala Samboja</td>
	</tr>
</table>
<table>
	<tr>
		<td></td>
		<td class="kiri"></td>
		<td class="kiri" style="font-weight: bold; text-decoration: underline; font-size: 11">ANTUNG FATAHILLAH,S. PdI</td>
	</tr>
	<tr>
		<td></td>
		<td class="kirii"></td>
		<td class="kirii" style="padding-top: -5">NIP : 19660426198903 1 015</td>
	</tr>
</table>
</body>
</html>