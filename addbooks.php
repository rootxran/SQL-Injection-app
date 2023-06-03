<?php
$dbhostname = 'localhost';
$dbuser = 'user';
$dbpassword = 'password';
$dbname = 'rootxran';
if (isset($_POST["submit"])) {
    echo "chceking";
    $connection = mysqli_connect($dbhostname, $dbuser, $dbpassword, $dbname);
    $book_id = $_POST["book_id"];
    $book_name = $_POST["book_name"];
    $book_code = $_POST["book_code"];

    $query = "INSERT INTO books (id, code, name) VALUES ($book_id, '$book_code', '$book_name')";
    $result = mysqli_query($connection, $query);
    session_start();
    header("Location: admin.php");
    exit();
} else {
    session_start();
    header("Location: login.php");
    exit();
}
