<?php
$dbhostname = 'db';
$dbuser = 'user';
$dbpassword = 'password';
$dbname = 'rootxran';
if (isset($_POST["submit"])) {
    $connection = mysqli_connect($dbhostname, $dbuser, $dbpassword, $dbname);
    $book_name = $_POST["book_name"];
    $book_code = $_POST["book_code"];

    $query = "INSERT INTO books (code, name) VALUES ('$book_code', '$book_name')";
    $result = mysqli_query($connection, $query);
    session_start();
    header("Location: admin.php");
    exit();
} else {
    session_start();
    header("Location: login.php");
    exit();
}
