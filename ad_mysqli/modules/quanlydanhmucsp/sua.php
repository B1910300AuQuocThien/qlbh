<?php
$sql_sua_danhmucsp = "SELECT * FROM danhmuc WHERE id_danhmuc='$_GET[iddanhmuc]' LIMIT 1 ";
$sth =  $pdo -> query($sql_sua_danhmucsp);
// $query_sua_danhmucsp = mysqli_query($mysqli,$sql_sua_danhmucsp);

?>
<p class="sua_dm">Sửa danh mục sản phẩm</p>
<table border="1" style="border-collapse:collapse;">
  <form method="POST" action="modules/quanlydanhmucsp/xuly.php?iddanhmuc=<?php echo $_GET['iddanhmuc'] ?>">
    <?php
    while($dong = $sth -> fetch()){
    ?>
    <tr>
        <td>Tên danh mục</td>
        <td><input type="text" value="<?php echo $dong['tendanhmuc']?>" name="tendanhmuc" ></td>
    </tr>
    <tr>
        <td>Thứ tự</td>
        <td><input type="text" value="<?php echo $dong['thutu']?>" name="thutu" ></td>
    </tr>
    <tr>
        <td colspan="2"><input type="submit" name="suadanhmuc" value="cập nhật danh mục sản phẩm"  ></td>
    </tr>
    <?php
    }
    ?>
  </form>
</table>
