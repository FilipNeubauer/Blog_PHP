<?php



require "config/database.php";

// echo $_POST["username"] . $_POST["password"];

if (isset($_POST["submit"])) {
    $username = filter_var($_POST["username"], FILTER_SANITIZE_SPECIAL_CHARS); // preventing XSS
    $password = filter_var($_POST["password"], FILTER_SANITIZE_SPECIAL_CHARS);


    // validating for empty
    if (!$username) {
        $_SESSION["signin"] = "Please enter your username";
    } elseif (!$password) {
        $_SESSION["signin"] = "Please enter your password";
        $_SESSION["username"] = $username;
    } else {
        // $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        // echo $hashed_password;

        $fetch_user_query = "SELECT * FROM users WHERE username='$username'";
        $fetch_user_result = mysqli_query($connection, $fetch_user_query);

        if (mysqli_num_rows($fetch_user_result) == 1) {
            $user_record = mysqli_fetch_assoc($fetch_user_result);
            $db_password = $user_record["password"];

            if (password_verify($password, $db_password)) {
                echo "same password";
                $_SESSION["user-id"] = $user_record["id"];
                header("location: " . ROOT_URL . "admin/");
            } else {
                $_SESSION["signin"] = "wrong password";
                header("location: " . ROOT_URL . "admin/signin.php");
            }
        } else {

            $_SESSION["signin"] = "user not found";
            header("location: " . ROOT_URL . "admin/signin.php");
        }
    }

    if (isset($_SESSION["signin"])) {
        header("location: " . ROOT_URL . "admin/signin.php");
        die();
    } else {
        // echo "Good";
    }
} else {
    header("location: " . ROOT_URL . "admin/signin.php");
    die();
}
