<?php 

include 'koneksi.php';

error_reporting(0);

if(isset($_POST['submit'])){

		$nama = $_POST['nama'];
		$alamat = $_POST['alamat'];
		$nohp = $_POST['nohp'];
		$uploadfoto = $_FILES['uploadfoto']['name'];
		$a =  $_POST['0'];
		$b =  $_POST['1'];
		$c =  $_POST['2'];
		$d =  $_POST['3'];
		$e =  $_POST['4'];
		$f =  $_POST['5'];
		$g =  $_POST['6'];
		$h =  $_POST['7'];
		$i =  $_POST['8'];
		$j =  $_POST['9'];
		$k =  $_POST['10'];
		$l =  $_POST['11'];
		$m =  $_POST['12'];
		$n =  $_POST['13'];
		$o =  $_POST['14'];
		$p =  $_POST['15'];
		$q =  $_POST['16'];
		$r =  $_POST['17'];
		$s =  $_POST['18'];
		$t =  $_POST['19'];
		$u =  $_POST['20'];
		$v =  $_POST['21'];
		$w =  $_POST['22'];
		$x =  $_POST['23'];
		$y =  $_POST['24'];
		$z =  $_POST['25'];

		$aa = $_POST['26'];
		$bb = $_POST['27'];
		$cc = $_POST['28'];
		$dd = $_POST['29'];
		$ee = $_POST['30'];
		$ff = $_POST['31'];
		$gg = $_POST['32'];
		$hh = $_POST['33'];
		$ii = $_POST['34'];
		$jj = $_POST['35'];
		$kk = $_POST['36'];
		$ll = $_POST['37'];
		$mm = $_POST['38'];
		$nn = $_POST['39'];
		$oo = $_POST['40'];
		$pp = $_POST['41'];
		$qq = $_POST['42'];
		$rr = $_POST['43'];
		$ss = $_POST['44'];
		$tt = $_POST['45'];
		$uu = $_POST['46'];
		$vv = $_POST['47'];
		$ww = $_POST['48'];
		$xx = $_POST['49'];
		$yy = $_POST['50'];
		$zz = $_POST['51'];

		$aaa = $_POST['52'];
		$bbb = $_POST['53'];
		$ccc = $_POST['54'];
		$ddd = $_POST['55'];
		$eee = $_POST['56'];
		$fff = $_POST['57'];
		$ggg = $_POST['58'];
		$hhh = $_POST['59'];
		$iii = $_POST['60'];
		$jjj = $_POST['61'];
		$kkk = $_POST['62'];
		$lll = $_POST['63'];
		$mmm = $_POST['64'];
		$nnn = $_POST['65'];
		$ooo = $_POST['66'];
		$ppp = $_POST['67'];
		$qqq = $_POST['68'];
		
		
		
		
		$a1 =  $_POST['a1'];

		$b1 =  $_POST['b1'];
	
		$c1 =  $_POST['c1'];

		$d1 =  $_POST['d1'];

		$e1 =  $_POST['e1'];

		$f1 =  $_POST['f1'];

		$g1 =  $_POST['g1'];


		$keluhan =  $_POST['keluhan'];
		$diagnosaterapi =  $_POST['diagnosaterapi'];
		

	


	$pilihanuser = [$a,$b,$c,$d,$e,$f,$g,$h,$i,$j,$k,$l,$m,$n,$o,$p,$q,$r,$s,$t,$u,$v,$w,$x,$y,$z,$aa,$bb,$cc,$dd,$ee,$ff,$gg,$hh,$ii,$jj,$kk,$ll,$mm,$nn,$oo,$pp,$qq,$rr,$ss,$tt,$uu,$vv,$ww,$xx,$yy,$zz,$aaa,$bbb,$ccc,$ddd,$eee,$fff,$ggg,$hhh,$iii,$jjj,$kkk,$lll,$mmm,$nnn,$ooo,$ppp,$qqq,$a1,$b1,$c1,$d1,$e1,$f1,$g1];

	

	$totalsum = array_sum($pilihanuser);


	$masukkandata = "INSERT INTO sistempakarikarie set nama = '$nama',alamat = '$alamat',nohp = '$nohp' ,totalscore = '$totalsum', keluhan = '$keluhan', diagnosaterapi = '$diagnosaterapi', foto = '$uploadfoto'";

	$hubungkamasukkandata = mysqli_query($koneksi,$masukkandata);

	move_uploaded_file($_FILES['uploadfoto']['tmp_name'], "foto/". $uploadfoto );


	if($hubungkamasukkandata){
		header("location:result.php");	
	}else{
		?>
		<script type="text/javascript">
			alert("data gagal terkirim");
		</script>
<?php  
}
}
 ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


    <title>Kuisioner skor peradangan</title>
  </head>
  <body>

  <?php 

  include 'koneksi.php';

  session_start();

  if($_SESSION['namauser']){
?>

<div class="containeri" style="display: flex;flex-direction: column;">



		<!-- open navbar --> 
		<nav class="navbar navbar-expand-lg bg-light">
		  <div class="container-fluid">
		    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		      <span class="navbar-toggler-icon"></span>
		    </button>
		    <div class="collapse navbar-collapse" id="navbarSupportedContent">
		      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
		        <li class="nav-item">
		          <a class="nav-link active" aria-current="page" href="#"><?php echo $_SESSION['namauser']; ?></a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link" href="logout.php">Logout</a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link" href="hasil.php">DATA RECORD</a>
		        </li>
		      </ul>
		    </div>
		  </div>
		</nav>
  		<!-- close navbar -->




  		<!-- open judul -->
		<h1 style="text-align: center; margin-top: 50px; font-weight: bolder;">KUISIONER KELUHAN TUBUH</h1>
		<!-- close judul -->




  		<div style="display: flex;justify-content: center;text-align: center;align-items: center;line-height: 30px;">
  			<form method="POST" enctype="multipart/form-data">

  				<table border-spacing="30px;">

  					<tr>
  						<td><label>Nama</label></td>
  					</tr>

  					<tr>
  						<td><input type="text" name="nama"></td>
  					</tr>


  					<tr>
  						<td><label>Alamat</label></td>
  					</tr>

  					<tr>
  						<td><input type="text" name="alamat"></td>
  					</tr>


  					<tr>
  						<td><label>Nomor telepon</label></td>
  					</tr>

  					<tr>
  						<td><input type="text" name="nohp"></td>
  					</tr>


  					<tr>
  						<td><label style="font-weight: bolder;color: blue;">SILAHKAN PILIH HANYA SALAH SATU JAWABAN DARI TIAP PERTANYAAN</label></td>
  					</tr>





  					<!-- nomor 1 -->
  					<tr>
  						<td><label style="font-weight: bolder;">1. Seberapa sering Anda mengalami brain fog / pikiran buntu dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="1">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="1">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="1">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="1">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="1">
								<label class="form-check-label">setiap hari</label>
							</div>

  						</td>
  					</tr>
  					<!-- nomor 1-->




  					<!-- nomor 2 -->
  					<tr>
  						<td><label style="font-weight: bolder;">2. Seberapa sering Anda mengalami Sulit mengingat sesuatu dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="2">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="2">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="2">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="2">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="2">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 2 -->

  					


  					<!-- nomor 3 -->
  					<tr>
  						<td><label style="font-weight: bolder;">3. Seberapa sering Anda mengalami Sulit mengambil keputusan dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="3">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="3">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="3">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="3">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="3">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 3 -->
  					





  					<!-- nomor 4 -->
  					<tr>
  						<td><label style="font-weight: bolder;">4. Seberapa sering Anda mengalami Bicara cadel atau gagap dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="4">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="4">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="4">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="4">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="4">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 4 -->



  					<!-- nomor 5 -->
  					<tr>
  						<td><label style="font-weight: bolder;">5. Seberapa sering Anda mengalami sulit belajar atau berkonsentrasi/attention deficit dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="5">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="5">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="5">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="5">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="5">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 5 -->




  					<!-- nomor 6 -->
  					<tr>
  						<td><label style="font-weight: bolder;">6. Seberapa sering Anda mengalami sulit dalam mengkoordinasi sesuatu dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="6">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="6">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="6">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="6">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="6">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 6 -->



  					<!-- nomor 7 -->
  					<tr>
  						<td><label style="font-weight: bolder;">7. Seberapa sering Anda mengalami Nyeri Kepala dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="7">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="7">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="7">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="7">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="7">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 7 -->



  					<!-- nomor 8 -->
  					<tr>
  						<td><label style="font-weight: bolder;">8. Seberapa sering Anda mengalami Migrains (nyeri kepala sebelah) dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="8">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="8">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="8">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="8">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="8">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 8 -->



  					<!-- nomor 9 -->
  					<tr>
  						<td><label style="font-weight: bolder;">9. Seberapa sering Anda mengalami Pingsan dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="9">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="9">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="9">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="9">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="9">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 9-->



  					<!-- nomor 10 -->
  					<tr>
  						<td><label style="font-weight: bolder;">10. Seberapa sering Anda mengalami Memiliki masalah tidur dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="10">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="10">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="10">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="10">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="10">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 10 -->



  					<!-- nomor 11 -->
  					<tr>
  						<td><label style="font-weight: bolder;">11. Seberapa sering Anda mengalami Kelopak mata mudah merah dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="11">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="11">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="11">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="11">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="11">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 11 -->



  					<!-- nomor 12 -->
  					<tr>
  						<td><label style="font-weight: bolder;">12. Seberapa sering Anda mengalami Kelopak Mata Mudah Bengkak dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="12">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="12">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="12">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="12">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="12">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 12 -->



  					<!-- nomor 13 -->
  					<tr>
  						<td><label style="font-weight: bolder;">13. Seberapa sering Anda mengalami Dark Circle (kelopak mata bawah berwarna hitam) dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="13">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="13">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="13">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="13">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="13">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 13 -->



  					<!-- nomor 14 -->
  					<tr>
  						<td><label style="font-weight: bolder;">14. Seberapa sering Anda mengalami Poor Vision (kesehatan mata yang menurun) dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="14">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="14">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="14">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="14">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="14">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 14 -->




  					<!-- nomor 15 -->
  					<tr>
  						<td><label style="font-weight: bolder;">15. Seberapa sering Anda mengalami Mata gatal dan berair dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="15">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="15">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="15">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="15">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="15">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 15 -->




  					<!-- nomor 16 -->
  					<tr>
  						<td><label style="font-weight: bolder;">16. Seberapa sering Anda mengalami Hidung Tersumbat dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="16">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="16">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="16">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="16">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="16">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 16 -->




  					<!-- nomor 17 -->
  					<tr>
  						<td><label style="font-weight: bolder;">17. Seberapa sering Anda mengalami Lendir yang berlebihan dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="17">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="17">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="17">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="17">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="17">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 17 -->



  					<!-- nomor 18 -->
  					<tr>
  						<td><label style="font-weight: bolder;">18. Seberapa sering Anda mengalami Hidung mudah meler dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="18">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="18">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="18">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="18">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="18">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 18 -->




  					<!-- nomor 19 -->
  					<tr>
  						<td><label style="font-weight: bolder;">19. Seberapa sering Anda mengalami Masalah pada sinus paranasalis (didiagnosa sinusitis oleh dokter) dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="19">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="19">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="19">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="19">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="19">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 19 -->




  					<!-- nomor 20 -->
  					<tr>
  						<td><label style="font-weight: bolder;">20. Seberapa sering Anda mengalami Sering Bersin dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="20">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="20">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="20">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="20">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="20">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 20 -->




  					<!-- nomor 21 -->
  					<tr>
  						<td><label style="font-weight: bolder;">21. Seberapa sering Anda mengalami Telinga mudah gatal dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="21">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="21">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="21">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="21">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="21">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 21 -->



  					<!-- nomor 22 -->
  					<tr>	
  						<td><label style="font-weight: bolder;">22. Seberapa sering Anda mengalami Telinga berdenging dan gangguan pendengaran dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="22">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="22">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="22">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="22">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="22">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 22 -->




  					<!-- nomor 23 -->
  					<tr>
  						<td><label style="font-weight: bolder;">23. Seberapa sering Anda mengalami Keluar cairan pada telinga dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="23">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="23">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="23">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="23">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="23">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 23 -->




  					<!-- nomor 24 -->
  					<tr>
  						<td><label style="font-weight: bolder;">24. Seberapa sering Anda mengalami Infeksi telinga dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="24">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="24">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="24">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="24">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="24">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 24 -->




  					<!-- nomor 25 -->
  					<tr>
  						<td><label style="font-weight: bolder;">25. Seberapa sering Anda mengalami Batuk kronis dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="25">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="25">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="25">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="25">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="25">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 25 -->




  					<!-- nomor 26 -->
  					<tr>
  						<td><label style="font-weight: bolder;">26. Seberapa sering Anda mengalami Sering berdehem seperti ada dahak di tenggorokan dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="26">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="26">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="26">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="26">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="26">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 26 -->




  					<!-- nomor 27 --> 
  					<tr>
  						<td><label style="font-weight: bolder;">27. Seberapa sering Anda mengalami Nyeri tenggorokan Bibir mudah bengkak dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="27">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="27">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="27">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="27">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="27">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 27 -->

  					


  					<!-- nomor 28 -->
  					<tr>
  						<td><label style="font-weight: bolder;">28. Seberapa sering Anda mengalami Sariawan dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="28">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="28">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="28">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="28">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="28">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 28 -->




  					<!-- nomor 29 -->
  					<tr>
  						<td><label style="font-weight: bolder;">29. Seberapa sering Anda mengalami Detak jantung tidak teratur dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="29">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="29">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="29">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="29">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="29">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 29 -->




  					<!-- nomor 30 -->
  					<tr>
  						<td><label style="font-weight: bolder;">30. Seberapa sering Anda mengalami Detak jantung cepat/deg-degan dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="30">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="30">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="30">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="30">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="30">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 30 -->




  					<!-- nomor 31 -->
  					<tr>
  						<td><label style="font-weight: bolder;">31. Seberapa sering Anda mengalami Nyeri dada dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="31">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="31">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="31">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="31">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="31">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 31 -->




  					<!-- nomor 32 -->
  					<tr>
  						<td><label style="font-weight: bolder;">32. Seberapa sering Anda mengalami Dada terasa sesak 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="32">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="32">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="32">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="32">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="32">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 32 -->




  					<!-- nomor 33 -->
  					<tr>
  						<td><label style="font-weight: bolder;">33. Seberapa sering Anda mengalami Asma/Bronkitis dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="33">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="33">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="33">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="33">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="33">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 33 -->




  					<!-- nomor 34 -->
  					<tr>
  						<td><label style="font-weight: bolder;">34. Seberapa sering Anda mengalami Sesak Nafas dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="34">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="34">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="34">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="34">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="34">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 34 -->




  					<!-- nomor 35 -->
  					<tr>
  						<td><label style="font-weight: bolder;">35. Seberapa sering Anda mengalami Kesulitan Bernafas dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="35">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="35">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="35">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="35">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="35">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 35 -->




  					<!-- nomor 36 -->
  					<tr>
  						<td><label style="font-weight: bolder;">36. Seberapa sering Anda mengalami Jerawat dalam 1 bulan terakhir?</label></td>
  					</tr>

  					
  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="36">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="36">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="36">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="36">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="36">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 36 -->




  					<!-- nomor 37 -->
  					<tr>
  						<td><label style="font-weight: bolder;">37. Seberapa sering Anda mengalami Gatal-gatal, Eczema, kulit kering dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="37">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="37">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="37">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="37">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="37">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 37 -->




  					<!-- nomor 38 -->
  					<tr>
  						<td><label style="font-weight: bolder;">38. Seberapa sering Anda mengalami Rambut Rontok dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="38">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="38">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="38">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="38">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="38">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 38 -->




  					<!-- nomor 39 -->
  					<tr>
  						<td><label style="font-weight: bolder;">39. Seberapa sering Anda mengalami Hot Flashes (merasa hangat tiba-tiba di darah wajah, leher, dada & berkeringat) dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="39">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="39">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="39">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="39">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="39">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 39 -->




  					<!-- nomor 40 -->
  					<tr>
  						<td><label style="font-weight: bolder;">40. Seberapa sering Anda mengalami Sulit menurunkan berat badan dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="40">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="40">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="40">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="40">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="40">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 40 -->




  					<!-- nomor 41 -->
  					<tr>
  						<td><label style="font-weight: bolder;">41. Seberapa sering Anda mengalami Food cravings (menginginkan dengan sangat makanan tertentu) dan mengalami kelebihan berat badan dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="41">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="41">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="41">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="41">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="41">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 41 -->




  					<!-- nomor 42 -->
  					<tr>
  						<td><label style="font-weight: bolder;">42. Seberapa sering Anda mengalami Berat badan kurang dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="42">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="42">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="207">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="42">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="42">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 42 -->




  					<!-- nomor 43 -->
  					<tr>
  						<td><label style="font-weight: bolder;">43. Seberapa sering Anda mengalami Makan berlebihan dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="43">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="43">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="43">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="43">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="43">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 43 -->




  					<!-- nomor 44 -->
  					<tr>
  						<td><label style="font-weight: bolder;">44. Seberapa sering Anda mengalami bengkak pada kaki dan tangan (oedema) dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="44">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="44">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="44">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="44">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="44">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 44 -->




  					<!-- nomor 45 -->
  					<tr>
  						<td><label style="font-weight: bolder;">45. Seberapa sering Anda mengalami Mual, Muntah dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="45">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="45">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="45">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="45">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="45">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 45 -->




  					<!-- nomor 46 -->
  					<tr>
  						<td><label style="font-weight: bolder;">46. Seberapa sering Anda mengalami Diare dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="46">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="46">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="46">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="46">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="46">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 46 -->




  					<!-- nomor 47 -->
  					<tr>
  						<td><label style="font-weight: bolder;">47. Seberapa sering Anda mengalami Konstipasi dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="47">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="47">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="47">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="47">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="47">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 47 -->




  					<!-- nomor 48 -->
  					<tr>
  						<td><label style="font-weight: bolder;">48. Seberapa sering Anda mengalami Sering Kembung dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="48">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="48">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="48">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="48">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="48">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 48 -->




  					<!-- nomor 49 -->
  					<tr>
  						<td><label style="font-weight: bolder;">49. Seberapa sering Anda mengalami Sering kentut dan bersendawa dan tangan dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="49">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="49">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="49">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="49">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="49">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 49 -->




  					<!-- nomor 50 -->
  					<tr>
  						<td><label style="font-weight: bolder;">50. Seberapa sering Anda mengalami Heartburn/dada terasa seperti panas terbakar dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="50">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="50">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="50">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="50">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="50">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 50 -->




  					<!-- nomor 51 -->
  					<tr>
  						<td><label style="font-weight: bolder;">51. Seberapa sering Anda mengalami Intestinal/Stomach pain or cramps (kram atau nyeri perut) dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="51">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="51">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="51">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="51">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="51">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 51 -->




  					<!-- nomor 52 -->
  					<tr>
  						<td><label style="font-weight: bolder;">52. Seberapa sering Anda mengalami Sering cemas dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="52">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="52">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="52">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="52">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="52">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 52 -->





  					<!-- nomor 53 -->
  					<tr>
  						<td><label style="font-weight: bolder;">53. Seberapa sering Anda mengalami Depresi dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="53">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="53">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="53">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="53">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="53">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 53 -->





  					<!-- nomor 54 -->
  					<tr>
  						<td><label style="font-weight: bolder;">54. Seberapa sering Anda mengalami Mood Swings (mood naik turun) dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="54">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="54">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="54">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="54">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="54">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 54 -->




  					<!-- nomor 55 -->
  					<tr>	
  						<td><label style="font-weight: bolder;">55. Seberapa sering Anda mengalami Sering gugup tiba-tiba dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="55">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="55">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="55">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="55">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="55">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 55 -->





  					<!-- nomor 56 -->
  					<tr>
  						<td><label style="font-weight: bolder;">56. Seberapa sering Anda mengalami Mudah Marah dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="56">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="56">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="56">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="56">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="56">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 56 -->





  					<!-- nomor 57 -->
  					<tr>
  						<td><label style="font-weight: bolder;">57. Seberapa sering Anda mengalami Fatigue dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="57">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="57">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="57">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="57">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="57">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 57 -->




  					<!-- nomor 58 -->
  					<tr>
  						<td><label style="font-weight: bolder;">58. Seberapa sering Anda mengalami Lesu/Lethargy Hiperaktif dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="58">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="58">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="58">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="58">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="58">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 58 -->





  					<!-- nomor 59 -->
  					<tr>
  						<td><label style="font-weight: bolder;">59. Seberapa sering Anda mengalami Gelisah dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="59">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="59">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="59">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="59">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="59">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 59 -->





  					<!-- nomor 60 -->
  					<tr>
  						<td><label style="font-weight: bolder;">60. Seberapa sering Anda mengalami Nyeri Sendi dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="60">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="60">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="60">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="60">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="60">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 60 -->




  					<!-- nomor 61 -->
  					<tr>
  						<td><label style="font-weight: bolder;">61. Seberapa sering Anda mengalami Artritis/radang sendi dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="61">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="61">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="61">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="61">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="61">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 61 -->





  					<!-- nomor 62 -->
  					<tr>
  						<td><label style="font-weight: bolder;">62. Seberapa sering Anda mengalami Kaku otot dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="62">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="62">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="62">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="62">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="62">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 62 -->





  					<!-- nomor 63 -->
  					<tr>
  						<td><label style="font-weight: bolder;">63. Seberapa sering Anda mengalami Nyeri otot dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="63">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="63">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="63">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="63">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="63">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 63 -->





  					<!-- nomor 64 -->
  					<tr>
  						<td><label style="font-weight: bolder;">64. Seberapa sering Anda mengalami Weakness (merasa tubuh lemah sekali), Tiredness (merasa tubuh lelah sekali) dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="64">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="64">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="64">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="64">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="64">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 64 -->





  					<!-- nomor 65 -->
  					<tr>
  						<td><label style="font-weight: bolder;">65. Seberapa sering Anda mengalami Sering sakit/infeksi dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="65">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="65">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="65">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="65">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="65">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 65 -->





  					<!-- nomor 66 -->
  					<tr>
  						<td><label style="font-weight: bolder;">66. Seberapa sering Anda mengalami Sering bermasalah pada saluran kandung kemih dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="66">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="66">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="66">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="66">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="66">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 66 -->





  					<!-- nomor 67 -->
  					<tr>
  						<td><label style="font-weight: bolder;">67. Seberapa sering Anda mengalami Gatal pada area Genitalia dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="67">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="67">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="67">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="67">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="67">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 67 -->





  					<!-- nomor 68 -->
  					<tr>
  						<td><label style="font-weight: bolder;">68. Seberapa sering Anda mengalami Gatal pada anus dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="68">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="68">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="68">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="68">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="68">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 68 -->





  				



  					<tr>
  						<td><label style="font-weight: bolder; color: red;"><u>Apakah anda memiliki diagnosa penyakit autoimun dari hasil lab dan diagnosa dokter ?</u></label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline" style="margin-left: 10px;">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="80" name="a1">
							  <label class="form-check-label" for="inlineCheckbox1">YA</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="0" name="a1">
							  <label class="form-check-label" for="inlineCheckbox2">TIDAK</label>
							</div>
  						</td>
  					</tr>



  					<tr>
  						<td><label style="font-weight: bolder;color: red;"><u>Apakah anda memiliki lebih dari 1 penyakit autoimun?</u></label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline" style="margin-left: 10px;">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="100" name="b1">
							  <label class="form-check-label" for="inlineCheckbox1">YA</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="0" name="b1">
							  <label class="form-check-label" for="inlineCheckbox2">TIDAK</label>
							</div>
  						</td>
  					</tr>



  					<tr>
  						<td><label style="font-weight: bolder;color: red;"><u>Apakah anda mengalami peningkatan penanda inflamasi seperti ESR (Erythrocyte sedimentation rate), CPR (C-Reactive Protein) atau homocystein?</u></label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline" style="margin-left: 10px;">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="10" name="c1">
							  <label class="form-check-label" for="inlineCheckbox1">YA</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="0" name="c1">
							  <label class="form-check-label" for="inlineCheckbox2">TIDAK</label>
							</div>
  						</td>
  					</tr>






  					<tr>
  						<td><label style="font-weight: bolder;color: red;"><u>Apakah anda memiliki kerabat dekat (orang tua atau saudara) dengan penyakit autoimun?</u></label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline" style="margin-left: 10px;">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="10" name="d1">
							  <label class="form-check-label" for="inlineCheckbox1">Iya, orang tua memiliki penyakit autoimun</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="2" name="d1">
							  <label class="form-check-label" for="inlineCheckbox2">iya, saudara memiliki penyakit autoimun</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="0" name="d1">
							  <label class="form-check-label" for="inlineCheckbox2">TIDAK</label>
							</div>
  						</td>
  					</tr>



  					<tr>
  						<td><label style="font-weight: bolder;color: red;"><u>Apakah anda memiliki kerabat "a second degree relative" seperti kakek nenek, paman, bibik dll yang memiliki penyakit autoimun?</u></label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline" style="margin-left: 10px;">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="5" name="e1">
							  <label class="form-check-label" for="inlineCheckbox1">YA</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="0" name="e1">
							  <label class="form-check-label" for="inlineCheckbox2">TIDAK</label>
							</div>
  						</td>
  					</tr>


  					<tr>
  						<td><label style="font-weight: bolder;color: red;"><u>Apakah anda wanita?</u></label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline" style="margin-left: 10px;">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="5" name="f1">
							  <label class="form-check-label" for="inlineCheckbox1">YA</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="0" name="f1">
							  <label class="form-check-label" for="inlineCheckbox2">TIDAK</label>
							</div>
  						</td>
  					</tr>



  					<tr>
  						<td><label style="font-weight: bolder;color: red;"><u>Mohon diketik keluhan yang paling dominan yang anda rasakan saat ini</u></label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-floating">
							  <textarea class="form-control" name="keluhan" placeholder="Jawaban anda" id="floatingTextarea2" style="height: 100px"></textarea>
							</div>
  						</td>
  					</tr>







  					<tr>
  						<td><label style="font-weight: bolder;color: red;"><u>apakah anda sudah mendapatkan diagnosa lengkap berserta data laboratorium dan terapi dari dokter lain?</u></label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline" style="margin-left: 10px;">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="0" name="g1">
							  <label class="form-check-label" for="inlineCheckbox1">YA</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="0" name="g1">
							  <label class="form-check-label" for="inlineCheckbox2">TIDAK</label>
							</div>
  						</td>
  					</tr>

  					<tr>
  						<td><label style="font-weight: bolder;color: red;"><u>jika sudah, mohon tuliskan diagnosa dan terapi yang di dapatkan di kolom di bawah ini</u></label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-floating">
							  <textarea class="form-control" name="diagnosaterapi" placeholder="Jawaban anda" id="floatingTextarea2" style="height: 100px"></textarea>
							</div>
  						</td>
  					</tr>

  					<tr>
  						<td><label style="font-weight: bolder;color: red;"><u>Tambahkan foto hasil laboratorium atau pemeriksaan lain dibawah ini</u></label></td>
  					</tr>
  					<tr>
  						<td><input type="file" name="uploadfoto"></td>
  					</tr>





  					<tr>
  						<td><input type="submit" name="submit" value="Kirim" style="margin-top: 20px;margin-bottom: 50px; background: green; color: white; font-weight: bolder;border-radius: 10px;"></td>
  					</tr>

  				</table>

  			</form>
  		</div>






  	</div>
















<?php
  }else{
?>

<div class="containeri" style="display: flex;flex-direction: column;">

  			<!-- open navbar --> 
			<nav class="navbar navbar-expand-lg bg-light">
			  <div class="container-fluid">
			    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			      <span class="navbar-toggler-icon"></span>
			    </button>
			    <div class="collapse navbar-collapse" id="navbarSupportedContent">
			      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
			        <li class="nav-item">
			          <a class="nav-link active" aria-current="page" href="login.php">Login</a>
			        </li>
			      </ul>
			    </div>
			  </div>
			</nav>
	  		<!-- close navbar -->


	  		<!-- open judul -->
				<h1 style="text-align: center; margin-top: 50px; font-weight: bolder;">KUISIONER KELUHAN TUBUH</h1>
			<!-- close judul -->




  		<div style="display: flex;justify-content: center;text-align: center;align-items: center;line-height: 30px;">
  			<form method="POST" enctype="multipart/form-data">

  				<table border-spacing="30px;">

  					<tr>
  						<td><label>Nama</label></td>
  					</tr>

  					<tr>
  						<td><input type="text" name="nama"></td>
  					</tr>


  					<tr>
  						<td><label>Alamat</label></td>
  					</tr>

  					<tr>
  						<td><input type="text" name="alamat"></td>
  					</tr>


  					<tr>
  						<td><label>Nomor telepon</label></td>
  					</tr>

  					<tr>
  						<td><input type="text" name="nohp"></td>
  					</tr>

  					<tr>
  						<td><label style="font-weight: bolder;color: blue;">SILAHKAN PILIH HANYA SALAH SATU JAWABAN DARI TIAP PERTANYAAN</label></td>
  					</tr>


  					<!-- nomor 1 -->
  					<tr>
  						<td><label style="font-weight: bolder;">1. Seberapa sering Anda mengalami brain fog / pikiran buntu dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="1">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="1">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="1">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="1">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="1">
								<label class="form-check-label">setiap hari</label>
							</div>

  						</td>
  					</tr>
  					<!-- nomor 1-->




  					<!-- nomor 2 -->
  					<tr>
  						<td><label style="font-weight: bolder;">2. Seberapa sering Anda mengalami Sulit mengingat sesuatu dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="2">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="2">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="2">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="2">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="2">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 2 -->

  					


  					<!-- nomor 3 -->
  					<tr>
  						<td><label style="font-weight: bolder;">3. Seberapa sering Anda mengalami Sulit mengambil keputusan dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="3">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="3">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="3">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="3">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="3">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 3 -->
  					





  					<!-- nomor 4 -->
  					<tr>
  						<td><label style="font-weight: bolder;">4. Seberapa sering Anda mengalami Bicara cadel atau gagap dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="4">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="4">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="4">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="4">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="4">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 4 -->



  					<!-- nomor 5 -->
  					<tr>
  						<td><label style="font-weight: bolder;">5. Seberapa sering Anda mengalami sulit belajar atau berkonsentrasi/attention deficit dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="5">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="5">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="5">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="5">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="5">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 5 -->




  					<!-- nomor 6 -->
  					<tr>
  						<td><label style="font-weight: bolder;">6. Seberapa sering Anda mengalami sulit dalam mengkoordinasi sesuatu dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="6">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="6">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="6">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="6">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="6">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 6 -->



  					<!-- nomor 7 -->
  					<tr>
  						<td><label style="font-weight: bolder;">7. Seberapa sering Anda mengalami Nyeri Kepala dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="7">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="7">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="7">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="7">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="7">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 7 -->



  					<!-- nomor 8 -->
  					<tr>
  						<td><label style="font-weight: bolder;">8. Seberapa sering Anda mengalami Migrains (nyeri kepala sebelah) dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="8">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="8">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="8">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="8">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="8">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 8 -->



  					<!-- nomor 9 -->
  					<tr>
  						<td><label style="font-weight: bolder;">9. Seberapa sering Anda mengalami Pingsan dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="9">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="9">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="9">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="9">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="9">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 9-->



  					<!-- nomor 10 -->
  					<tr>
  						<td><label style="font-weight: bolder;">10. Seberapa sering Anda mengalami Memiliki masalah tidur dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="10">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="10">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="10">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="10">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="10">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 10 -->



  					<!-- nomor 11 -->
  					<tr>
  						<td><label style="font-weight: bolder;">11. Seberapa sering Anda mengalami Kelopak mata mudah merah dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="11">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="11">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="11">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="11">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="11">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 11 -->



  					<!-- nomor 12 -->
  					<tr>
  						<td><label style="font-weight: bolder;">12. Seberapa sering Anda mengalami Kelopak Mata Mudah Bengkak dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="12">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="12">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="12">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="12">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="12">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 12 -->



  					<!-- nomor 13 -->
  					<tr>
  						<td><label style="font-weight: bolder;">13. Seberapa sering Anda mengalami Dark Circle (kelopak mata bawah berwarna hitam) dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="13">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="13">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="13">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="13">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="13">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 13 -->



  					<!-- nomor 14 -->
  					<tr>
  						<td><label style="font-weight: bolder;">14. Seberapa sering Anda mengalami Poor Vision (kesehatan mata yang menurun) dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="14">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="14">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="14">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="14">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="14">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 14 -->




  					<!-- nomor 15 -->
  					<tr>
  						<td><label style="font-weight: bolder;">15. Seberapa sering Anda mengalami Mata gatal dan berair dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="15">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="15">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="15">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="15">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="15">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 15 -->




  					<!-- nomor 16 -->
  					<tr>
  						<td><label style="font-weight: bolder;">16. Seberapa sering Anda mengalami Hidung Tersumbat dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="16">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="16">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="16">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="16">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="16">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 16 -->




  					<!-- nomor 17 -->
  					<tr>
  						<td><label style="font-weight: bolder;">17. Seberapa sering Anda mengalami Lendir yang berlebihan dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="17">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="17">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="17">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="17">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="17">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 17 -->



  					<!-- nomor 18 -->
  					<tr>
  						<td><label style="font-weight: bolder;">18. Seberapa sering Anda mengalami Hidung mudah meler dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="18">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="18">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="18">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="18">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="18">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 18 -->




  					<!-- nomor 19 -->
  					<tr>
  						<td><label style="font-weight: bolder;">19. Seberapa sering Anda mengalami Masalah pada sinus paranasalis (didiagnosa sinusitis oleh dokter) dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="19">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="19">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="19">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="19">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="19">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 19 -->




  					<!-- nomor 20 -->
  					<tr>
  						<td><label style="font-weight: bolder;">20. Seberapa sering Anda mengalami Sering Bersin dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="20">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="20">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="20">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="20">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="20">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 20 -->




  					<!-- nomor 21 -->
  					<tr>
  						<td><label style="font-weight: bolder;">21. Seberapa sering Anda mengalami Telinga mudah gatal dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="21">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="21">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="21">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="21">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="21">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 21 -->



  					<!-- nomor 22 -->
  					<tr>	
  						<td><label style="font-weight: bolder;">22. Seberapa sering Anda mengalami Telinga berdenging dan gangguan pendengaran dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="22">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="22">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="22">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="22">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="22">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 22 -->




  					<!-- nomor 23 -->
  					<tr>
  						<td><label style="font-weight: bolder;">23. Seberapa sering Anda mengalami Keluar cairan pada telinga dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="23">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="23">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="23">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="23">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="23">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 23 -->




  					<!-- nomor 24 -->
  					<tr>
  						<td><label style="font-weight: bolder;">24. Seberapa sering Anda mengalami Infeksi telinga dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="24">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="24">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="24">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="24">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="24">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 24 -->




  					<!-- nomor 25 -->
  					<tr>
  						<td><label style="font-weight: bolder;">25. Seberapa sering Anda mengalami Batuk kronis dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="25">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="25">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="25">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="25">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="25">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 25 -->




  					<!-- nomor 26 -->
  					<tr>
  						<td><label style="font-weight: bolder;">26. Seberapa sering Anda mengalami Sering berdehem seperti ada dahak di tenggorokan dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="26">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="26">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="26">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="26">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="26">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 26 -->




  					<!-- nomor 27 --> 
  					<tr>
  						<td><label style="font-weight: bolder;">27. Seberapa sering Anda mengalami Nyeri tenggorokan Bibir mudah bengkak dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="27">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="27">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="27">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="27">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="27">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 27 -->

  					


  					<!-- nomor 28 -->
  					<tr>
  						<td><label style="font-weight: bolder;">28. Seberapa sering Anda mengalami Sariawan dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="28">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="28">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="28">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="28">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="28">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 28 -->




  					<!-- nomor 29 -->
  					<tr>
  						<td><label style="font-weight: bolder;">29. Seberapa sering Anda mengalami Detak jantung tidak teratur dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="29">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="29">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="29">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="29">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="29">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 29 -->




  					<!-- nomor 30 -->
  					<tr>
  						<td><label style="font-weight: bolder;">30. Seberapa sering Anda mengalami Detak jantung cepat/deg-degan dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="30">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="30">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="30">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="30">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="30">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 30 -->




  					<!-- nomor 31 -->
  					<tr>
  						<td><label style="font-weight: bolder;">31. Seberapa sering Anda mengalami Nyeri dada dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="31">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="31">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="31">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="31">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="31">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 31 -->




  					<!-- nomor 32 -->
  					<tr>
  						<td><label style="font-weight: bolder;">32. Seberapa sering Anda mengalami Dada terasa sesak 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="32">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="32">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="32">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="32">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="32">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 32 -->




  					<!-- nomor 33 -->
  					<tr>
  						<td><label style="font-weight: bolder;">33. Seberapa sering Anda mengalami Asma/Bronkitis dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="33">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="33">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="33">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="33">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="33">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 33 -->




  					<!-- nomor 34 -->
  					<tr>
  						<td><label style="font-weight: bolder;">34. Seberapa sering Anda mengalami Sesak Nafas dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="34">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="34">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="34">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="34">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="34">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 34 -->




  					<!-- nomor 35 -->
  					<tr>
  						<td><label style="font-weight: bolder;">35. Seberapa sering Anda mengalami Kesulitan Bernafas dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="35">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="35">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="35">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="35">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="35">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 35 -->




  					<!-- nomor 36 -->
  					<tr>
  						<td><label style="font-weight: bolder;">36. Seberapa sering Anda mengalami Jerawat dalam 1 bulan terakhir?</label></td>
  					</tr>

  					
  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="36">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="36">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="36">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="36">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="36">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 36 -->




  					<!-- nomor 37 -->
  					<tr>
  						<td><label style="font-weight: bolder;">37. Seberapa sering Anda mengalami Gatal-gatal, Eczema, kulit kering dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="37">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="37">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="37">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="37">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="37">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 37 -->




  					<!-- nomor 38 -->
  					<tr>
  						<td><label style="font-weight: bolder;">38. Seberapa sering Anda mengalami Rambut Rontok dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="38">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="38">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="38">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="38">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="38">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 38 -->




  					<!-- nomor 39 -->
  					<tr>
  						<td><label style="font-weight: bolder;">39. Seberapa sering Anda mengalami Hot Flashes (merasa hangat tiba-tiba di darah wajah, leher, dada & berkeringat) dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="39">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="39">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="39">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="39">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="39">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 39 -->




  					<!-- nomor 40 -->
  					<tr>
  						<td><label style="font-weight: bolder;">40. Seberapa sering Anda mengalami Sulit menurunkan berat badan dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="40">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="40">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="40">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="40">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="40">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 40 -->




  					<!-- nomor 41 -->
  					<tr>
  						<td><label style="font-weight: bolder;">41. Seberapa sering Anda mengalami Food cravings (menginginkan dengan sangat makanan tertentu) dan mengalami kelebihan berat badan dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="41">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="41">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="41">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="41">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="41">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 41 -->




  					<!-- nomor 42 -->
  					<tr>
  						<td><label style="font-weight: bolder;">42. Seberapa sering Anda mengalami Berat badan kurang dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="42">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="42">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="207">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="42">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="42">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 42 -->




  					<!-- nomor 43 -->
  					<tr>
  						<td><label style="font-weight: bolder;">43. Seberapa sering Anda mengalami Makan berlebihan dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="43">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="43">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="43">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="43">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="43">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 43 -->




  					<!-- nomor 44 -->
  					<tr>
  						<td><label style="font-weight: bolder;">44. Seberapa sering Anda mengalami bengkak pada kaki dan tangan (oedema) dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="44">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="44">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="44">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="44">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="44">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 44 -->




  					<!-- nomor 45 -->
  					<tr>
  						<td><label style="font-weight: bolder;">45. Seberapa sering Anda mengalami Mual, Muntah dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="45">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="45">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="45">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="45">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="45">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 45 -->




  					<!-- nomor 46 -->
  					<tr>
  						<td><label style="font-weight: bolder;">46. Seberapa sering Anda mengalami Diare dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="46">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="46">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="46">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="46">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="46">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 46 -->




  					<!-- nomor 47 -->
  					<tr>
  						<td><label style="font-weight: bolder;">47. Seberapa sering Anda mengalami Konstipasi dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="47">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="47">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="47">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="47">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="47">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 47 -->




  					<!-- nomor 48 -->
  					<tr>
  						<td><label style="font-weight: bolder;">48. Seberapa sering Anda mengalami Sering Kembung dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="48">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="48">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="48">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="48">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="48">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 48 -->




  					<!-- nomor 49 -->
  					<tr>
  						<td><label style="font-weight: bolder;">49. Seberapa sering Anda mengalami Sering kentut dan bersendawa dan tangan dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="49">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="49">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="49">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="49">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="49">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 49 -->




  					<!-- nomor 50 -->
  					<tr>
  						<td><label style="font-weight: bolder;">50. Seberapa sering Anda mengalami Heartburn/dada terasa seperti panas terbakar dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="50">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="50">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="50">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="50">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="50">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 50 -->




  					<!-- nomor 51 -->
  					<tr>
  						<td><label style="font-weight: bolder;">51. Seberapa sering Anda mengalami Intestinal/Stomach pain or cramps (kram atau nyeri perut) dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="51">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="51">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="51">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="51">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="51">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 51 -->




  					<!-- nomor 52 -->
  					<tr>
  						<td><label style="font-weight: bolder;">52. Seberapa sering Anda mengalami Sering cemas dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="52">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="52">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="52">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="52">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="52">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 52 -->





  					<!-- nomor 53 -->
  					<tr>
  						<td><label style="font-weight: bolder;">53. Seberapa sering Anda mengalami Depresi dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="53">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="53">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="53">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="53">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="53">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 53 -->





  					<!-- nomor 54 -->
  					<tr>
  						<td><label style="font-weight: bolder;">54. Seberapa sering Anda mengalami Mood Swings (mood naik turun) dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="54">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="54">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="54">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="54">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="54">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 54 -->




  					<!-- nomor 55 -->
  					<tr>	
  						<td><label style="font-weight: bolder;">55. Seberapa sering Anda mengalami Sering gugup tiba-tiba dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="55">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="55">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="55">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="55">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="55">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 55 -->





  					<!-- nomor 56 -->
  					<tr>
  						<td><label style="font-weight: bolder;">56. Seberapa sering Anda mengalami Mudah Marah dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="56">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="56">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="56">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="56">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="56">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 56 -->





  					<!-- nomor 57 -->
  					<tr>
  						<td><label style="font-weight: bolder;">57. Seberapa sering Anda mengalami Fatigue dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="57">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="57">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="57">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="57">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="57">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 57 -->




  					<!-- nomor 58 -->
  					<tr>
  						<td><label style="font-weight: bolder;">58. Seberapa sering Anda mengalami Lesu/Lethargy Hiperaktif dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="58">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="58">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="58">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="58">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="58">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 58 -->





  					<!-- nomor 59 -->
  					<tr>
  						<td><label style="font-weight: bolder;">59. Seberapa sering Anda mengalami Gelisah dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="59">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="59">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="59">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="59">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="59">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 59 -->





  					<!-- nomor 60 -->
  					<tr>
  						<td><label style="font-weight: bolder;">60. Seberapa sering Anda mengalami Nyeri Sendi dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="60">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="60">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="60">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="60">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="60">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 60 -->




  					<!-- nomor 61 -->
  					<tr>
  						<td><label style="font-weight: bolder;">61. Seberapa sering Anda mengalami Artritis/radang sendi dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="61">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="61">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="61">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="61">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="61">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 61 -->





  					<!-- nomor 62 -->
  					<tr>
  						<td><label style="font-weight: bolder;">62. Seberapa sering Anda mengalami Kaku otot dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="62">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="62">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="62">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="62">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="62">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 62 -->





  					<!-- nomor 63 -->
  					<tr>
  						<td><label style="font-weight: bolder;">63. Seberapa sering Anda mengalami Nyeri otot dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="63">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="63">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="63">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="63">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="63">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 63 -->





  					<!-- nomor 64 -->
  					<tr>
  						<td><label style="font-weight: bolder;">64. Seberapa sering Anda mengalami Weakness (merasa tubuh lemah sekali), Tiredness (merasa tubuh lelah sekali) dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="64">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="64">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="64">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="64">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="64">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 64 -->





  					<!-- nomor 65 -->
  					<tr>
  						<td><label style="font-weight: bolder;">65. Seberapa sering Anda mengalami Sering sakit/infeksi dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="65">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="65">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="65">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="65">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="65">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 65 -->





  					<!-- nomor 66 -->
  					<tr>
  						<td><label style="font-weight: bolder;">66. Seberapa sering Anda mengalami Sering bermasalah pada saluran kandung kemih dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="66">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="66">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="66">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="66">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="66">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 66 -->





  					<!-- nomor 67 -->
  					<tr>
  						<td><label style="font-weight: bolder;">67. Seberapa sering Anda mengalami Gatal pada area Genitalia dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="67">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="67">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="67">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="67">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="67">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 67 -->





  					<!-- nomor 68 -->
  					<tr>
  						<td><label style="font-weight: bolder;">68. Seberapa sering Anda mengalami Gatal pada anus dalam 1 bulan terakhir?</label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="0" name="68">
								<label class="form-check-label">tidak ada</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="1" name="68">
								<label class="form-check-label" >1 bulan sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="2" name="68">
								<label class="form-check-label">2 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="3" name="68">
								<label class="form-check-label">1 minggu sekali</label>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" value="4" name="68">
								<label class="form-check-label">setiap hari</label>
							</div>
  						</td>
  					</tr>
  					<!-- nomor 68 -->

  					
  					

  					

  					








  					<tr>
  						<td><label style="font-weight: bolder; color: red;"><u>Apakah anda memiliki diagnosa penyakit autoimun dari hasil lab dan diagnosa dokter ?</u></label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline" style="margin-left: 10px;">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="80" name="a1">
							  <label class="form-check-label" for="inlineCheckbox1">YA</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="0" name="a1">
							  <label class="form-check-label" for="inlineCheckbox2">TIDAK</label>
							</div>
  						</td>
  					</tr>



  					<tr>
  						<td><label style="font-weight: bolder;color: red;"><u>Apakah anda memiliki lebih dari 1 penyakit autoimun?</u></label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline" style="margin-left: 10px;">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="100" name="b1">
							  <label class="form-check-label" for="inlineCheckbox1">YA</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="0" name="b1">
							  <label class="form-check-label" for="inlineCheckbox2">TIDAK</label>
							</div>
  						</td>
  					</tr>



  					<tr>
  						<td><label style="font-weight: bolder;color: red;"><u>Apakah anda mengalami peningkatan penanda inflamasi seperti ESR (Erythrocyte sedimentation rate), CPR (C-Reactive Protein) atau homocystein?</u></label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline" style="margin-left: 10px;">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="10" name="c1">
							  <label class="form-check-label" for="inlineCheckbox1">YA</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="0" name="c1">
							  <label class="form-check-label" for="inlineCheckbox2">TIDAK</label>
							</div>
  						</td>
  					</tr>






  					<tr>
  						<td><label style="font-weight: bolder;color: red;"><u>Apakah anda memiliki kerabat dekat (orang tua atau saudara) dengan penyakit autoimun?</u></label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline" style="margin-left: 10px;">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="10" name="d1">
							  <label class="form-check-label" for="inlineCheckbox1">Iya, orang tua memiliki penyakit autoimun</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="2" name="d1">
							  <label class="form-check-label" for="inlineCheckbox2">iya, saudara memiliki penyakit autoimun</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="0" name="d1">
							  <label class="form-check-label" for="inlineCheckbox2">TIDAK</label>
							</div>
  						</td>
  					</tr>



  					<tr>
  						<td><label style="font-weight: bolder;color: red;"><u>Apakah anda memiliki kerabat "a second degree relative" seperti kakek nenek, paman, bibik dll yang memiliki penyakit autoimun?</u></label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline" style="margin-left: 10px;">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="5" name="e1">
							  <label class="form-check-label" for="inlineCheckbox1">YA</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="0" name="e1">
							  <label class="form-check-label" for="inlineCheckbox2">TIDAK</label>
							</div>
  						</td>
  					</tr>


  					<tr>
  						<td><label style="font-weight: bolder;color: red;"><u>Apakah anda wanita?</u></label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline" style="margin-left: 10px;">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="5" name="f1">
							  <label class="form-check-label" for="inlineCheckbox1">YA</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="0" name="f1">
							  <label class="form-check-label" for="inlineCheckbox2">TIDAK</label>
							</div>
  						</td>
  					</tr>



  					<tr>
  						<td><label style="font-weight: bolder;color: red;"><u>Mohon diketik keluhan yang paling dominan yang anda rasakan saat ini</u></label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-floating">
							  <textarea class="form-control" name="keluhan" placeholder="Jawaban anda" id="floatingTextarea2" style="height: 100px"></textarea>
							</div>
  						</td>
  					</tr>







  					<tr>
  						<td><label style="font-weight: bolder;color: red;"><u>apakah anda sudah mendapatkan diagnosa lengkap berserta data laboratorium dan terapi dari dokter lain?</u></label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-check form-check-inline" style="margin-left: 10px;">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="0" name="g1">
							  <label class="form-check-label" for="inlineCheckbox1">YA</label>
							</div>

							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="0" name="g1">
							  <label class="form-check-label" for="inlineCheckbox2">TIDAK</label>
							</div>
  						</td>
  					</tr>

  					<tr>
  						<td><label style="font-weight: bolder;color: red;"><u>jika sudah, mohon tuliskan diagnosa dan terapi yang di dapatkan di kolom di bawah ini</u></label></td>
  					</tr>

  					<tr>
  						<td>
  							<div class="form-floating">
							  <textarea class="form-control" name="diagnosaterapi" placeholder="Jawaban anda" id="floatingTextarea2" style="height: 100px"></textarea>
							</div>
  						</td>
  					</tr>

  					<tr>
  						<td><label style="font-weight: bolder;color: red;"><u>Tambahkan foto hasil laboratorium atau pemeriksaan lain dibawah ini</u></label></td>
  					</tr>
  					<tr>
  						<td><input type="file" name="uploadfoto"></td>
  					</tr>





  					<tr>
  						<td><input type="submit" name="submit" value="Kirim" style="margin-top: 20px;margin-bottom: 50px;background: green; color: white; font-weight: bolder;border-radius: 10px;"></td>
  					</tr>

  				</table>

  			</form>
  		</div>






  	</div>



















<?php
  }
 ?>


   

  	


  		<!-- open footer -->
		<div class="footer" style="display: flex;bottom: 0;right: 0;left: 0;padding: 10px; background-color: #000000; width: 100%;">
			<div style="text-align: center;width: 100%;">
				<div style="color: #ffffff;padding-top: 30px;padding-bottom: 30px;">© kuisioner skor peradangan - 2022</div>
			</div>
		</div>
		<!-- close footer -->









    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
  <script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
</html>