<?php
require_once("dompdf/autoload.inc.php");
use Dompdf\Dompdf;
$dompdf = new Dompdf();
session_start();
$db = mysqli_connect('localhost','root','presiden323','pengumuman') or die ("gagal koneksi");
if (!empty($_SESSION['nis'])) { 
$dt = $_SESSION['nis'];
$stmt = mysqli_prepare($db,"select*from siswa where nis=? limit 1");
	mysqli_stmt_bind_param($stmt,'s',$dt);
	mysqli_stmt_execute($stmt);
	$result=mysqli_stmt_get_result($stmt);
	$e = mysqli_fetch_row($result);
  $d = mysqli_query($db, 'select*from siswa where nis="'.$e[2].'"');
  $dt = mysqli_fetch_array($d);
  //$namaa = explode(" ", $dt['nama_siswa']);
  //$nma = implode("-", $namaa);
  if ($dt['kompetensi_keahlian']=='TEKNIK DAN BISNIS SEPEDA MOTOR') {
  	$dnilai = '		<tr style="border-collapse: collapse; border: 1px solid #000;">
			<td style="border-collapse: collapse; border: 1px solid #000; padding: 3px;" align="center">
			1.
			</td>
			<td style="border-collapse: collapse; border: 1px solid #000; padding: 3px;">
			Simulasi dan Komunikasi Digital
			</td>
			<td>
			<center>'.$dt["1"].'</center>
			</td>
		</tr>
		<tr style="border-collapse: collapse; border: 1px solid #000;">
			<td style="border-collapse: collapse; border: 1px solid #000; padding: 3px;">
			<center>2.</center>
			</td>
			<td style="border-collapse: collapse; border: 1px solid #000; padding: 3px;">
			Fisika
			</td>
			<td style="border-collapse: collapse; border: 1px solid #000; padding: 3px;">
			<center>'.$dt["2"].'</center>
			</td>
		</tr>
		<tr style="border-collapse: collapse; border: 1px solid #000;">
			<td style="border-collapse: collapse; border: 1px solid #000; padding: 3px;" align="center">
			3.
			</td>
			<td style="border-collapse: collapse; border: 1px solid #000; padding: 3px;">
			Kimia
			</td>
			<td style="border-collapse: collapse; border: 1px solid #000; padding: 3px;">
			<center>'.$dt["3"].'</center>
			</td>
		</tr>';
  } elseif ($dt['kompetensi_keahlian']=='REKAYASA PERANGKAT LUNAK') {
  	$dnilai = '		<tr style="border-collapse: collapse; border: 1px solid #000;">
			<td style="border-collapse: collapse; border: 1px solid #000; padding: 3px;" align="center">
			1.
			</td>
			<td style="border-collapse: collapse; border: 1px solid #000; padding: 3px;">
			Simulasi dan Komunikasi Digital
			</td>
			<td>
			<center>'.$dt["1"].'</center>
			</td>
		</tr>
		<tr style="border-collapse: collapse; border: 1px solid #000;">
			<td style="border-collapse: collapse; border: 1px solid #000; padding: 3px;">
			<center>2.</center>
			</td>
			<td style="border-collapse: collapse; border: 1px solid #000; padding: 3px;">
			Fisika dan Kimia
			</td>
			<td style="border-collapse: collapse; border: 1px solid #000; padding: 3px;">
			<center>'.$dt["2"].'</center>
			</td>
		</tr>
		<tr style="border-collapse: collapse; border: 1px solid #000;">
			<td style="border-collapse: collapse; border: 1px solid #000; padding: 3px;" align="center">
			3.
			</td>
			<td style="border-collapse: collapse; border: 1px solid #000; padding: 3px;">
			Sistem Komputer
			</td>
			<td style="border-collapse: collapse; border: 1px solid #000; padding: 3px;">
			<center>'.$dt["3"].'</center>
			</td>
		</tr>';
  } elseif ($dt['kompetensi_keahlian']=='BISNIS DARING DAN PEMASARAN') {
  	$dnilai = '		<tr style="border-collapse: collapse; border: 1px solid #000;">
			<td style="border-collapse: collapse; border: 1px solid #000; padding: 3px;" align="center">
			1.
			</td>
			<td style="border-collapse: collapse; border: 1px solid #000; padding: 3px;">
			Simulasi dan Komunikasi Digital
			</td>
			<td>
			<center>'.$dt["1"].'</center>
			</td>
		</tr>
		<tr style="border-collapse: collapse; border: 1px solid #000;">
			<td style="border-collapse: collapse; border: 1px solid #000; padding: 3px;">
			<center>2.</center>
			</td>
			<td style="border-collapse: collapse; border: 1px solid #000; padding: 3px;">
			Ekonomi Bisnis
			</td>
			<td style="border-collapse: collapse; border: 1px solid #000; padding: 3px;">
			<center>'.$dt["2"].'</center>
			</td>
		</tr>
		<tr style="border-collapse: collapse; border: 1px solid #000;">
			<td style="border-collapse: collapse; border: 1px solid #000; padding: 3px;" align="center">
			3.
			</td>
			<td style="border-collapse: collapse; border: 1px solid #000; padding: 3px;">
			Administrasi Umum
			</td>
			<td style="border-collapse: collapse; border: 1px solid #000; padding: 3px;">
			<center>'.$dt["3"].'</center>
			</td>
		</tr>
		<tr style="border-collapse: collapse; border: 1px solid #000;">
			<td style="border-collapse: collapse; border: 1px solid #000; padding: 3px;" align="center">
			4.
			</td>
			<td style="border-collapse: collapse; border: 1px solid #000; padding: 3px;">
			IPA
			</td>
			<td style="border-collapse: collapse; border: 1px solid #000; padding: 3px;">
			<center>'.$dt["4"].'</center>
			</td>
		</tr>';
  } elseif ($dt['kompetensi_keahlian']=='OTOMATISASI DAN TATA KELOLA PERAKANTORAN') {
  	$dnilai = '		<tr style="border-collapse: collapse; border: 1px solid #000;">
			<td style="border-collapse: collapse; border: 1px solid #000; padding: 3px;" align="center">
			1.
			</td>
			<td style="border-collapse: collapse; border: 1px solid #000; padding: 3px;">
			Simulasi dan Komunikasi Digital
			</td>
			<td>
			<center>'.$dt["1"].'</center>
			</td>
		</tr>
		<tr style="border-collapse: collapse; border: 1px solid #000;">
			<td style="border-collapse: collapse; border: 1px solid #000; padding: 3px;">
			<center>2.</center>
			</td>
			<td style="border-collapse: collapse; border: 1px solid #000; padding: 3px;">
			Ekonomi Bisnis
			</td>
			<td style="border-collapse: collapse; border: 1px solid #000; padding: 3px;">
			<center>'.$dt["2"].'</center>
			</td>
		</tr>
		<tr style="border-collapse: collapse; border: 1px solid #000;">
			<td style="border-collapse: collapse; border: 1px solid #000; padding: 3px;" align="center">
			3.
			</td>
			<td style="border-collapse: collapse; border: 1px solid #000; padding: 3px;">
			Administrasi Umum
			</td>
			<td style="border-collapse: collapse; border: 1px solid #000; padding: 3px;">
			<center>'.$dt["3"].'</center>
			</td>
		</tr>
		<tr style="border-collapse: collapse; border: 1px solid #000;">
			<td style="border-collapse: collapse; border: 1px solid #000; padding: 3px;" align="center">
			4.
			</td>
			<td style="border-collapse: collapse; border: 1px solid #000; padding: 3px;">
			IPA
			</td>
			<td style="border-collapse: collapse; border: 1px solid #000; padding: 3px;">
			<center>'.$dt["4"].'</center>
			</td>
		</tr>';
  } elseif ($dt['kompetensi_keahlian']=='AKUNTANSI DAN KEUANGAN LEMBAGA') {
  	$dnilai = '		<tr style="border-collapse: collapse; border: 1px solid #000;">
			<td style="border-collapse: collapse; border: 1px solid #000; padding: 3px;" align="center">
			1.
			</td>
			<td style="border-collapse: collapse; border: 1px solid #000; padding: 3px;">
			Simulasi dan Komunikasi Digital
			</td>
			<td>
			<center>'.$dt["1"].'</center>
			</td>
		</tr>
		<tr style="border-collapse: collapse; border: 1px solid #000;">
			<td style="border-collapse: collapse; border: 1px solid #000; padding: 3px;">
			<center>2.</center>
			</td>
			<td style="border-collapse: collapse; border: 1px solid #000; padding: 3px;">
			Ekonomi Bisnis
			</td>
			<td style="border-collapse: collapse; border: 1px solid #000; padding: 3px;">
			<center>'.$dt["2"].'</center>
			</td>
		</tr>
		<tr style="border-collapse: collapse; border: 1px solid #000;">
			<td style="border-collapse: collapse; border: 1px solid #000; padding: 3px;" align="center">
			3.
			</td>
			<td style="border-collapse: collapse; border: 1px solid #000; padding: 3px;">
			Administrasi Umum
			</td>
			<td style="border-collapse: collapse; border: 1px solid #000; padding: 3px;">
			<center>'.$dt["3"].'</center>
			</td>
		</tr>
		<tr style="border-collapse: collapse; border: 1px solid #000;">
			<td style="border-collapse: collapse; border: 1px solid #000; padding: 3px;" align="center">
			4.
			</td>
			<td style="border-collapse: collapse; border: 1px solid #000; padding: 3px;">
			IPA
			</td>
			<td style="border-collapse: collapse; border: 1px solid #000; padding: 3px;">
			<center>'.$dt["4"].'</center>
			</td>
		</tr>';
  }
$html ='<table border="0" cellpadding="0" cellspacing="0">
<tbody>
		<tr>
			<td width="15%" align="center" valign="center"><img src="images/jateng.png" height="95px"></td>
			<td align="center" valign="center"><span style="font-size: 18px; font-weight: bold; font-family:Tahoma;">PEMERINTAH PROVINSI JAWA TENGAH<br />
			DINAS PENDIDIKAN DAN KEBUDAYAAN<br />
			SEKOLAH MENENGAH KEJURUAN NEGERI 1 BANGSRI</span><br />
			<span style="font-size:13px; font-family:Tahoma;">
			Jalan KH. Achmad Fauzan No. 17 Krasak, Bangsri, Jepara Kode Pos 59453<br />
			Telepon (0291) 772321, Surat Elektronik : smkn1bangsri@yahoo.co.id<br />
			Website : http://smkn1bangsri.sch.id</span></td>
			<td  width="15%" align="center" valign="center"> <img src="images/logo.png" height="95px"></td>
		</tr>
		<tr>
			<td colspan="3"><hr style="border-top: 3px double #000; border-bottom: 1.5px solid #000;"></td>
		</tr>
		<tr>
			<td colspan="3" align="center" valign="top" height="43px;"><span style="font-size: 16px;"><u style="font-weight: bold;">SURAT&nbsp; KETERANGAN LULUS</u><br />
			NOMOR&nbsp; : 423.7/0420 </span></td>
		</tr>
		<tr>
			<td colspan="3" align="center" valign="top" height="40px;" style="padding: 5px;"><span style="font-size: 16px; font-weight: bold;">SMK NEGERI 1 BANGSRI<br />
			PROGRAM KEAHLIAN '.$dt["program_keahlian"].' <br/>
			KOMPETENSI KEAHLIAN '.$dt["kompetensi_keahlian"].'<br />
			TAHUN PELAJARAN 2019/2020</span></td>
		</tr>
		<tr>
			<td colspan="3" style="padding: 5px; font-size: 16px;">Yang bertanda tangan di bawah ini, Kepala Sekolah Menengah Kejuruan Negeri 1 Bangsri Kabupaten Jepara, Provinsi Jawa Tengah menerangkan bahwa :<br/></td>
		</tr>
		<tr>
			<td colspan="3" style="padding: 5px; font-size: 16px;">

<table border="0" cellpadding="0" cellspacing="0">
	<tbody>
		<tr>
			<td>Nama</td>
			<td> : </td>
			<td>&nbsp;'.$dt["nama_siswa"].'</td>
		</tr>
		<tr>
			<td>Tempat dan Tanggal Lahir</td>
			<td> : </td>
			<td>&nbsp;'.$dt["tempat_lahir"].'</td>
		</tr>
		<tr>
			<td>Nama Orang Tua</td>
			<td> : </td>
			<td>&nbsp;'.$dt["nama_ortu"].'</td>
		</tr>
		<tr>
			<td>Nomor Induk Siswa</td>
			<td> : </td>
			<td>&nbsp;'.$dt["nis"].'</td>
		</tr>
		<tr>
			<td>Nomor Induk Siswa Nasional &nbsp;</td>
			<td> : </td>
			<td>&nbsp;'.$dt["nisn"].'</td>
		</tr>
	</tbody>
</table>
			</td>
		</tr>
		<tr>
			<td colspan="3" style="padding: 5px; font-size: 16px;">dinyatakan <B>LULUS</B> dari satuan pendidikan berdasarkan kriteria kelulusan SMK Negeri 1 Bangsri Kabupaten Jepara Tahun Pelajaran 2019/2020, dengan nilai sebagai berikut :</td>
		</tr>
		<tr>
			<td colspan="3" style="padding: 5px; font-size: 16px;">

<table style="border-collapse: collapse; border: 1px solid #000; width: 100%; margin: 0 auto; font-size:16px;">
	<tbody>
		<tr style="border-collapse: collapse; border: 1px solid #000;">
			<td style="border-collapse: collapse; border: 1px solid #000; padding: 1px;" align="center" width="5%" height="30px">
			<center>NO</center>
			</td>
			<td style="border-collapse: collapse; border: 1px solid #000; padding: 1px;">
			<center>MATA PELAJARAN</center>
			</td>
			<td style="border-collapse: collapse; border: 1px solid #000; padding: 1px;" width="35%">
			<center>NILAI UJIAN SEKOLAH</center>
			</td>
		</tr>
		<tr style="border-collapse: collapse; border: 1px solid #000;">
			<td colspan="2" style="border-collapse: collapse; border: 1px solid #000; padding: 3px;">
			
				A. &nbsp;&nbsp;Muatan Nasional
			
			</td>
			<td style="border-collapse: collapse; border: 1px solid #000; padding: 3px;">
			&nbsp;
			</td>
		</tr>
		<tr style="border-collapse: collapse; border: 1px solid #000;">
			<td style="border-collapse: collapse; border: 1px solid #000; padding: 3px;" align="center">
			 1.
			</td>
			<td style="border-collapse: collapse; border: 1px solid #000; padding: 3px;">
			Pendidikan Agama dan Budi Pekerti
			</td>
			<td style="border-collapse: collapse; border: 1px solid #000; padding: 3px;">
			<center>'.$dt["p_agama"].'</center>
			</td>
		</tr>
		<tr style="border-collapse: collapse; border: 1px solid #000;">
			<td style="border-collapse: collapse; border: 1px solid #000; padding: 3px;" align="çenter">
			<center>2.</center>
			</td>
			<td style="border-collapse: collapse; border: 1px solid #000; padding: 3px;">
			Pendidikan Pancasila dan Kewarganegaraan
			</td>
			<td style="border-collapse: collapse; border: 1px solid #000; padding: 3px;">
			<center>'.$dt["ppkn"].'</center>
			</td>
		</tr>
		<tr style="border-collapse: collapse; border: 1px solid #000;">
			<td style="border-collapse: collapse; border: 1px solid #000; padding: 3px;" align="center">
			3.
			</td>
			<td style="border-collapse: collapse; border: 1px solid #000; padding: 3px;">
			Bahasa Indonesia
			</td>
			<td style="border-collapse: collapse; border: 1px solid #000; padding: 3px;">
			<center>'.$dt["b_indo"].'</center>
			</td>
		</tr>
		<tr style="border-collapse: collapse; border: 1px solid #000;">
			<td style="border-collapse: collapse; border: 1px solid #000; padding: 3px;" align="center">
			4.
			</td>
			<td style="border-collapse: collapse; border: 1px solid #000; padding: 3px;">
			Matematika
			</td>
			<td style="border-collapse: collapse; border: 1px solid #000; padding: 3px;">
			<center>'.$dt["mtk"].'</center>
			</td>
		</tr>
		<tr style="border-collapse: collapse; border: 1px solid #000;">
			<td style="border-collapse: collapse; border: 1px solid #000; padding: 3px;" align="center">
			5.
			</td>
			<td style="border-collapse: collapse; border: 1px solid #000; padding: 3px;">
			Sejarah Indonesia
			</td>
			<td style="border-collapse: collapse; border: 1px solid #000; padding: 3px;">
			<center>'.$dt["sejarah"].'</center>
			</td>
		</tr>
		<tr>
			<td style="border-collapse: collapse; border: 1px solid #000; padding: 3px;" align="center">
			6.
			</td>
			<td style="border-collapse: collapse; border: 1px solid #000; padding: 3px;">
			Bahasa Inggris dan Bahasa Asing Lainnya
			</td>
			<td style="border-collapse: collapse; border: 1px solid #000; padding: 3px;">
			<center>'.$dt["b_inggr"].'</center>
			</td>
		</tr>
		<tr style="border-collapse: collapse; border: 1px solid #000;">
			<td colspan="2" style="border-collapse: collapse; border: 1px solid #000; padding: 3px;">

				B. &nbsp;&nbsp;Muatan Kewilayahan

			</td>
			<td style="border-collapse: collapse; border: 1px solid #000; padding: 3px;">
			&nbsp;
			</td>
		</tr>
		<tr style="border-collapse: collapse; border: 1px solid #000;">
			<td style="border-collapse: collapse; border: 1px solid #000; padding: 3px;">
			<center>1.</center>
			</td>
			<td style="border-collapse: collapse; border: 1px solid #000; padding: 3px;">
			Seni Budaya
			</td>
			<td style="border-collapse: collapse; border: 1px solid #000; padding: 3px;">
			<center>'.$dt["seni_budaya"].'</center>
			</td>
		</tr>
		<tr style="border-collapse: collapse; border: 1px solid #000;">
			<td style="border-collapse: collapse; border: 1px solid #000; padding: 3px;">
			<center>2.</center>
			</td>
			<td style="border-collapse: collapse; border: 1px solid #000; padding: 3px;">
			Pendidikan Jasmani, Olahraga dan Kesehatan
			</td>
			<td style="border-collapse: collapse; border: 1px solid #000; padding: 3px;">
			<center>'.$dt["pjok"].'</center>
			</td>
		</tr>
		<tr style="border-collapse: collapse; border: 1px solid #000;">
			<td style="border-collapse: collapse; border: 1px solid #000; padding: 3px;">
			<center>3.</center>
			</td>
			<td style="border-collapse: collapse; border: 1px solid #000; padding: 3px;">
			Bahasa Jawa
			</td>
			<td style="border-collapse: collapse; border: 1px solid #000; padding: 3px;">
			<center>'.$dt["b_jawa"].'</center>
			</td>
		</tr>
		<tr style="border-collapse: collapse; border: 1px solid #000;">
			<td colspan="2" style="border-collapse: collapse; border: 1px solid #000; padding: 3px;">
			
				C. &nbsp;&nbsp;Muatan Peminatan Kejuruan
			
			</td>
			<td style="border-collapse: collapse; border: 1px solid #000; padding: 3px;">
			<center>'.$dt["c"].'</center>
			</td>
		</tr>
		<tr style="border-collapse: collapse; border: 1px solid #000;">
			<td colspan="2" style="border-collapse: collapse; border: 1px solid #000; padding: 3px;">
			C1. Dasar Bidang Keahlian
			</td>
			<td style="border-collapse: collapse; border: 1px solid #000; padding: 3px;">
			<center>'.$dt["c1"].'</center>
			</td>
		</tr>
		'.$dnilai.'
		<tr style="border-collapse: collapse; border: 1px solid #000;">
			<td colspan="2" style="border-collapse: collapse; border: 1px solid #000; padding: 3px;">
			C2. Dasar Program Keahlian
			</td>
			<td style="border-collapse: collapse; border: 1px solid #000; padding: 3px;">
			<center>'.$dt["c2"].'</center>
			</td>
		</tr>
		<tr style="border-collapse: collapse; border: 1px solid #000;">
			<td colspan="2" style="border-collapse: collapse; border: 1px solid #000; padding: 3px;">
			C3. Kompetensi Keahlian
			</td>
			<td style="border-collapse: collapse; border: 1px solid #000; padding: 3px;">
			<center>'.$dt["c3"].'</center>
			</td>
		</tr>
		<tr style="border-collapse: collapse; border: 1px solid #000;">
			<td colspan="2" style="border-collapse: collapse; border: 1px solid #000; padding: 3px;" align="right">
			Rata-rata
			</td>
			<td style="border-collapse: collapse; border: 1px solid #000; padding: 3px;">
			<center>'.$dt["rata_rata"].'</center>
			</td>
		</tr>
	</tbody>
</table>


			</td>
		</tr>
		<tr>
			<td colspan="3" style="padding: 5px; font-size: 16px;">Surat Keterangan Lulus ini berlaku sementara sampai dengan diterbitkannya Ijazah Tahun Pelajaran 2019/2020, untuk menjadikan maklum bagi yang berkepentingan.</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td colspan="2">
				<table style="float:right; font-size:16px;">
					<tr><td align="center">Bangsri, 2 Mei 2020</td></tr>
					<tr><td><img src="images/ttdpakaris.png" width="215px"></td></tr>
				</table>
			</td>
		</tr>
		<tr>
			<td colspan="2" style="padding-top:146px; font-size:15px; font-weight: bold;" align="bottom"><i>SMK N 1 Bangsri / NPSN : 20360586</i></td>
			<td>&nbsp;</td>
		</tr>
	</tbody>
</table>';
$dompdf->loadHtml($html);
// Setting ukuran dan orientasi kertas
$dompdf->setPaper('Legal', 'potrait');
//$customPaper = array(0,0,612.00,1008.0);
//$dompdf->set_paper('$customPaper', 'potrait');
// Rendering dari HTML Ke PDF
$dompdf->render();
// Melakukan output file Pdf
$dompdf->stream('Pengumuman_Kelulusan_SMKN1BANGSRI.pdf');
}
?>