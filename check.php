<?php
ob_start();
session_start();

$uid="xuan";
$upwd="aaa";

$id=$_POST["id"];
$pwd=$_POST["pwd"];

if($uid==$id && $upwd==$pwd){
    $_SESSION["login"]="Y";
    $_SESSION["ID"]=$id;
    header('Location:catalog.php');
}else{
    header('Location:login.php');
}

?>