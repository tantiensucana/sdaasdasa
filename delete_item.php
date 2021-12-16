<?php
include_once './config.php';
include 'pdo.php';
$masach=isset($_GET['dh51801707_idproduct'])?$_GET['dh51801707_idproduct']:'';

$sql="delete from chitiethd where idProduct= ?";
    $a=[$masach];
    $tam=$objPDO->prepare($sql);
    $tam->execute($a);
header('location:checkout.php');
