<?php
include ("koneksi.php");
isset($_GET['id']);
$kode = $_GET['id'];
$sql = "DELETE FROM vaksin WHERE id=$kode";
$query = mysqli_query($db, $sql);

if($query ){
    header('Location:tampil.php');
} else {
    echo "Maaf Pembaruan gagal";
}
?>