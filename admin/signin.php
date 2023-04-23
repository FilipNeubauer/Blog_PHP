<?php

include("partials/header.php");

// echo ROOT_URL;
?>

<form action="<?= ROOT_URL ?>admin/signin-logic.php" method="post">
    <input type="text" name="username">
    <input type="password" name="password">
    <input type="submit" name="submit">
</form>

<div>
    <?php if (isset($_SESSION["signin"])) : ?>
        <p>
            <?= $_SESSION["signin"];
            unset($_SESSION["signin"]);
            ?>
        </p>

    <?php endif ?>
</div>