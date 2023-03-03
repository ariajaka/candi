<?php
//lanjutkan session yang sudah dibuat sebelumnya
session_start();

//hapus session yang sudah dibuat
unset ($_SESSION['admin']);

//redirect ke halaman login
header('location:../../login.php');
?>