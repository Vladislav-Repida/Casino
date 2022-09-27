<?php
    require_once $_SERVER['DOCUMENT_ROOT'] ."/phpFunctions/bd.php";

    $login = trim($_POST["login"]);
    $passwod = trim($_POST["password"]);

    $query = $connect->query("SELECT * FROM `users`");
    $data = $query->fetch_assoc();
    var_dump($data);

    // echo $login."<br>";
    // echo $passwod."<br>";

    if(!empty($login) && !empty($passwod)){
        echo true;
    }
?>