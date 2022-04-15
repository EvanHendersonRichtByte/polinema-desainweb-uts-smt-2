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
                <input type="text" name="nama" id="nama" required>
                <label for="no_pasien">No Pasien</label>
                <input type="number" name="no_pasien" id="no_pasien" required min="1">
                <label for="no_telp">No Telp</label>
                <input type="number" name="no_telp" id="no_telp" required>
                <label for="jk">Jenis Kelamin</label>
                <select name="jk" id="jk" required>
                    <option value="Pria" selected>Pria</option>
                    <option value="Wanita">Wanita</option>
                </select>
                <label for="tinggi_badan">Tinggi Badan (cm)</label>
                <input type="number" name="tinggi_badan" id="tinggi_badan" required>
                <label for="berat_badan">Berat Badan</label>
                <input type="number" name="berat_badan" id="berat_badan" required>
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
        $jk = $_POST['jk'];
        $tinggi_badan = $_POST['tinggi_badan'];
        $berat_badan = $_POST['berat_badan'];
        $_SESSION['pasien'][] = array("nama" => $nama, "no_pasien" => $no_pasien, "jenis_kelamin" => $jk, "no_telp" => $no_telp, "tinggi_badan" => $tinggi_badan, "berat_badan" => $berat_badan);
    ?>
        <script>
            alert('data telah ditambah');
        </script>
    <?php
    }
    ?>
</body>

</html>