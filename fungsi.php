<?php 
$koneksi= new mysqli("localhost","root","","layanangizi");

function tambah()
{
	$a= htmlspecialchars($_POST['a']);
	$b= htmlspecialchars($_POST['b']);
	$c= htmlspecialchars($_POST['c']);
	$d= htmlspecialchars($_POST['d']);
	$e= htmlspecialchars($_POST['e']);
	$f= htmlspecialchars($_POST['f']);
	$g= htmlspecialchars($_POST['g']);
	$h= htmlspecialchars($_POST['h']);
	$i= htmlspecialchars($_POST['i']);
	$j= htmlspecialchars($_POST['j']);
   global $koneksi;
	$tambah= " INSERT INTO `pasien` VALUES('$a','$b', '$c', '$d', '$e','$f','$g', '$h', '$i', '$j');";
	$cek=$koneksi->query($tambah);
	return mysqli_affected_rows($koneksi);
}
function tambah1()
{
	$a= htmlspecialchars($_POST['a']);
	$b= htmlspecialchars($_POST['b']);
	$c= htmlspecialchars($_POST['c']);
	$d= htmlspecialchars($_POST['d']);
   global $koneksi;
	$tambah= " INSERT INTO `ruangan` VALUES('$a','$b', '$c', '$d');";
	$cek=$koneksi->query($tambah);
	return mysqli_affected_rows($koneksi);
}
function tambah2()
{
	$a= htmlspecialchars($_POST['a']);
	$b= htmlspecialchars($_POST['b']);
	$c= htmlspecialchars($_POST['c']);
	$d= htmlspecialchars($_POST['d']);
   global $koneksi;
	$tambah= " INSERT INTO `gizi` VALUES('$a','$b', '$c', '$d');";
	$cek=$koneksi->query($tambah);
	return mysqli_affected_rows($koneksi);
}
function hapus($b)
{
	global $koneksi;
		mysqli_query($koneksi,"DELETE FROM pasien WHERE noidpasien='$b'");
		return mysqli_affected_rows($koneksi);
}
function hapus1($c)
{
	global $koneksi;
		mysqli_query($koneksi,"DELETE FROM ruangan WHERE noruangan='$c'");
		return mysqli_affected_rows($koneksi);
}
function hapus2($d)
{
	global $koneksi;
		mysqli_query($koneksi,"DELETE FROM gizi WHERE idlayanan='$d'");
		return mysqli_affected_rows($koneksi);
}

function ubah()
{
global $koneksi;
	$a= htmlspecialchars($_POST['a']);
	$b= htmlspecialchars($_POST['b']);
	$c= htmlspecialchars($_POST['c']);
	$d= htmlspecialchars($_POST['d']);
	$e= htmlspecialchars($_POST['e']);
	$f= htmlspecialchars($_POST['f']);
	$g= htmlspecialchars($_POST['g']);
	$h= htmlspecialchars($_POST['h']);
	$i= htmlspecialchars($_POST['i']);
	$j= htmlspecialchars($_POST['j']);

	$ubah="UPDATE `pasien` SET norm='$a', noidpasien='$b', jenisid='$c', namapasien='$d', alamat='$e', agama='$f', golongandarah='$g', tanggallahir='$h', jeniskelamin='$i', waktudaftar='$j'";
	$cek=$koneksi->query($ubah);
	return mysqli_affected_rows($koneksi);

}
function ubah1()
{
global $koneksi;
	$a= htmlspecialchars($_POST['a']);
	$b= htmlspecialchars($_POST['b']);
	$c= htmlspecialchars($_POST['c']);
	$d= htmlspecialchars($_POST['d']);
$ubah1="UPDATE `ruangan` SET noruangan='$a', norm='$b', waktumasuk='$c', waktukeluar='$d'";
$cek=$koneksi->query($ubah1);
	return mysqli_affected_rows($koneksi);


}
function ubah2()
{
global $koneksi;
	$a= htmlspecialchars($_POST['a']);
	$b= htmlspecialchars($_POST['b']);
	$c= htmlspecialchars($_POST['c']);
	$d= htmlspecialchars($_POST['d']);
$ubah2="UPDATE `gizi` SET idlayanan='$a', norm='$b', waktulayanan='$c', diet='$d'";
$cek=$koneksi->query($ubah2);
	return mysqli_affected_rows($koneksi);


}


?>






































































































































































































































































































































































<?php  
#dibuat oleh eri yulian hidayat

?>