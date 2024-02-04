<!DOCTYPE html>
<html>
<head>
	<title>hasil</title>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>



	<div style="display: flex; flex-direction: row;justify-content: center;margin: 10px;">
		 <a class="nav-link active" aria-current="page" href="index.php">HOME</a>
		  <a class="nav-link active" aria-current="page" href="#"><?php echo isset($_SESSION['namauser']); ?></a>
	</div>
	<div style="display: flex;justify-content: center;flex-direction: column;text-align: center;">
		<h1 style="text-align: center;">DATA RESULT</h1>

		<table border="1" style="margin: 10px;">
			<tr>
				<th style="font-weight: bolder;width: 100px;">Nama</th>
				<th style="font-weight: bolder;width: 100px;">Alamat</th>
				<th style="font-weight: bolder;width: 100px;">Telepon</th>
				<th style="font-weight: bolder;width: 100px;">Total score</th>
				<th style="font-weight: bolder;width: 250px;">keluhan</th>
				<th style="font-weight: bolder;width: 250px;">Diagnosa dan Terapi</th>
				<th style="font-weight: bolder;width: 250px;">Foto</th>
				<th style="font-weight: bolder;width: 100px;">ACTION</th>
			</tr>


			<?php 

		include 'koneksi.php';

		$cekdata = "SELECT * FROM sistempakarikarie";

		$hubungkancekdata = mysqli_query($koneksi, $cekdata);

		while($ambildata = mysqli_fetch_array($hubungkancekdata)){
			$iddata = $ambildata['id_sistem'];
			$namauser = $ambildata['nama'];
			$alamat = $ambildata['alamat'];
			$nohp = $ambildata['nohp'];
			$totalscore = $ambildata['totalscore'];
			$keluhan = $ambildata['keluhan'];
			$diagnosaterapi = $ambildata['diagnosaterapi'];
			$foto = $ambildata['foto'];
			?>

			<tr>
				<td><?php echo $namauser; ?></td>
				<td><?php echo $alamat; ?></td>
				<td><?php echo $nohp; ?></td>
				<td><?php echo $totalscore; ?></td>
				<td><?php echo $keluhan; ?></td>
				<td><?php echo $diagnosaterapi; ?></td>
				<td>
					<a href="lihatfoto.php?foto=<?php echo $foto; ?>"><img src="foto/<?php echo $foto; ?>" style="width: 50px; height: 50px;"></a>
				</td>
				<td>
					<form method="POST" action="delete.php?id=<?php echo $iddata; ?>">
						<input type="submit" name="submit" value="Delete">
					</form>
				</td>
			</tr>

		<?php
		}
		 ?>


			




		</table>
		
	</div>








    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>