<?php 

include 'koneksi.php';

session_start();


$iddata = $_GET['id'];
if(isset($_POST['submit'])){

	$hapusdata = "DELETE FROM sistempakarikarie WHERE id_sistem = '$iddata'";
	$hubungkanhapusdata = mysqli_query($koneksi,$hapusdata);

if($hubungkanhapusdata){
	header("location:hasil.php");
}else{
	echo "gagal menghapus data";
}

}




 ?>