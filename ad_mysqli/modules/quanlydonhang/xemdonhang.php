<p class="xem_dh">xem đơn hàng</p>
<?php
$sql_lietke_dh = "SELECT * FROM cart_details,sanpham WHERE cart_details.id_sanpham=sanpham.id_sanpham AND cart_details.code_cart='$_GET[code]' ORDER BY cart_details.id_cart_details DESC ";
$sth = $pdo -> query($sql_lietke_dh);
// $query_lietke_dh = mysqli_query($mysqli,$sql_lietke_dh);

?>

<table border="1" style="border-collapse:collapse; width :100%;">
  <tr>
    <th>id</th>
    <th>Mã Đơn Hàng</th>
    <th>Tên Sản Phẩm</th>
    <th>Số lượng</th>
    <th>Đơn Giá</th>
    <th>Thành Tiền</th>
    
  </tr>
  <?php
  $i = 0;
  $tongtien = 0;
  while($row = $sth -> fetch()){
    $i++;
    $thanhtien= $row['giasp']*$row['soluongmua'];
    $tongtien += $thanhtien;
    ?>
    <tr>
    <td><?php echo $i ?></td>
    <td><?php echo $row['code_cart'] ?></td>
    <td><?php echo $row['tensanpham'] ?></td>
    <td><?php echo $row['soluongmua'] ?></td>
    <td><?php echo number_format( $row['giasp'],0,',','.')  ?>₫</td>
    <td><?php echo number_format($row['giasp']*$row['soluongmua'],0,',','.') ?>₫</td>
    
  </tr>
  <?php
  }
  ?>
  <tr>
  <td colspan="6">
        <p>Tổng Tiền: <?php echo number_format($tongtien,0,',','.') ?>₫ </p>

    </td>
  </tr>

</table>                    