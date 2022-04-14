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
                        <li><a href="/uts/dashboard.php">Dashboard</a></li>
                        <li><a href="/uts/add.php">Tambah Data</a></li>
                        <li><a href="/uts/list.php">List Data</a></li>
                    </div>
                    <div>
                        <li><a href="/uts">Logout</a></li>
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


        <form action="f2.php" method="POST">
            <button type="submit" name="tData" value="1">Tes Input</button>
        </form>
    </section>
    <script src="script.js"></script>

    <script>
        // login()
    </script>
</body>

</html>