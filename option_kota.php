<?php
// Load file koneksi.php
include "config/koneksi.php";

// Ambil data ID Provinsi yang dikirim via ajax post
$id_provinsi = $_POST['provinsi'];

// Buat query untuk menampilkan data kota dengan provinsi tertentu (sesuai yang dipilih user pada form)
$sql = $pdo->prepare("SELECT * FROM surat_tugas INNER JOIN detail_st ON detail_st.id_sk = surat_tugas.id_sk INNER JOIN pegawai ON pegawai.nip=detail_st.petugas_nip WHERE detail_st.id_sk='".$id_provinsi."' ORDER BY detail_st.petugas_nip");
$sql->execute(); // Eksekusi querynya

// Buat variabel untuk menampung tag-tag option nya
// Set defaultnya dengan tag option Pilih
$html = "<option value=''>Pilih Petugas</option>";

while($data = $sql->fetch()){ // Ambil semua data dari hasil eksekusi $sql
	$html .= "<option value='".$data['petugas_nip']."'>".$data['nama']."</option>"; // Tambahkan tag option ke variabel $html
}

$callback = array('data_kota'=>$html); // Masukan variabel html tadi ke dalam array $callback dengan index array : data_kota

echo json_encode($callback); // konversi varibael $callback menjadi JSON
?>
