<?php
$dbhostname = 'localhost';
$dbuser = 'user';
$dbpassword = 'password';
$dbname = 'rootxran';

$connection = mysqli_connect($dbhostname, $dbuser, $dbpassword, $dbname);

$username = $_POST["username"];
$password = $_POST["password"];

$query = "INSERT into users (role, username, password, is_admin) VALUES('cyber security', '$username', '$password', 0)";
$result = mysqli_query($connection, $query);
if ($result === true) {
    echo '<!DOCTYPE html>
        <html>s
        <head>
        <title>Register Panel</title>
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
            header {
                // background-color: #333;
                color: #fff;
                padding: 10px;
              }
            
                nav {
                display: flex;
                justify-content: flex-end;
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
    
            header {
            // background-color: #333;
            color: #fff;
            padding: 10px;
          }
    
            nav {
            display: flex;
            justify-content: flex-end;
            }
            
            input[type="text"],
            input[type="password"] {
            width: 100%;
            padding: 10px 0;
            border-radius: 3px;
            border: 1px solid #ccc;
            }
            
            input[type="submit"]{
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            cursor: pointer;
            border-radius: 3px;
            }
    
            a {
                background-color: #4CAF50;
                color: #ffffff;
                padding: 10px 20px;
                text-decoration: none;
                font-size: 18px;
                border-radius: 4px;
                // margin-top: 20px;
                border: none;
                cursor: pointer;
            }
    
            input[type="submit"]:hover {
            background-color: #45a049;
            }
        </style>
        </head>
        <body>
        <header>
      <nav>
      <a href="login.php">Login</a>
      </nav>
      </header>
        <div class="container">
            <h1>Register Panel</h1>
            <form action="adduser.php" method="post">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username">
            <br>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password">
            <br><br>
            <label>Added Successfully</label>
            <input type="submit" value="Register">
            </form>
        </div>
        </body>
        </html>';
} else {
    echo '<!DOCTYPE html>
        <html>
        <head>
        <title>Register Panel</title>
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
            header {
                // background-color: #333;
                color: #fff;
                padding: 10px;
              }
            
                nav {
                display: flex;
                justify-content: flex-end;
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
    
            header {
            // background-color: #333;
            color: #fff;
            padding: 10px;
          }
    
            nav {
            display: flex;
            justify-content: flex-end;
            }
            
            input[type="text"],
            input[type="password"] {
            width: 100%;
            padding: 10px 0;
            border-radius: 3px;
            border: 1px solid #ccc;
            }
            
            input[type="submit"]{
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            cursor: pointer;
            border-radius: 3px;
            }
    
            a {
                background-color: #4CAF50;
                color: #ffffff;
                padding: 10px 20px;
                text-decoration: none;
                font-size: 18px;
                border-radius: 4px;
                // margin-top: 20px;
                border: none;
                cursor: pointer;
            }
    
            input[type="submit"]:hover {
            background-color: #45a049;
            }
        </style>
        </head>
        <body>
        <header>
      <nav>
      <a href="login.php">Login</a>
      </nav>
      </header>
        <div class="container">
            <h1>Register Panel</h1>
            <form action="adduser.php" method="post">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username">
            <br>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password">
            <br><br>
            <label>Already Exist</label>
            <input type="submit" value="Register">
            </form>
        </div>
        </body>
        </html>';
}
