<?php
include('../../connect/config.php');
$hinhanhdm = $_FILES['hinhanhdm']['name'];
$hinhanhdm_tmp = $_FILES['hinhanhdm']['tmp_name'];
$hinhanhdm_time = time().'_'.$hinhanhdm;
$tenloaisp = $_POST['tendanhmuc'];
$thutu = $_POST['thutu'];
if(isset($_POST['themdanhmuc'])){
    $sql_them = "INSERT INTO danhmuc(hinhanhdm,tendanhmuc,thutu) VALUE('".$hinhanhdm."','".$tenloaisp."','".$thutu."')";
    $pdo -> query($sql_them);
    // mysqli_query($mysqli,$sql_them);
    move_uploaded_file($hinhanhdm_tmp,'upload/'.$hinhanhdm);
    header('Location:../../index.php?action=quanlydanhmucsanpham&query=them');
  
}elseif(isset($_POST['suadanhmuc'])){
    $sql_update = "UPDATE  danhmuc SET tendanhmuc='".$tenloaisp."',thutu='".$thutu."' WHERE id_danhmuc='$_GET[iddanhmuc]'";
    $pdo -> query($sql_update);
    // mysqli_query($mysqli,$sql_update);
    header('Location:../../index.php?action=quanlydanhmucsanpham&query=them');
}else{
    $id=$_GET['iddanhmuc'];
    $sql_xoa = "DELETE FROM danhmuc WHERE id_danhmuc='".$id."'";
    $pdo -> query($sql_xoa);
    // mysqli_query($mysqli,$sql_xoa);
    header('Location:../../index.php?action=quanlydanhmucsanpham&query=them');
}

?>

 