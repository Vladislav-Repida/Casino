<?php
    $server = "";
    $username = "";
    $password = "";
    $dbname = "";
    $charset = "utf8";

    $connect = new mysqli($server, $username, $password, $dbname);

    if($connect->connect_error){
        die("<span style=font-size:16px;><b>Error:</b> Database connection</span>");
    }

    if(!$connect->set_charset($charset)){
        echo "<span style=font-size:16px;><b>Error:</b> setting encoding</span>";
    }
?>