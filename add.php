<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="shortcut icon" href="./assets/icon/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="style.css" />
    <title>add</title>
</head>

<body>
    <?php include './components/navigation.php';
    include './components/auth.php' ?>
    <section class="add">
        <div class="add__content">
            <h1>Tambah Pasien</h1>
            <form action="" method="POST">
                <label for="nama">Nama</label>
                <input type="text" name="nama" id="nama">
                <label for="no_pasien">No Pasien</label>
                <input type="text" name="no_pasien" id="no_pasien">
                <label for="no_telp">No Telp</label>
                <input type="text" name="no_telp" id="no_telp">
                <label for="tinggi_badan">Tinggi Badan</label>
                <input type="number" name="tinggi_badan" id="tinggi_badan">
                <label for="berat_badan">Berat Badan</label>
                <input type="number" name="berat_badan" id="berat_badan">
                <button name="submit" type="submit">Tambah</button>
            </form>
        </div>
    </section>
    <?php
    if (isset($_GET['Message'])) {
        echo $_GET['Message'];
    }
    if (isset($_POST['submit'])) {
        $nama = $_POST['nama'];
        $no_pasien = $_POST['no_pasien'];
        $no_telp = $_POST['no_telp'];
        $tinggi_badan = $_POST['tinggi_badan'];
        $berat_badan = $_POST['berat_badan'];
        // if (!$_SESSION['totaluser']) $_SESSION['totaluser'] = 1;
        // else $_SESSION['totaluser'] = $_SESSION['totaluser'] + 1;
        $_SESSION['pasien'][] = array("nama" => $nama, "no_pasien" => $no_pasien, "no_telp" => $no_telp, "tinggi_badan" => $tinggi_badan, "berat_badan" => $berat_badan);
        echo 'session set';
    }
    ?>
</body>

</html>