<?php
// Load file koneksi.php
include "config/koneksi.php";

// Ambil data ID Provinsi yang dikirim via ajax post
$id_provinsi = $_POST['provinsi'];

// Buat query untuk menampilkan data kota dengan provinsi tertentu (sesuai yang dipilih user pada form)
$sql = $pdo->prepare("SELECT * FROM pegawai a INNER JOIN detail_st_sppd b ON a.nip = b.petugas_nip_sppd WHERE b.no_sppd='".$id_provinsi."' ORDER BY b.petugas_nip_sppd");
$sql->execute(); // Eksekusi querynya

// Buat variabel untuk menampung tag-tag option nya
// Set defaultnya dengan tag option Pilih
$html = "<option value=''>Pilih Petugas</option>";

while($data = $sql->fetch()){ // Ambil semua data dari hasil eksekusi $sql
	$html .= "<option value='".$data['petugas_nip_sppd']."'>".$data['nama']."</option>"; // Tambahkan tag option ke variabel $html
}

$callback = array('data_kota'=>$html); // Masukan variabel html tadi ke dalam array $callback dengan index array : data_kota

echo json_encode($callback); // konversi varibael $callback menjadi JSON
?>
