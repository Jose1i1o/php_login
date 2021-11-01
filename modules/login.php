<?php
    session_start();

    $email = $_POST['email'];
    $password = $_POST['password'];

    $emaildb = "scaramouche@bailandofandango.com";
    $passworddb = "fredymercury";

    $passwordHash = password_hash($passworddb, PASSWORD_DEFAULT);

    if(password_verify($password, $passwordHash) && $email === $emaildb){
        $_SESSION['loggedin'] = true;
        header("Location: ../dashboard.php");
    } else {
        $_SESSION['errorMessage'] = "This email or password isn´t in our database";
        header("Location: ../index.php");
    }

    ?>