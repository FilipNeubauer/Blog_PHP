<?php
require "config/database.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>

    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/styles.css">

</head>

<body>
    <div>
        <h1>Name</h1>
        <div class="nav">
            <div>
                <a href="<?= ROOT_URL ?>">Home</a>
            </div>
            <div>
                <a href="<?= ROOT_URL ?>about.php">About</a>
            </div>
            <div>
                <a href="<?= ROOT_URL ?>admin/index.php">Admin</a>
            </div>
        </div>
    </div>