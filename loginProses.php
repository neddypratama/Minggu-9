<?php
    $user = $_POST["username"];
    $pass = $_POST["password"];

    if($user=="admin" && $pass =="1234") {
        session_start();
        $_SESSION["username"] = $user;
        $_SESSION["role"] = "Administrator";
        header("location:homeSession.php");
    } else {
        echo "Username atau Password tidak sesuai <br>";
        echo '<a href="loginForm.html">Kembali ke Halaman Login</a>';
    }
?>
