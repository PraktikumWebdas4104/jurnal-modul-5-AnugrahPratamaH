<form method="POST">
	<table>
		<tr>
			<td>NIM</td>
			<td>:</td>
			<td><input type="number" name="nim" length="10" >
			</td>
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><input type="text" name="nama" length ="25"></td>
		</tr>
		<tr>
			<td>Email</td>
			<td>:</td>
			<td><input type="email" name="email"></td>
		</tr>
		<tr>
			<td><input type="submit" name="submit" value="daftar"></td>
		</tr>
	</table>
</form>

<?php 

	if(isset($_POST['submit'])){
		include 'prosesregris.php';
			

			

		

	}


 ?>
