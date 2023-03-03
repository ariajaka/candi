<?php 
include('../../config/config.php');
if(isset($_GET['id']) AND $_GET['id_auto'])
{
	$idcall= $_GET['id'];
	$id_skcall= $_GET['id_auto'];
	// Hapus data sesuai Kode yang didapat di URL
		
	$sql="DELETE FROM ptj_kota where id_pk='$idcall' AND nip_ptj_kota='$id_skcall' LIMIT 1";
	$query=mysql_query($sql);
		
	if($query)
	{
	// Refresh halaman
		header('location:../../index.php?mod=ptj_kota&act=edit&id='.$idcall);
		// echo "<meta http-equiv='refresh' content='0; url=index.php?mod=surattugas&act=edit&id=$idcall'>" ;
	}
}
else
{
	// Jika tidak ada data Kode ditemukan di URL
	echo "<b>Data yang dihapus tidak ada</b>";
}
 ?>