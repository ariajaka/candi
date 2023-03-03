<?php 
include('../../config/config.php');
if(isset($_GET['id']) )
{
	$idcall= $_GET['id'];
	$id_autocall= $_GET['id_auto'];
	// Hapus data sesuai Kode yang didapat di URL
		
	$sql="DELETE FROM detail_ptj_luar where id_pl='$idcall' AND id='$id_autocall' LIMIT 1";
	$query=mysql_query($sql);
		
	if($query)
	{
	// Refresh halaman
		header('location:../../index.php?mod=ptj_luar_kota&act=edit&id='.$idcall);
		// echo "<meta http-equiv='refresh' content='0; url=index.php?mod=surattugas&act=edit&id=$idcall'>" ;
	}
}
else
{
	// Jika tidak ada data Kode ditemukan di URL
	echo "<b>Data yang dihapus tidak ada</b>";
}
?>