<?php
<!DOCTYPE html>
<html>
<head>
	<title>Form Registrasi</title>
</head>
<body>
<form action="prosesregis.php" method="POST" enctype="multipart/form-data">
		<table>
			<tr>
				<td>
					NIM
				</td>
				<td>
					<input type="text" name="nim">
				</td>
			<tr>
				<td>
					NAMA
				</td>
				<td>
					<input type="text" name="nama">
				</td> 
			<tr>
				<td>
					E-MAIL
				</td>
				<td>
					<input type="text" name="email">
				</td>
			<tr>
				<td>
					Jenis Kelamin
				</td>
				<td>
					<input type="radio" name="jenkel">Laki-Laki
					<input type="radio" name="jenkel">Perempuan
				</td>
			<tr>
				<td>
					Program Studi
				</td>
				<td>
					<select name='prog'>
						<option value='mi'>D3 MI</option>
						<option value='ka'>D3 KA</option>
						<option value='mp'>D3 MP</option>
						<option value='tt'>D3 TT</option>
						<option value='if'>D3 IF</option>
					</select>
				</td>
			<tr>
				<td>
					Fakultas
				</td>
				<td>
					<select name='fakultas'>
						<option value='fit'>FIT</option>
						<option value='fif'>FIF</option>
						<option value='fkb'>FKB</option>
						<option value='feb'>FEB</option>
						<option value='fik'>FIK</option>
					</select>
				</td>
			<tr>
				<td>
					Hobi
				</td>
				<td>
					<input type="checkbox" name="hobi">Nonton
					<input type="checkbox" name="hobi">Main Bola
					<input type="checkbox" name="hobi">Berenang
					<input type="checkbox" name="hobi">Membaca
					<input type="checkbox" name="hobi">Makan
				</td>
			<tr>
				<td>
				Upload Gambar
			</td>
				<td><input type="file" name="filegbr" id="filegbr"></td>
			<tr>
				<td>
					<input type="submit" name="kirim" value="KIRIM">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>
?>
