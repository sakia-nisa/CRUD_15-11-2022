<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM TAMBAH</title>
</head>
<body>
    <header>
        <h3>FROM TAMBAH</h3>
    </header>
    <form action="proses-tambah.php" method="POST">
        <fieldset>
            <p>
                <label for="nama">Nama Lengkap :</label>
                <input type="text" name="nama"/>
            </p>
            <P>
            <label for="alamat">Alamat:</label>
                <input type="text" name="alamat"/>
            </P>
            <p>
                <label for="jv">Jenis Vaksin :</label>
                <select name="jv">
                    <option value=""></option>
                    <option value="sinovak">Sinovac</option>
                    <option value="pfzier">Pfzier</option>
                    <option value="nusantara">Nusantara</option>
                </select>
            </p>
            <p>
                <input type="submit" value="Simpan" name="simpan" />
            </p>
        </fieldset>
    </form>
</body>
</html>