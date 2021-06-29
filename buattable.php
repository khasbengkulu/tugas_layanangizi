<?php 
require 'fungsi.php';

$buat1="CREATE TABLE `layanangizi`.`pasien`(`norm` varchar(10)NOT NULL , `noidpasien` varchar(20)NOT NULL, `jenisid` varchar(15)NOT NULL, `namapasien` varchar(50)NOT NULL, `alamat` varchar(100)NOT NULL, `agama` varchar(30)NOT NULL, `golongandarah` varchar(2)NOT NULL, `tanggallahir` date NOT NULL, `jeniskelamin` varchar(15)NOT NULL,`waktudaftar` varchar(35)NOT NULL, PRIMARY KEY(`norm`)) ENGINE = InnoDB;";
$q=$koneksi->query($buat1);

if ($q) {
	echo "table berhasil dibuat";
	echo "<br>";
}

else{
	
	echo "table gagal dibuat";
	echo "<br>";
}


$buat2="CREATE TABLE `layanangizi`.`ruangan`(`noruangan` varchar(11)NOT NULL, `norm` varchar(10)NOT NULL, `waktumasuk` varchar(35)NOT NULL, `waktukeluar` varchar(35)NOT NULL, PRIMARY KEY (`norm`))ENGINE =InnoDB;";

$q1=$koneksi->query($buat2);

if ($q1) {
	
	echo "table berhasil dibuat";
	echo "<br>";
}

else{
	
	echo "table gagal dibuat";
	echo "<br>";
}


$buat3="CREATE TABLE `layanangizi`.`gizi`(`idlayanan` int(11) NOT NULL AUTO_INCREMENT, `norm` varchar(10)NOT NULL, `waktulayanan` varchar(35)NOT NULL, `diet` varchar(35)NOT NULL, PRIMARY KEY (`idlayanan`))ENGINE =InnoDB;";

$q2=$koneksi->query($buat3);

if ($q2) {
	
	echo "table berhasil dibuat";
}

else{
	
	echo "table gagal dibuat";
}





 ?>