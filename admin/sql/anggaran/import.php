<?php
/*
-- Source Code from My Notes Code (www.mynotescode.com)
--
-- Follow Us on Social Media
-- Facebook : http://facebook.com/mynotescode/
-- Twitter  : http://twitter.com/mynotescode
-- Google+  : http://plus.google.com/118319575543333993544
--
-- Terimakasih telah mengunjungi blog kami.
-- Jangan lupa untuk Like dan Share catatan-catatan yang ada di blog kami.
*/
// Load file koneksi.php
include "../../../config/koneksi.php";
if(isset($_POST['import'])){ // Jika user mengklik tombol Import
  $nama_file_baru = 'data.xlsx';
  // Load librari PHPExcel nya
  require_once '../../assets/libraries/PHPExcel/PHPExcel.php';
  $excelreader = new PHPExcel_Reader_Excel2007();
  $loadexcel = $excelreader->load('../../assets/tmp/'.$nama_file_baru); // Load file excel yang tadi diupload ke folder tmp
  $sheet = $loadexcel->getActiveSheet()->toArray(null, true, true ,true);
  $numrow = 1;
  foreach($sheet as $row){
    // Ambil data pada excel sesuai Kolom
    $id = $row['A']; // Ambil data NIS
    $mak = $row['B']; // Ambil data nama
    $kegiatan = $row['C']; // Ambil data jenis kelamin
    $pagu = $row['D']; // Ambil data telepon
    $tgl_revisi = $row['E']; // Ambil data telepon

    // Cek jika semua data tidak diisi
    if($id == "" && $mak == "" && $kegiatan == "" && $pagu == "" && $tgl_revisi == "")
      continue; // Lewat data pada baris ini (masuk ke looping selanjutnya / baris selanjutnya)
    // Cek $numrow apakah lebih dari 1
    // Artinya karena baris pertama adalah nama-nama kolom
    // Jadi dilewat saja, tidak usah diimport
    if($numrow > 1){
      // Proses simpan ke Database
      // Buat query Insert
      $sql = $pdo->prepare("INSERT INTO anggaran VALUES(:id,:mak,:kegiatan,:pagu,:tanggal_revisi)");
      $sql->bindParam(':id', $id);
      $sql->bindParam(':mak', $mak);
      $sql->bindParam(':kegiatan', $kegiatan);
      $sql->bindParam(':pagu', $pagu);
      $sql->bindParam(':tanggal_revisi', $tgl_revisi);
      $sql->execute(); // Eksekusi query insert
    }
    $numrow++; // Tambah 1 setiap kali looping
  }
}

  $info = base64_encode("SUKSES");
  $msg = base64_encode("Sukses mengimport File");
  header('location:../../index.php?mod=anggaran&s=1&msg='.$msg);

?>