<?php
$sql_pro = "SELECT  *FROM danhmuc,sanpham WHERE sanpham.id_danhmuc=danhmuc.id_danhmuc AND sanpham.id_danhmuc='$_GET[id]' ORDER BY sanpham.id_sanpham  DESC ";
$sth = $pdo->query($sql_pro);
//  $query_pro = mysqli_query($mysqli,$sql_pro);




?>
<div class="row">
  <div class="product-left col-sm-9">
    <div class="row">
      <?php
      while ($row_pro = $sth->fetch()) {
      ?>
        <div class="product-tops col-lg-4  col-sm-6">

          <div class="img">
            <img src="ad_mysqli/modules/quanlysp/uploads/<?php echo $row_pro['hinhanh'] ?>" class="img-fluid">
          </div>
          <div class="info">
            <p class="name"> <a href="#"><?php echo $row_pro['tensanpham'] ?></a> </p>
            <p class="desc"> <?php echo $row_pro['tomtat'] ?></p>

            <p class="price"> <?php echo number_format($row_pro['giasp'], 0, ',', '.') ?>₫</p>
            <a href="index.php?quanly=sanpham&id=<?php echo $row_pro['id_sanpham'] ?>"><button class="button"> xem chi tiết </button></a>
          </div>
        </div>
      <?php
      }
      ?>
    </div>
  </div>