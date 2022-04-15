<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="shortcut icon" href="./assets/icon/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="style.css" />
    <title>List</title>
</head>

<body>
    <?php include './components/navigation.php';
    include './components/auth.php' ?>

    <section class="list">
        <div class="list__content">
            <h1>List Pasien</h1>
            <table>
                <thead>
                    <th>Nama</th>
                    <th>No Pasien</th>
                    <th>No Telp</th>
                    <th>Jenis Kelamin</th>
                    <th>Tinggi Badan</th>
                    <th>Berat Badan</th>
                    <th>BMI</th>
                    <th>Kategori</th>
                    <th>Delete</th>
                </thead>
                <tbody>
                    <?php
                    foreach ($_SESSION['pasien'] as $result => $val) {
                        $bmi = $val['berat_badan'] / (($val['tinggi_badan'] / 100) * ($val['tinggi_badan'] / 100)); ?>
                        <tr>
                            <td><?php echo $val['nama'] ?></td>
                            <td><?php echo $val['no_pasien'] ?></td>
                            <td><?php echo $val['no_telp'] ?></td>
                            <td><?php echo $val['jenis_kelamin'] ?></td>
                            <td><?php echo $val['tinggi_badan'] ?></td>
                            <td><?php echo $val['berat_badan'] ?></td>
                            <td><?php echo number_format($bmi, 2, ",", "."); ?></td>
                            <td>
                                <?php
                                if ($val['jenis_kelamin'] === "Pria") {
                                    if ($bmi < 17) echo 'Kurus';
                                    else if ($bmi >= 17 && $bmi < 23) echo 'Normal';
                                    else if ($bmi >= 23 && $bmi < 27) echo 'Kegemukan';
                                    else if ($bmi >= 27) echo 'Obesitas';
                                } else if ($val['jenis_kelamin'] === "Wanita") {
                                    if ($bmi < 18) echo 'Kurus';
                                    else if ($bmi >= 18 && $bmi < 25) echo 'Normal';
                                    else if ($bmi >= 25 && $bmi < 27) echo 'Kegemukan';
                                    else if ($bmi >= 27) echo 'Obesitas';
                                }
                                ?>
                            </td>
                            <td>
                                <!-- <orm action="" method="POST" onsubmit="del()"><button class="delete" type="submit" name="delete" value=<?php echo $result ?>>Delete</button></form> -->
                                <form action="" method="POST"><button class="delete" type="submit" name="delete" value=<?php echo $result ?>>Delete</button></form>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </section>
    <?php
    if (isset($_POST['delete'])) {
        unset($_SESSION['pasien'][$_POST['delete']]);
        header("location: " . $path . '/list.php');
    };
    ?>
</body>

</html>