<?php
session_start();
if (isset($_SESSION['loggedin'])) {
    if (isset($_SESSION['isadmin']) && $_SESSION['isadmin'] === true) {
        header('Location: /sqli/admin.php');
        exit();
    } else {
        header('Location: /sqli/rootxran.php');
        exit();
    }
}
$dbhostname = 'localhost';
$dbuser = 'user';
$dbpassword = 'password';
$dbname = 'rootxran';

$connection = mysqli_connect($dbhostname, $dbuser, $dbpassword, $dbname);

if (isset($_POST["submit"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = mysqli_query($connection, $query);
    // $is_adminquery = "SELECT * FROM users WHERE username='$username' AND password='$password' AND is_admin=true";
    // $result_isadmin = mysqli_query($connection, $is_adminquery);
    if (mysqli_num_rows($result) > 0) {
        session_start();
        $_SESSION["loggedin"] = true;
        $user = mysqli_fetch_assoc($result);
        if ($user['is_admin']) {
            $_SESSION["isadmin"] = true;
            header("Location: admin.php");
        } else {
            $_SESSION["isadmin"] = false;
            header("Location: rootxran.php");
        }
    }
}

echo '<!DOCTYPE html>
    <html>
    <head>
    <title>Login Panel</title>
    <style>
        body {
        background-image: url(\'background.jpg\');
        background-size: cover;
        background-position: center;
        font-family: Arial, sans-serif;
        text-align: center;
        padding: 50px;
        }
        
        .container {
        max-width: 400px;
        margin: 50px auto;
        background-color: #fff;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        
        h1 {
        text-align: center;
        margin-bottom: 20px;
        }
        
        label {
        display: block;
        margin-bottom: 10px;
        font-weight: bold;
        }
        
        input[type="text"],
        input[type="password"] {
        width: 100%;
        padding: 10px 0;
        border-radius: 3px;
        border: 1px solid #ccc;
        }
        
        input[type="submit"] {
        width: 100%;
        padding: 10px;
        background-color: #4CAF50;
        color: #fff;
        border: none;
        cursor: pointer;
        border-radius: 3px;
        }
        
        input[type="submit"]:hover {
        background-color: #45a049;
        }
    </style>
    </head>
    <body>
    <div class="container">
        <h1>Login Panel</h1>
        <form action="panel.php" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username">
        <br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password">
        <br><br>
        <input type="submit" value="Login">
        </form>
    </div>
    </body>
    </html>';
