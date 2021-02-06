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

.kanan{
	padding-left: 150px;
	padding-top: 20px;
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
	margin-left: -217px;
}
.tt{
	padding-left: 35px;
	padding-right: 199px;
}

.TT{
	padding-left: 35px;
	padding-right: 107px;
}

.gg{
	padding-left: 7px;
}

.hh{
	padding-left: 23px;
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
  	<h4 style="padding-top: 40px;">SURAT KETERANGAN KEMATIAN</h5>
  		<hr width="41%" align="center" style="margin-top: -2;">
			<p class="pp">Nomor :</p>
  </article>
</div>
<p style="padding-top: -20">Kepala Kelurahan Kuala Samboja, Kecamatan Samboja, Kabupaten Kutai Kartanegara, dengan ini menerangkan bahwa :</p>
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
	<p style="padding-top: -10">Menerangkan dengan sebenarnya bahwa :</p>
<table style="padding-top: -5">
	<tr>
		<td class="TT">1. Nama</td>
		<td>: {{ $kematian->nama }}</td>
	</tr>
	<tr>
		<td class="TT">2. Jenis Kelamin</td>
		<td>: {{ $kematian->kelamin }}</td>
	</tr>
	<tr>
		<td class="TT">3. Tempat/Tanggal Lahir</td>
		<td>: {{ $kematian->tggl_lhr }}</td>
	</tr>
	<tr>
		<td class="TT">4. Agama</td>
		<td>: {{ $kematian->agama }}</td>
	</tr>
	<tr>
		<td class="TT">5. Pekerjaan</td>
		<td>: {{ $kematian->pekerjaan }}</td>
	</tr>
	<tr>
		<td class="TT">6. No KTP</td>
		<td>: {{ $kematian->nik }}</td>
	</tr>
	<tr>
		<td class="TT">7. Alamat</td>
		<td>: {{ $kematian->alamat }}</td>
	</tr>
	<tr>
		<td class="TT">8. Keterangan</td>
		<td class="rata">:1. Yang bersangkutan benar adalah penduduk yang berdomisili di RT. {{ $kematian['user']['penduduk']['no_rt']  }} Kelurahan Kuala Samboja berdasarkan bukti kependudukan yang terdata pada Sistem Informasi Administrasi Kependudukan Kabupaten Kutai Kartanegara</td>
	</tr>
	<tr>
		<td class="TT"></td>
		<td class="gg rata">2. Yang bersangkutan MENINGGAL pada hari {{ $kematian->keterangan }}</td>
	</tr>
	<p>Demikian surat keterangan ini diberikan kepada yang bersangkutan untuk dapat dipergunakan sebagaimana mestinya.</p>
</table>
<table>
	<tr>
		<td></td>
		<td class="kanan"></td>
		<td class="kanan">Kuala Samboja, {{ $kematian->created_at->format('d M Y') }}</td>
		
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