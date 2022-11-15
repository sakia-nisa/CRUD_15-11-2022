<?php
include ("koneksi.php");

if(isset($_POST['simpan'])){
    $kode = $_POST['id'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jv     = $_POST['jv'];

    $sql = "UPDATE vaksin SET nama='$nama', alamat='$alamat', jv='$jv' WHERE id=$kode";
    $query = mysqli_query($db, $sql);

    if($query ){
        header('Location:tampil.php');
    } else {
        echo "Maaf Pembaruan gagal";
    }

}
?>