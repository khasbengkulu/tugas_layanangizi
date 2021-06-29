<?php 
require '../fungsi.php';

if (isset($_GET['no2'])) {

$nooo=$_GET['no2'];
$cek=mysqli_query( $koneksi,"SELECT * FROM gizi WHERE idlayanan='$nooo'");
}

if (isset($_POST['kirim'])) {
if (ubah2($_POST)>0) {
		echo "<script> 
alert('data berhasil dirubah');
document.location.href='gizi.php';
	</script>";
		exit;
}

else{
			echo "<script> 
alert('data gagal dirubah');
document.location.href='edit.php';
	</script>";
		exit;
}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>edit data</title>
	<style type="text/css">
		*{
	margin: 0;
	padding:0;
	font-family: sans-serif;
}

  	a{
  		text-decoration: none;
  		color:white;

  	}
		.d{
	position: fixed;
	bottom: 0;
	right: 0;
	left: 0;
	background-color: green;
	text-align: center;
	color: white;

}
button{
	background-color: skyblue;
	color: white;
}

body{
	background-color: silver;

}

	</style>
</head>
<body>

 <center>
 	<form action="" method="POST">
 <table>
 	<?php while ($row=mysqli_fetch_assoc($cek)): {
 		
 	} ?>


 	 <center>
 	<form action="" method="POST">
 <table>
<tr>
	<td><input type="hidden" name="a" maxlength="10" required autofocus autocomplete="off" size="25px" value=" <?php echo $row['idlayanan']; ?>"></td>
</tr>
<tr>
 		<td>No RM</td>
 		<td><input type="text" name="b" maxlength="20" required autocomplete="off" size="25px" value="<?php echo $row['norm']; ?>"></td>
 </tr>
 <tr>
	<td>Waktu Layanan</td>
	<td><input type="datetime-local" name="c" maxlength="10" required autofocus autocomplete="off" value="<?php echo $row['waktulayanan']; ?>"></td>
</tr>
<tr>
 		<td>Diet</td>
 		<td><input type="text" name="d" maxlength="35" required autocomplete="off" value="<?php echo $row['diet']; ?>"></td>
 </tr>


<tr>
	<td></td>
<td><button type="submit" name="kirim">simpan</button> ||<button> <a href="gizi.php" class="u">Kembali</a></button></td>
</tr>

<?php endwhile; ?>

 </table>
 </form>
 </center>
  <div class="d"> <p>Reprogramed by Eri yulian hidayat 2021</p> </div>
</body>
</html>