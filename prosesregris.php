<?php 

	$host="localhost";
	$user="root";
	$pass="";
	$db="db_mhs";

	$conn=mysqli_connect($host,$user,$pass,$db)or die("Koneksi gagal");
	if(isset($_POST['submit'])){

	$nim=$_POST['nim'];
		$nama=$_POST['nama'];
		$email=$_POST['email'];
		$cekemail="@gmail.com";
		$cariemail=strpos($email,$cekemail);


			if(strlen($nim)==10){
				if(strlen($nama)<25){
					if(strpos($email,"@gmail.com")){
						$sql=$conn->query("INSERT INTO `datamhs`(`nim`,`nama`,`email`)VALUES('$nim','$nama','$email')");
				echo"REGISTRASI BERHASIL";

					}else{
						echo"gagal bre,EMAIL HARUS MENGGUNAKAN @gmail.com";
					}
					

				}else{
					echo "gagal coy,NAMA TIDAK BOLEH LEBIH DARI 25 KARAKTER";
				}
				

			}else{
				echo "gagal, NIM HARUS 10 karakter dan harus angka";
			}
		}
?>
