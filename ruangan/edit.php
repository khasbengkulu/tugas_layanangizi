<?php 
require '../fungsi.php';

if (isset($_GET['no1'])) {

$noo=$_GET['no1'];
$cek=mysqli_query( $koneksi,"SELECT * FROM ruangan WHERE noruangan='$noo'");
}

if (isset($_POST['kirim'])) {
if (ubah1($_POST)>0) {
		echo "<script> 
alert('data berhasil dirubah');
document.location.href='ruangan.php';
	</script>";
		exit;
}

else{
			echo "<script> 
alert('data gagal dirubah');
document.location.href='ruangan.php';
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

.r{
	position: fixed;
	right: 1%;
	top: 0.2%;
}


	</style>
</head>
<body>

 <center>
 	<form action="" method="POST">
 <table>
 	<?php $row=mysqli_fetch_assoc($cek); {
 		
 	 ?>


 	 <center>
 	<form action="" method="POST">
 <table>
<tr>
	<td>No Ruangan</td>
	<td><input type="text" name="a" maxlength="10" required autofocus autocomplete="off" size="25px" value=" <?php echo $row['noruangan']; ?>"></td>
</tr>
<tr>
 		<td><input type="hidden" name="b" maxlength="20" required autocomplete="off" size="25px" value="<?php echo $row['norm']; ?>"></td>
 </tr>
 <tr>
	<td>Waktu Masuk</td>
	<td><input type="datetime-local" name="c" maxlength="10" required autofocus autocomplete="off" value="<?php echo $row['waktumasuk']; ?>"></td>
</tr>
<tr>
 		<td>Waktu Keluar</td>
 		<td><input type="datetime-local" name="d" maxlength="20" required autocomplete="off" value="<?php echo $row['waktukeluar']; ?>"></td>
 </tr>


<tr>
	<td></td>
<td><button type="submit" name="kirim">simpan</button> ||<button> <a href="ruangan.php" class="u">Kembali</a></button></td>
</tr>

<?php }; ?>

 </table>
 </form>
 </center>
   <div class="r"><?php date_default_timezone_set("Asia/Jakarta");
echo date("d-M-Y H:i") ; ?></div>
  <div class="d"> <p>Reprogramed by Eri yulian hidayat 2021</p> </div>
</body>
</html>