<?php
$nim		= $_POST['nim'];
		$nama		= $_POST['nama'];
		$email		= $_POST['email'];
		$line		= "<br>";

		if(strlen($nama) > 10){
			
			echo "Max length 25 word";
			echo $line;
			echo "<a href ='registrasi.php'>INPUT ULANG</a>";
			echo $line;
		}
		if(!is_numeric($nim) || strlen((string)$nim) > 10){
			echo "NIM harus angka dan max lenth 10";
			echo $line;
			echo "<a href ='registrasi.php'>INPUT ULANG</a>";
			echo $line;
		}
		if(!preg_match("/^[a-zA-Z0-9._-]+@[a-zA-Z0-9]+\.[a-zA-Z.]{2,5}$/",$email)){
			
			echo "Format salah";
			echo $line;
			echo "<a href ='registrasi.php'>INPUT ULANG</a>";
			echo $line;
		}
?>
