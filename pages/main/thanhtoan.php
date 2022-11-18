<?php
session_start();
include("../../ad_mysqli/connect/config.php");
$id_khachhang = $_SESSION['id_khachhang'];
$code_oder = rand(0,9999);
$insert_cart = "INSERT INTO cart(id_khachhang,code_cart,cart_status) VALUE ('".$id_khachhang."','".$code_oder."',1)";
$sth = $pdo -> query($insert_cart);
// $cart_query = mysqli_query($mysqli,$insert_cart);
if($sth){
    foreach($_SESSION['cart'] as $key => $value){
        $id_sanpham = $value['id'];
        $soluong = $value['soluong'];
      $insert_oder_details = "INSERT INTO cart_details(id_sanpham,code_cart,soluongmua) VALUE ('".$id_sanpham."','".$code_oder."','".$soluong."')";
      $pdo -> query($insert_oder_details);
      // mysqli_query($mysqli,$insert_oder_details);
    }
}

unset($_SESSION['cart']);
header('Location:../../index.php?quanly=end');

?>


    