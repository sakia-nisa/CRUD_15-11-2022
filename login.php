<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h3>Silahkan Login</h3>
    <?php
    if(isset($_GET['pesan'])){
        if($_GET['pesan'] == "gagal"){
            echo "Login Gagal ! Username dan Password Salah";
        } else if($_GET['pesan'] == "logout"){
            echo "Anda Telah Berhasil LogOut";
            echo "<br/>";
            echo "<br/>";
            echo "Silahkan Diisi Jika Ingin Login Kembali";
        } else if($_GET['pesan'] == "belum login"){
            echo "Anda Belum Login";
        }
    }
    ?>
    <form action="cek-login.php" method="post">
        <table>
            <tr>
            <td>Username</td>
            <td>:</td>
            <td><input type="text" name="username" placeholder="Username" /></td>
            </tr>

            <tr>
            <td>Password</td>
            <td>:</td>
            <td><input type="password" name="password" placeholder="Password" /></td>
            </tr>

            <tr>
            <td></td>
            <td></td>
            <td><input type="submit" value="SIMPAN" /></td>
            </tr>
        </table>
    </form>
</body>
</html>