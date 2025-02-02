<?php
require("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $fname = mysqli_real_escape_string($conn, $_POST['fname']);
    $lname = mysqli_real_escape_string($conn, $_POST['lname']);
    $password = md5(mysqli_real_escape_string($conn, $_POST['password']));

    $sql = "SELECT email FROM user WHERE email = '$email'";
    $retval = mysqli_query($conn, $sql);

    if (!$retval) {
        // Query execution failed
        die('Error executing the query: ' . mysqli_error($conn));
    }

    $row = mysqli_fetch_array($retval, MYSQLI_ASSOC);
    $count = mysqli_num_rows($retval);

    if ($count >= 1) {
        header("location:login.php?signup=0");
    } else {
        $sql = "INSERT INTO `user`(`email`, `fname`, `lname`, `password`, `isadmin`, `posts`) VALUES ('$email','$fname','$lname','$password',0,0)";
        mysqli_query($conn, $sql);
        mysqli_commit($conn);
        session_start();
        $_SESSION['login_user'] = $email;
        header("location:post.php");
    }
} else {
    header("location:login.php");
}
?>