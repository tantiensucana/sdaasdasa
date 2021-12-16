<?php
include './config.php';
include './pdo.php';
$email = isset($_POST['dh51801707_email'])?$_POST['dh51801707_email']:'';
$pass = isset($_POST['dh51801707_pass'])?$_POST['dh51801707_pass']:'';
$name = isset($_POST['dh51801707_name'])?$_POST['dh51801707_name']:'';
$phone = isset($_POST['dh51801707_phone'])?$_POST['dh51801707_phone']:'';
$address=isset($_POST['dh51801707_address'])?$_POST['dh51801707_address']:'';
$datestart = date('Y/m/d h:i:s ');
$dateend=date('Y/m/d');

$timestamp = time();
$mahd=$email.$timestamp;
if($email=='')
{
           echo '<script language="javascript">';
            echo 'alert("Không thể tạo khi bỏ trống")';
            echo '</script>';
            header( "refresh:1;url=register.php" );
            exit;
}
else{
   $sql='insert into user(email,pass,tenuser,diachi,sdt) values(?,?,?,?,?)';
   $a=[$email,$pass,$name,$address,$phone];
   $t=$objPDO->prepare($sql);
   $t->execute($a);
   $sql='insert into hoadon(mahd,email,ngayhd,tennguoinhan,diachi,ngaynhan,sdt) values(?,?,?,?,?,?,?)';
   $b=[$mahd,$email,$datestart,$name,$address,$dateend,$phone];
   $t=$objPDO->prepare($sql);
   $t->execute($b);

   
   header('location:login.php');




}
