<?php
    session_start();

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $nameDb = "Galileo";
    $emailDb = "scaramouche@willyoudothefandango.com";
    $passwordDb = "priscila";

    $passwordHash = password_hash($passwordDb, PASSWORD_BCRYPT);

    if(password_verify($password, $passwordHash) && $email == $emailDb && $name == $nameDb){
        $_SESSION['name'] = $name;
        header('Location: ../dashboard.php');
    } else {
        $_SESSION['errorMessage'] = "This email or password is not in our database";
        header('Location: ../index.php');
    }

    ?>