<?php
include_once './config.php';
include './pdo.php';
if(!isset($_SESSION)) session_start();
if(!isset($_SESSION['user']))
{
	       echo '<script language="javascript">';
            echo 'alert("Bạn hãy đăng nhập account")';
            echo '</script>';
            header( "refresh:0.5;url=login.php" );
}else{

$masach = isset($_GET['dh51801707_idproduct'])?$_GET['dh51801707_idproduct']:'';
$soluong= isset($_GET['dh51801707_soluong'])?$_GET['dh51801707_soluong']:'';
$size=isset($_GET['dh51801707_zise'])?$_GET['dh51801707_zise']:'';

$sqll='select * from product where idProduct=?';
$a=[$masach];
$tamn=$objPDO->prepare($sqll);
$tamn->execute($a);
$sach=$tamn->fetch(PDO::FETCH_OBJ);
$sql='select * from hoadon where email=?';
$b=[$_SESSION['user']];
$tam=$objPDO->prepare($sql);
$tam->execute($b);

$hoadon=$tam->fetch(PDO::FETCH_OBJ);
$sqls='select * from chitiethd where mahd=?';
$bc=[$hoadon->mahd];
$tam=$objPDO->prepare($sqls);
$tam->execute($bc);

$data=$tam->fetchALL(PDO::FETCH_OBJ);
$sqls='select * from zise where idzise=?';
$bcc=[$size];
$tam=$objPDO->prepare($sqls);
$tam->execute($bcc);

$nameSize=$tam->fetch(PDO::FETCH_OBJ);
foreach($data as $v)
{
    if($v->idProduct==$masach){
        echo '<script language="javascript">';
            echo 'alert("Trong giỏ hàng đã có hàng này rồi !")';
            echo '</script>';
            header( "refresh:0.5;url=index.php" );
    }
       
}


$sql='insert into chitiethd(mahd,idProduct,soluong,gia,zise) values(?,?,?,?,?)';
$c=[$hoadon->mahd,$masach,$soluong,$sach->priceNew,$nameSize->name];

$tam=$objPDO->prepare($sql);
$tam->execute($c);



header('location:checkout.php');
}



