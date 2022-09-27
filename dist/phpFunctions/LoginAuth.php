<?php
    require_once $_SERVER['DOCUMENT_ROOT'] ."/phpFunctions/bd.php";

    $token = GUID();
    $login = trim($_POST["login"]);
    $passwod = trim($_POST["password"]);

    $query = $connect->query("SELECT * FROM `users` WHERE login='".$login."'");
    $data = $query->fetch_assoc();

    if(!empty($login) && !empty($passwod)){
        if($passwod == trim($data["password"])){
            $userID = $data["id"];
            $query = $connect->query("UPDATE users SET token='".$token."' WHERE id=".$userID."");

            if($query){
                setcookie("token", $token, time()+60*60*24*1, '/');
                echo json_encode(["status"=>true]);
            }
            else{
                echo json_encode(["status"=>false]);
            }
        }
        else{
            echo json_encode(["status"=>false]);
        }
    }
    else{
        echo json_encode(["status"=>false]);
    }


    function GUID()
    {
        if (function_exists('com_create_guid') === true)
        {
            return trim(com_create_guid(), '{}');
        }
        return sprintf('%04X%04X-%04X-%04X-%04X-%04X%04X%04X', mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(16384, 20479), mt_rand(32768, 49151), mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(0, 65535));
    }
?>