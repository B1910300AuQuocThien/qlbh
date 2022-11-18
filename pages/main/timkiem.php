<div class="img-wrap col-sm-12">
  <div class="img-aboutsp ">
    <img src="img/bg/bgg3.png" alt="">
  </div>
  <div class="text-img-aboutghsp col-sm-5">
    <h1>sản phẩm tìm kiếm</h1>
  </div>
</div>
<?php
if (isset($_POST['timkim'])) {
  $tukhoa = $_POST['tukhoa'];
}
$sql_pro = "SELECT  *FROM sanpham,danhmuc WHERE sanpham.id_danhmuc=danhmuc.id_danhmuc AND sanpham.tensanpham LIKE '%" . $tukhoa . "%' ";
$sth = $pdo->query($sql_pro);
$query_pro = $sth->fetch();
?>
<div class="row">
  <div class="product-left col-sm-9">
    <div class="row">
      <?php
      while ($row = $sth->fetch()) {
      ?>
        <div class="product-tops col-lg-4  col-sm-6">

          <div class="img">
            <img src="ad_mysqli/modules/quanlysp/uploads/<?php echo $row['hinhanh'] ?>" class="img-fluid">
          </div>
          <div class="info">
            <p class="name"> <a href="#"><?php echo $row['tensanpham'] ?></a> </p>
            <p class="desc"> <?php echo $row['tomtat'] ?></p>

            <p class="price"> <?php echo number_format($row['giasp'], 0, ',', '.') ?>₫</p>
            <a href="index.php?quanly=sanpham&id=<?php echo $row['id_sanpham'] ?>"><button class="button"> xem chi tiết </button></a>
          </div>
        </div>
      <?php
      }
      ?>
    </div>
  </div>
  <?php
  include("pages/main/sidebar.php");
  ?>