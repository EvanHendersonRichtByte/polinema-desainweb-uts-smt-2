<?php
session_start();
include dirname(__DIR__, 1) . '\config.php';
if (isset($_POST['masuk'])) {
    $username = $_POST['nama'];
    $email = $_POST['email'];
    $_SESSION['logged'] = ['username' => $username, 'email' => $email];
    header("location: " . $path . 'dashboard.php');
} elseif (isset($_POST['logout'])) {
    session_unset('logged');
} elseif (!$_SESSION['logged']) {
    header('location: ' . $path . 'index.html');
}
