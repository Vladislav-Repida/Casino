<!DOCTYPE html>

<!--PHP-->
<?php
   require_once $_SERVER['DOCUMENT_ROOT'] ."/phpFunctions/CheckToken.php";
   
   if(CheckToken()){
    header("Location: /index.php");
   }
?>
<!--\PHP-->

<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/normalize.min.css">
    <link rel="stylesheet" href="css/style.min.css">
    <link rel="stylesheet" href="css/login.min.css">
    <title>Casino - Login</title>
</head>
<body>
    <h1 class="bg-title">Casino</h1>
    <form action="">
        <h2 class="title">Вход</h2>
        @@include("components/InputPlaceholder.html", {
            placeholder: "Логин",
            name: "login",
            type: "text"
        })
        @@include("components/InputPlaceholder.html", {
            placeholder: "Пароль",
            name: "password",
            type: "password"
        })
        <button>Войти</button>
        <a href="#" class="create-account">Create an account</a>
    </form>
    <script src="js/login.min.js"></script>
</body>
</html>