<?php
include ("koneksi.php");
if (!isset($_GET['id'])){
    header ('Location:tampil.php?');
}
$kode = $_GET['id'];
$sql = "SELECT * FROM vaksin WHERE id=$kode";
$query = mysqli_query($db, $sql);
$vaksin = mysqli_fetch_assoc($query);

if (mysqli_num_rows($query) < 1){
    die ("data tidak ditemukan");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM EDIT</title>
</head>
<body>
    <header>
        <h3>FORM EDIT</h3>
    </header>
    <form action="proses-edit.php" method="post">
        <fieldset>
            <input type="number" name="id" value="<?php echo $vaksin ['id']?>">
            <p>
                <label for="nama">Nama Lengkap :</label>
                <input type="text" name="nama" value="<?php echo $vaksin ['nama']?>"/>
            </p>
            <p>
                <label for="alamat">Alamat : </label>
                <textarea name="alamat" rows="5" value="<?php echo $vaksin ['alamat']?>"></textarea>
            </p>
            <p>
                <label for="jv">Jenis Vaksin</label>
                <select name="jv" value="<?php echo $vaksin ['jv']?>">
                    <option value="sinovak">Sinovac</option>
                    <option value="pfzier">Pfzier</option>
                    <option value="nusantara">Nusantara</option>
                </select>
            </p>
            <p>
                <input type="submit" name="simpan" value="simpan" />
            </p>
        </fieldset>
    </form>
</body>
</html>