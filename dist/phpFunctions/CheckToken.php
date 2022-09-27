<?php
    function CheckToken(){
        require_once $_SERVER['DOCUMENT_ROOT'] ."/phpFunctions/bd.php";

        $token = $_COOKIE["token"];
        if(!isset($token)){
            return 0;
        }

        $query = $connect->query("SELECT * FROM `users` WHERE token='".$token."'");
        $data = $data = $query->fetch_assoc();
        
        if(isset($data)){
            return 1;
        }
        else{
            setcookie("token", "", time()+60*60*24*1, '/');
            return 0;
        }
    }
?>