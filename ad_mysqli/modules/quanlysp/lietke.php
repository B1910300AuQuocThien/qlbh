<?php
$sql_lietke_sp = "SELECT * FROM sanpham,danhmuc WHERE sanpham.id_danhmuc = danhmuc.id_danhmuc ORDER BY id_sanpham DESC ";
$sth = $pdo -> query($sql_lietke_sp);
// $query_lietke_sp = mysqli_query($mysqli,$sql_lietke_sp);

?>
<p class="lk_sp">liệt kê sản phẩm</p>
<table class="table-lk" border="1" style="border-collapse:collapse; width :100%;">
  <tr>
    <th>id</th>
    <th>Tên sản phẩm</th>
    <th>Hình ảnh</th>
    <th>giá sp</th>
    <th>Số lượng</th>
    <th>Danh mục</th>
    <th>Mã sp</th>
    <th>Tóm tắt</th>
    <th>Nội Dung</th>
    <th>Trạng thái</th>
    <th>Quản lý</th>

  </tr>
  <?php
  $i = 0;
  while($row = $sth -> fetch()){
    $i++;
    ?>
    <tr>
    <td><?php echo $i ?></td>
    <td><?php echo $row['tensanpham'] ?></td>
    <td><img src="modules/quanlysp/uploads/<?php echo $row['hinhanh'] ?>" width="200px" height="250px"></td>
    <td><?php echo $row['giasp'] ?></td>
    <td><?php echo $row['soluong'] ?></td>
    <td><?php echo $row['tendanhmuc'] ?></td>
    <td><?php echo $row['masp'] ?></td>
    <td><?php echo $row['tomtat'] ?></td>
    <td><?php echo $row['noidung'] ?></td>
    <td><?php if($row['tinhtrang']==1){
      echo'kích hoạt';
    }else{
      echo 'ẩn';
    }  
    ?>
    </td>
    <td>
        <a href="modules/quanlysp/xuly.php?idsanpham=<?php echo $row['id_sanpham']?>">Xóa</a> | <a href="?action=quanlysp&query=sua&idsanpham=<?php echo $row['id_sanpham']?>">Sửa</a>
    </td>
  </tr>
  <?php
  }
  ?>
  

</table> 