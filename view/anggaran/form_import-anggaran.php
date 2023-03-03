<link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<script src="assets/js/jquery.min.js" type="text/javascript"></script>
<script>
    $(document).ready(function(){
      // Sembunyikan alert validasi kosong
      $("#kosong").hide();
    });
    </script>
<div style="padding: 0 15px;">
      <!-- Buat sebuah tombol Cancel untuk kemabli ke halaman awal / view data -->
      <a href="index.php?mod=anggaran&act=view" class="btn btn-danger pull-right">
        <span class="glyphicon glyphicon-remove"></span> Kembali ke Anggaran
      </a>
      
      <h3>Form Import Data</h3>
      <hr>
      
      <!-- Buat sebuah tag form dan arahkan action nya ke file ini lagi -->
      <form method="post" action="" enctype="multipart/form-data">
        <a href="assets/Format.xlsx" class="btn btn-default">
          <span class="glyphicon glyphicon-download"></span>
          Download Format
        </a><br><br>
        
        <!-- 
        -- Buat sebuah input type file
        -- class pull-left berfungsi agar file input berada di sebelah kiri
        -->
        <input type="file" name="file" class="pull-left">
        
        <button type="submit" name="preview" class="btn btn-success btn-sm">
          <span class="glyphicon glyphicon-eye-open"></span> Preview
        </button>
      </form>
      
      <hr>
      
      <!-- Buat Preview Data -->
      <?php
      // Jika user telah mengklik tombol Preview
      if(isset($_POST['preview'])){
        $nama_file_baru = 'data.xlsx';
        
        // Cek apakah terdapat file data.xlsx pada folder tmp
        if(is_file('tmp/'.$nama_file_baru)) // Jika file tersebut ada
          unlink('tmp/'.$nama_file_baru); // Hapus file tersebut
        
        $ext = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION); // Ambil ekstensi filenya apa
        $tmp_file = $_FILES['file']['tmp_name'];
        // Cek apakah file yang diupload adalah file Excel 2007 (.xlsx)
        if($ext == "xlsx"){
          // Upload file yang dipilih ke folder tmp
          move_uploaded_file($tmp_file, 'assets/tmp/'.$nama_file_baru);
          
          // Load librari PHPExcel nya
          require_once 'assets/libraries/PHPExcel/PHPExcel.php';
          
          $excelreader = new PHPExcel_Reader_Excel2007();
          $loadexcel = $excelreader->load('assets/tmp/'.$nama_file_baru); // Load file yang tadi diupload ke folder tmp
          $sheet = $loadexcel->getActiveSheet()->toArray(null, true, true ,true);
          
          // Buat sebuah tag form untuk proses import data ke database
          echo "<form method='post' action='sql/anggaran/import.php'>";
          
          // Buat sebuah div untuk alert validasi kosong
          echo "<div class='alert alert-danger' id='kosong'>
          Semua data belum diisi, Ada <span id='jumlah_kosong'></span> data yang belum diisi.
          </div>";
          
          echo "<table class='table table-bordered'>
          <tr>
            <th colspan='5' class='text-center'>Preview Data</th>
          </tr>
          <tr>
            <th>No</th>
            <th>MAK</th>
            <th>Kegiatan</th>
            <th>Pagu</th>
            <th>Tanggal Revisi</th>
          </tr>";
          
          $numrow = 1;
          $kosong = 0;
          foreach($sheet as $row){ // Lakukan perulangan dari data yang ada di excel
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
              // Validasi apakah semua data telah diisi
              $id_td = ( ! empty($id))? "" : " style='background: #E07171;'"; // Jika NIS kosong, beri warna merah
              $mak_td = ( ! empty($mak))? "" : " style='background: #E07171;'"; // Jika Nama kosong, beri warna merah
              $kegiatan_td = ( ! empty($kegiatan))? "" : " style='background: #E07171;'"; // Jika Jenis Kelamin kosong, beri warna merah
              $pagu_td = ( ! empty($pagu))? "" : " style='background: #E07171;'"; // Jika Telepon kosong, beri warna merah
              $tgl_revisi_td = ( ! empty($tgl_revisi))? "" : " style='background: #E07171;'"; // Jika Telepon kosong, beri warna merah
              
              // Jika salah satu data ada yang kosong
              if($id == "" or $mak == "" or $kegiatan == "" or $pagu == "" or $tgl_revisi == ""){
                $kosong++; // Tambah 1 variabel $kosong
              }
              
              echo "<tr>";
              echo "<td".$id_td.">".$id."</td>";
              echo "<td".$mak_td.">".$mak."</td>";
              echo "<td".$kegiatan_td.">".$kegiatan."</td>";
              echo "<td".$pagu_td.">".$pagu."</td>";
              echo "<td".$tgl_revisi_td.">".$tgl_revisi."</td>";
              echo "</tr>";
            }
            
            $numrow++; // Tambah 1 setiap kali looping
          }
          
          echo "</table>";
          
          // Cek apakah variabel kosong lebih dari 0
          // Jika lebih dari 0, berarti ada data yang masih kosong
          if($kosong > 0){
          ?>  
            <script>
            $(document).ready(function(){
              // Ubah isi dari tag span dengan id jumlah_kosong dengan isi dari variabel kosong
              $("#jumlah_kosong").html('<?php echo $kosong; ?>');
              
              $("#kosong").show(); // Munculkan alert validasi kosong
            });
            </script>
          <?php
          }else{ // Jika semua data sudah diisi
            echo "<hr>";
            
            // Buat sebuah tombol untuk mengimport data ke database
            echo "<button type='submit' name='import' class='btn btn-primary'><span class='glyphicon glyphicon-upload'></span> Import</button>";
          }
          
          echo "</form>";
        }else{ // Jika file yang diupload bukan File Excel 2007 (.xlsx)
          // Munculkan pesan validasi
          echo "<div class='alert alert-danger'>
          Hanya File Excel 2007 (.xlsx) yang diperbolehkan
          </div>";
        }
      }
      ?>
    </div>