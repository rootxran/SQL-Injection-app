<?php
session_start();
if (isset($_SESSION['loggedin'])) {
    if (isset($_SESSION['isadmin']) && $_SESSION['isadmin'] === true) {
        echo '<!DOCTYPE html>
        <html>
        
        <head>
          <title>Books</title>
          <style>
            body {
              background-image: url(\'background.jpg\');
              background-size: cover;
              background-position: center;
              font-family: Arial, sans-serif;
              text-align: center;
              padding: 50px;
              padding-top: 0px;
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
        
            label {
              color: #ffffff;
              font-size: 18px;
            }
        
            input[type="text"] {
              padding: 10px;
              border-radius: 4px;
              border: 1px solid #ffffff;
              margin-bottom: 10px;
              width: 200px;
            }
        
            input[type="submit"], a {
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
        
            table {
              margin: 20px auto;
              border-collapse: collapse;
            }
        
            th,
            td {
              padding: 10px;
              border: 1px solid #ffffff;
              color: #ffffff;
            }
        
            th {
              background-color: #4CAF50;
            }
        
            td {
              background-color: #4CAF50;
            }
          </style>
        </head>
        
        <body>
        <header>
        <nav>
        <a href="logout.php">Logout</a>
        </nav>
        <h1>>>>>> Add Books <<<<<</h1>
        </header>
          <form action="addbooks.php" method="post">
            <label for="book_id">Book id: >></label>
            <input type="text" id="id" name="book_id">
            <br><br>
            <label for="book_code">Book code:</label>
            <input type="text" id="code" name="book_code">
            <br><br>
            <label for="book_name">Book name:</label>
            <input type="text" id="name" name="book_name">
            <br><br>
            <input type="submit" value="Send" name="submit">
            <br><br>
          </form>
        </body>
        
        </html>';
        $dbhostname = 'localhost';
        $dbuser = 'user';
        $dbpassword = 'password';
        $dbname = 'rootxran';

        echo "<table>";
        echo "<tr>";
        echo "<th align='center'>id</th>";
        echo "<th align='center'>code</th>";
        echo "<th align='center'>name</th>";
        echo "</tr>";
        $connection = mysqli_connect($dbhostname, $dbuser, $dbpassword, $dbname);
        $query = "SELECT id, code, name FROM books";
        $results = mysqli_query($connection, $query);
        while ($rows = mysqli_fetch_assoc($results)) {
            echo "<tr>";
            echo "<td align='center'> " . $rows['id'] . "</td>";
            echo "<td align='center'> " . $rows['code'] . "</td>";
            echo "<td align='center'> " . $rows['name'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        header('Location: /sqli/rootxran.php');
        exit();
    }
} else {
    header('Location: /sqli/login.php');
    exit();
}
