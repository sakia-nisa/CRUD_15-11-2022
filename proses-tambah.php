<?php
include("koneksi.php");

if(isset($_POST['simpan'])){
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jv    = $_POST['jv'];

    $sql = "INSERT INTO vaksin(nama, alamat, jv) VALUES ('$nama', '$alamat', '$jv')";
    $query = mysqli_query($db, $sql);

    if ( $query ){
        header ('Location:tampil.php?status=sukses');
    } else {
        echo "Maaf belum bisa";
    }
}
?>