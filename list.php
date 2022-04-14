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
                    <th>Tinggi Badan</th>
                    <th>Berat Badan</th>
                    <th>Delete</th>
                </thead>
                <tbody>
                    <?php
                    // if (!$_SESSION['totaluser']) {
                    //     $Message = urlencode("Some error occured please try after some time ");
                    //     header('location: add.php');
                    // }
                    foreach ($_SESSION['pasien'] as $result => $val) { ?>
                        <tr>
                            <td><?php echo $val['nama'] ?></td>
                            <td><?php echo $val['no_pasien'] ?></td>
                            <td><?php echo $val['no_telp'] ?></td>
                            <td><?php echo $val['tinggi_badan'] ?></td>
                            <td><?php echo $val['berat_badan'] ?></td>
                            <td>
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
        header('location: ' . $path . 'add.php');
    }
    ?>
</body>

</html>