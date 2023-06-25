<?php
session_start();
session_destroy();
header("Location: /sqli/login.php");
