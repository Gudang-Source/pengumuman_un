<?php
function tanggal_indo($tgl){
 $bulan = array (
  1 =>   'Januari',
  'Februari',
  'Maret',
  'April',
  'Mei',
  'Juni',
  'Juli',
  'Agustus',
  'September',
  'Oktober',
  'November',
  'Desember'
 );
 $pecah = explode('-', $tgl);
 
 
 return $pecah[2] . ' ' . $bulan[ (int)$pecah[1] ] . ' ' . $pecah[0]; 
 // variabel pecah 2 = tahun || variabel pecah 1 = bulan || variabel pecah 0 = tanggal
}
  // Tanggal 09 Juni 2020
?>