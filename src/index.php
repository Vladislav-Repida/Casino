<!DOCTYPE html>

<!--PHP-->
<?php
    require_once $_SERVER['DOCUMENT_ROOT'] ."/phpFunctions/CheckToken.php";

    if(!CheckToken()){
        header("Location: /login.php");
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
    <title>Casino</title>
</head>
<body>
    @@include('html/header.html')
    <main>
        
    </main>
    @@include('html/footer.html')
    <script src="js/main.min.js"></script>
</body>
</html>