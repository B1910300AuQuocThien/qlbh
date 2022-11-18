<?php
include('../../connect/config.php');
$tensanpham = $_POST['tensanpham'];
$masp = $_POST['masp'];
$giasp = $_POST['giasp'];
$soluong = $_POST['soluong'];
$hinhanh = $_FILES['hinhanh']['name'];
$hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
$hinhanh_time = time().'_'.$hinhanh;
$tomtat = $_POST['tomtat'];
$noidung = $_POST['noidung'];
$tinhtrang = $_POST['tinhtrang'];
$danhmuc = $_POST['danhmuc'];
//xu ly hinh anh




if(isset($_POST['themsanpham'])){
    $sql_them = "INSERT INTO sanpham(tensanpham,masp,giasp,soluong,hinhanh,tomtat,noidung,tinhtrang,id_danhmuc) VALUE('".$tensanpham."','".$masp."','".$giasp."','".$soluong."','".$hinhanh."','".$tomtat."','".$noidung."','".$tinhtrang."','".$danhmuc."')";
    $pdo -> query($sql_them);
    // mysqli_query($mysqli,$sql_them);
    move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh);
    header('Location:../../index.php?action=quanlysp&query=them');
  
}elseif(isset($_POST['suasanpham'])){
    if($hinhanh!= '') {
        move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh);
        
    $sql_update = "UPDATE  sanpham SET tensanpham='".$tensanpham."',masp='".$masp."',giasp='".$giasp."',soluong='".$soluong."',hinhanh='".$hinhanh."',tomtat='".$tomtat."',noidung='".$noidung."',tinhtrang='".$tinhtrang."',id_danhmuc='".$danhmuc."' WHERE id_sanpham='$_GET[idsanpham]'";
    $sql = "SELECT * FROM sanpham WHERE id_sanpham = '$_GET[idsanpham]' LIMIT 1";
    $sth = $pdo -> query($sql);
    // $query = mysqli_query($mysqli,$sql);
    while($row = $sth -> fetch()){
        unlink('uploads/'.$row['hinhanh']);
    }
    }else{
        $sql_update = "UPDATE  sanpham SET tensanpham='".$tensanpham."',masp='".$masp."',giasp='".$giasp."',soluong='".$soluong."',tomtat='".$tomtat."',noidung='".$noidung."',tinhtrang='".$tinhtrang."',id_danhmuc='".$danhmuc."' WHERE id_sanpham='$_GET[idsanpham]'";
    }
    $pdo -> query($sql_update);
    // mysqli_query($mysqli,$sql_update);
    header('Location:../../index.php?action=quanlysp&query=them');
}else{
    $id=$_GET['idsanpham'];
    $sql = "SELECT * FROM sanpham WHERE id_sanpham = '$id' LIMIT 1";
    $sth = $pdo -> query($sql);
    // $query = mysqli_query($mysqli,$sql);
    while($row = $sth -> fetch()){
        unlink('uploads/'.$row['hinhanh']);
    }
    $sql_xoa = "DELETE FROM sanpham WHERE id_sanpham='".$id."'";

    $pdo -> query($sql_xoa);
    // mysqli_query($mysqli,$sql_xoa);
    header('Location:../../index.php?action=quanlysp&query=them');
}

?>

 