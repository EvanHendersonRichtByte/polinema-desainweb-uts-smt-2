<?php
session_start();
$path = 'http://' . $_SERVER['SERVER_NAME'] . '/uts/';

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
