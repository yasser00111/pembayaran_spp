<?php 
$id_spp = $_POST['id_spp'];
$tahun = $_POST['tahun'];
$nominal = $_POST['nominal'];
 
// print_r($_POST);
 
include'../koneksi.php';
 
$sql = "INSERT INTO tb_spp (id_spp,tahun,nominal) VALUES ('".$id_spp."','".$tahun."','".$nominal."')";
 
// echo $sql;
 
$query = mysqli_query($koneksi, $sql) or die(mysqli_error($koneksi));
 
// echo $query;
if($query){
    header("location:spp1.php");
}else{
    echo"<script>alert('Maaf Data Tidak Tersimpan');window.location.assign('spp1.php'); </script>";
}