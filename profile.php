<?php
session_start();
if (!isset($_SESSION["user"])) {
   header("Location: logout.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style1.css">
    <title>User Dashboard</title>
</head>
<body><div class="main">
<div class="navbar">
    <div class="container">
        <h1>Want to log out</h1>
        <a href="logout.php" class="btn btn-warning">Logout</a>
    </div>
</body>
</html>