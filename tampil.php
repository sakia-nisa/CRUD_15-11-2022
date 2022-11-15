<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tampil</title>
</head>
<body>
    <header>
        <h3>Data Pendataan Vaksin COVID-19</h3>
    </header>
    <p><a href="tambah.php">Tambah</a></p>
    <table border="1">
    <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Jenis Vaksin</th>
                <th>Tindakan</th>
            </tr>

    <?php
    include ("koneksi.php");
    $sql = "SELECT * FROM vaksin";
    $query = mysqli_query($db, $sql);
    $jmlh_data = mysqli_num_rows($query);

    while ( $vaksin = mysqli_fetch_array($query)){
        echo "<tr>";
        echo "<td>".$vaksin['id']."</td>";
        echo "<td>".$vaksin['nama']."</td>";
        echo "<td>".$vaksin['alamat']."</td>";
        echo "<td>".$vaksin['jv']."</td>";
        echo "<td>";
        echo "<a href='edit.php?id=".$vaksin['id']."'>Edit</a> ||";
        echo "<a href='hapus.php?id=".$vaksin['id']."'>Hapus</a>";
        echo "</td>";
        echo "</tr>";
    }
    ?>
        </table>
    <p>Total : <b><?php echo $jmlh_data; ?></b></p>

    <footer>
        <p><a href="logout.php">Logout</a></p>
    </footer>
</body>
</html>