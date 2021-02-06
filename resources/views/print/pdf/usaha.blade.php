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
	margin-top: -30px;
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

.zz{
	padding-left: 37px;
	padding-right: 98px;
}

.aa{
	padding-left: 37px;
	padding-right: 64px;
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
  	<h4 style="padding-top: 40px;">SURAT KETERANGAN USAHA</h5>
  		<hr width="36%" align="center" style="margin-top: -2;">
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
	<p>Menerangkan dengan sebenarnya bahwa :</p>
<table>
	<tr>
		<td class="aa">1. Nama</td>
		<td>:</td>
		<td style="font-weight: bold;">{{ $usaha->nama }}</td>
	</tr>
	<tr>
		<td class="aa">2. Jenis Kelamin</td>
		<td>:</td>
		<td>{{ $usaha->kelamin }}</td>
	</tr>
	<tr>
		<td class="aa">3. Kewarganegaraan</td>
		<td>:</td>
		<td>{{ $usaha->kewarganegaraan }}</td>
	</tr>
	<tr>
		<td class="aa">4. Tempat/Tanggal Lahir</td>
		<td>:</td>
		<td>{{ $usaha->tggl_lhr }}</td>
	</tr>
	<tr>
		<td class="aa">5. Agama</td>
		<td>:</td>
		<td>{{ $usaha->agama }}</td>
	</tr>
	<tr>
		<td class="aa">6. Pekerjaan</td>
		<td>:</td>
		<td>{{ $usaha->pekerjaan }}</td>
	</tr>
	<tr>
		<td class="aa">7. Status Perkawin</td>
		<td>:</td>
		<td>{{ $usaha->perkawinan }}</td>
	</tr>
	<tr>
		<td class="aa">8. No KTP</td>
		<td>:</td>
		<td>{{ $usaha->nik }}</td>
	</tr>
	<tr>
		<td class="aa">9. Alamat</td>
		<td>:</td>
		<td>{{ $usaha->alamat }}</td>
	</tr>
	<p class="rata">Yang bersangkutan tersebut diatas adalah benar-benar mempunyai usaha :</p>
</table>
<table>
	<tr>
		<td class="zz">Nama Usaha</td>
		<td>: {{ $usaha->nama_usaha }}</td>
	</tr>
	<tr>
		<td class="zz">Mulai Usaha</td>
		<td>: {{ $usaha->mulai_usaha }}</td>
	</tr>
	<tr>
		<td class="zz">Jenis Usaha</td>
		<td>: {{ $usaha->jenis_usaha }}</td>
	</tr>
	<tr>
		<td class="zz">Alamat</td>
		<td>: {{ $usaha->alamat_usaha }}</td>
	</tr>
	<tr>
		<td class="zz">Luas Tempat Usaha</td>
		<td>:</td>
		<td style="padding-left: -90">a. Panjang : {{ $usaha->panjang }}</td>
	</tr>
	<tr>
		<td class="zz"></td>
		<td></td>
		<td colspan="2" style="padding-left: -90">b. Lebar : {{ $usaha->lebar }}</td>
	</tr>
</table>
<p>Demikian Surat Keterangan ini diberikan kepada yang bersangkutan, untuk dapat dipergunakan sebagaimana mestinya</p>
<table>
	<tr>
		<td></td>
		<td class="kanan"></td>
		<td class="kanan">Kuala Samboja, {{ $usaha->created_at->format('d M Y') }}</td>
		
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