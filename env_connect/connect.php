<?php
    function getConnect() : PDO|false {
    try{
        return  new PDO('mysql:host=localhost;dbname=pdo_quest', 'username', 'password');
    }catch (Exeption $e){
        echo "<script>alert('" . $e.getMessage() . "');</script>";
    }
    return false;
}
