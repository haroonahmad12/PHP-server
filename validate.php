<?php

function checkSession()
{
    session_start();

    if (isset($_SESSION["email"])) {
        header("Location: ./panel.php");
    };

    header("Location: ./index.php");
};


function userLogin()
{
    session_start();


    $email = $_POST["email"];

    $pass = $_POST["password"];

    if (checkCredentials($email, $pass)) {

        $_SESSION["email"] = $email;

        header("Location: ./panel.php");
    } else {
        header("Location: ./index.php");

        $_SESSION["error"] = "Incorrect Email or Password. Please try again!";
    };
};


function checkCredentials(string $email, string $pass)
{

    $emailDb = "haroon@ftp.com";
    $passwordDb = "willyLillyKilly";

    if ($emailDb === $email && $passwordDb === $pass) {
        return true;
    }
}
