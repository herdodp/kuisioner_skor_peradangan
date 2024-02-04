<?php 

include 'koneksi.php';

$foto = $_GET['foto'];

$ambildatafoto = "SELECT * FROM sistempakarikarie WHERE foto = '$foto'";
$hubungkanambildatafoto = mysqli_query($koneksi, $ambildatafoto);

while($ambilfoto = mysqli_fetch_array($hubungkanambildatafoto)){
	$namafoto = $ambilfoto['foto'];
}


 ?>
<!DOCTYPE html>
<html>
<head>
	<title>lihat foto</title>
</head>
<body>

	<div style="display: flex; justify-content: center;flex-direction: column;">
		<h3><a href="hasil.php">back</a></h3>
		<img src="foto/<?php echo $namafoto; ?>" style="width: 100%; height: 700px;">
	</div>

</body>
</html>

