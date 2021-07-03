<?php 
require '../fungsi.php';

if (isset($_GET['no'])) {

$noo=$_GET['no'];
$cek=mysqli_query( $koneksi,"SELECT * FROM pasien WHERE norm='$noo'");
}

if (isset($_POST['kirim'])) {
if (ubah($_POST)>0) {
		echo "<script> 
alert('data berhasil dirubah');
document.location.href='daftar.php';
	</script>";
		exit;
}

else{
			echo "<script> 
alert('data gagal dirubah');

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
<tr>
	<td><input type="hidden" name="k" value="<?php echo $row['id']; ?>"></td>
	<td><input type="hidden" name="a" maxlength="10" required  autocomplete="off" value=" <?php echo $row['norm']; ?>"></td>
</tr>
<tr>
 		<td>No Id Pasien</td>
 		<td><input type="text" name="b" maxlength="20" autofocus required autocomplete="off" value="<?php echo $row['noidpasien']; ?>"></td>
 </tr>
 <tr>
 		<td>Jenis Id</td>
 		<td> <select name="c" value="<?php echo $row['jenisid']; ?>">
 			<option>KTP</option>
 			<option>SIM</option>
 			<option>Pasport</option>
 			<option>lainnya</option>
 		</select></td>
 </tr>
 <tr>
 		<td>Nama Pasien</td>
 		<td><input type="text" name="d" maxlength="50" required autocomplete="off" value="<?php echo $row['namapasien']; ?>"></td>
 </tr>
 <tr>
 		<td>Alamat</td>
 		<td><input type="text" name="e" maxlength="100" required autocomplete="off" value="<?php echo $row['alamat']; ?>"></td>
 </tr>
 <tr>
 		<td>Agama</td>
 		<td><select name="f" value="<?php echo $row['agama']; ?>">
 			<option>Islam</option>
 			<option>Kristen</option>
 			<option>Budha</option>
 			<option>Hindu</option>
 			<option>Konghucu</option>
 			<option>Ateis</option>
 		</select></td>
 </tr>
 <tr>
 		<td>Golongan Darah</td>
 		<td>
 			<select name="g" value="<?php echo $row['golongandarah']; ?>">
 				<option>A</option>
 				<option>B</option>
 				<option>AB</option>
 				<option>O</option>
 			</select>
 		</td>
</tr>
<tr>

 		<td>Tanggal Lahir</td>
 		<td><input type="date" name="h" required value="<?php echo $row['tanggallahir']; ?>"></td>
</tr>
<tr>
 		<td>Jenis Kelamin</td>
 		<td>
 			<select name="i" value="<?php echo $row['jeniskelamin']; ?>">
 				<option>Laki-laki</option>
 				<option>Perempuan</option>
 			</select>
 		</td>
</tr>

 		<td><input type="hidden" name="j" value="<?php date_default_timezone_set("Asia/Jakarta");
echo date("d-M-Y H:i") ; ?>"></td>
<td><button type="submit" name="kirim">Simpan</button> || <button > <a href="daftar.php">Kembali</a></button></td>
</tr>
<?php };?>

 </table>
 </form>
      <div class="r"><?php date_default_timezone_set("Asia/Jakarta");
echo date("d-M-Y H:i") ; ?></div>
  <div class="d"> <p>Reprogramed by Eri yulian hidayat 2021</p> </div>
</body>
</html>