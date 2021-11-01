<?php
    session_start();

    $email = $_POST['email'];
    $password = $_POST['password'];

    $emailDb = "scaramouche@willyoudothefandango.com";
    $passwordDb = "galileo";

    $passwordHash = password_hash($passwordDb, PASSWORD_DEFAULT);

    if(password_verify($password, $passwordHash) && $email == $emailDb){
        $_SESSION['email'] = $email;
        header('Location: ../dashboard.php');
    } else {
        $_SESSION['errorMessage'] = "This email or password is not in our database";
        header('Location: ../index.php');
    }

    ?>