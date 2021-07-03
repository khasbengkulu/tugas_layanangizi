<?php 
require '../fungsi.php';
if (isset($_POST['kirim'])) {

	if (tambah1($_POST) > 0) {
		echo "<script> 
alert('data berhasil ditambah');
document.location.href='ruangan.php';
	</script>";
}

else{
		echo "<script> 
alert('data gagal ditambah');
document.location.href='input1.php';
	</script>";
}
}

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>tambah data</title>
 	<style type="text/css">


 				.d{
	position: fixed;
	bottom: 0;
	right: 0;
	left: 0;
	background-color: green;
	text-align: center;
	color: white;

}
 		*{
 			margin: 0;
 			padding: 0;
 			font-family: sans-serif;
 		}
 		body{
 			background-color: skyblue;
 		}

 		table{
 			padding: 2%;
 		}
 		button{
 			color: white;
 			background-color: green;
 		}

 		a.u{
 			color: white;
 			text-decoration: none;
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
<tr>
	<td>No Ruangan</td>
	<td><input type="text" name="a" maxlength="11" required autofocus autocomplete="off" size="25px"></td>
</tr>
<tr>
 		<td>No RM</td>
 		<td><input type="text" name="b" maxlength="10" required autocomplete="off" size="25px"></td>
 </tr>
 <tr>
	<td>Waktu Masuk</td>
	<td><input type="datetime-local" name="c" maxlength="35" required autofocus autocomplete="off"></td>
</tr>
<tr>
 		<td>Waktu Keluar</td>
 		<td><input type="datetime-local" name="d" maxlength="35" required autocomplete="off"></td>
 </tr>


<tr>
	<td></td>
<td><button type="submit" name="kirim" >tambah</button> ||<button> <a href="ruangan.php" class="u">Kembali</a></button></td>
</tr>

 </table>
 </form>
</center>
  <div class="r"><?php date_default_timezone_set("Asia/Jakarta");
echo date("d-M-Y H:i") ; ?></div>
  <div class="d"> <p>Rprogramed by Eri yulian hidayat</p> </div>
 </body>
 </html>