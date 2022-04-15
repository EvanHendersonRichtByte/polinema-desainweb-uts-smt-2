<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="shortcut icon" href="./assets/icon/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="style.css" />
    <title>Dashboard</title>
</head>

<body>
    <?php include './components/auth.php' ?>
    <section class="dashboard">
        <video class="dashboard__video" src="./assets/video/dashboard.mp4" muted autoplay loop></video>
        <div class="dashboard__video-overlay"></div>
        <div class="dashboard__content">
            <aside class="dashboard__sidebar">
                <ul>
                    <div>
                        <li><a class="dashboard__list--top" href="/uts/dashboard.php">Dashboard</a></li>
                        <li><a href="/uts/add.php">Tambah Data</a></li>
                        <li><a href="/uts/list.php">List Data</a></li>
                        <li><a href="/uts/bmi_calculator.php">BMI Calculator</a></li>
                    </div>
                    <div>
                        <li><a class="dashboard__list--bottom" href="/uts">Logout</a></li>
                    </div>
                </ul>
            </aside>
            <div class="dashboard__user">
                <div>
                    <?php if (isset($_SESSION['logged'])) { ?>
                        <h1><?php echo $_SESSION['logged']['username'] ?></h1>
                        <p><?php echo $_SESSION['logged']['email'] ?></p>
                    <?php
                    };
                    ?>
                </div>
            </div>
        </div>
    </section>
</body>
</html>