<?php
include('pages/slider.php');

?>
<?php
$sql_pro = "SELECT *FROM danhmuc ORDER BY id_danhmuc DESC ";
$sth = $pdo->query($sql_pro);
//  $query_pro = mysqli_query($mysqli,$sql_pro);              
?>
<div class="product-wrap container">
  <div class="infor">
    <h3> Limerence / Trang Chủ</h3>
  </div>
  <?php
  while ($title = $sth->fetch()) {
    $id_danhmuc = $title['id_danhmuc'];
    ?>
    <div class="list-product">
      <div class="d-flex justify-content-between box-title">
        <h2 class="header-prod"><?php echo $title['tendanhmuc'] ?> </h2>
        <p class="see-all"> <a href="#"> Xem tất cả </a></p>
      </div>
  <?php
  }
  ?>
      <div class="box-product">
        <?php
        $sql_pr = "SELECT   *FROM sanpham limit 1,4  ";
        $sth = $pdo->query($sql_pr);
        //  $query_pr = mysqli_query($mysqli,$sql_pr);
        ?>
        <div class=" row">
          <?php


          while ($row = $sth->fetch()) {
            if ($row['id_danhmuc'] == $id_danhmuc) {
          ?>

              <div class="col-lg-3 col-sm-6">


                <div class="product">
                  <div class="img">
                    <a href="index.php?quanly=sanpham&id=<?php echo $row['id_sanpham'] ?>"> <img src="ad_mysqli/modules/quanlysp/uploads/<?php echo $row['hinhanh'] ?>" class="img-fluid"></a>
                  </div>
                  <div class="info">
                    <p class="name"><?php echo $row['tensanpham'] ?></p>
                    <p class="star">
                      <span><i class="fas fa-star"></i></span>
                      <span><i class="fas fa-star"></i></span>
                      <span><i class="fas fa-star"></i></span>
                      <span><i class="fas fa-star"></i></span>
                      <span><i class="fas fa-star"></i></span>
                    </p>
                    <p class="desc"><?php echo $row['tomtat'] ?> </p>

                    <p class="price"><?php echo number_format($row['giasp'], 0, ',', '.') . 'VND' ?></p>

                  </div>
                </div>


              </div>

          <?php
            }
          }
          ?>



          <?php
          $sql_pr = "SELECT   *FROM sanpham limit 12,4  ";
          $sth = $pdo->query($sql_pr);
          //  $query_pr = $sth -> fetch();




          ?>
          <div class=" row">
            <?php


            while ($row = $sth->fetch()) {
              if ($row['id_danhmuc'] == $id_danhmuc) {
            ?>

                <div class="col-lg-3 col-sm-6">


                  <div class="product">
                    <div class="img">
                      <a href="index.php?quanly=sanpham&id=<?php echo $row['id_sanpham'] ?>"> <img src="ad_mysqli/modules/quanlysp/uploads/<?php echo $row['hinhanh'] ?>" class="img-fluid"></a>
                    </div>
                    <div class="info">
                      <p class="name"><?php echo $row['tensanpham'] ?></p>
                      <p class="star">
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                      </p>
                      <p class="desc"><?php echo $row['tomtat'] ?> </p>

                      <p class="price"><?php echo number_format($row['giasp'], 0, ',', '.') . 'VND' ?></p>

                    </div>
                  </div>


                </div>

            <?php
              }
            }
            ?>


            <?php
            $sql_pr = "SELECT   *FROM sanpham limit 24,4  ";
            $sth = $pdo->query($sql_pr);
            //  $query_pr = mysqli_query($mysqli,$sql_pr);




            ?>
            <div class=" row">
              <?php


              while ($row = $sth->fetch()) {
                if ($row['id_danhmuc'] == $id_danhmuc) {
              ?>

                  <div class="col-lg-3 col-sm-12">


                    <div class="product">
                      <div class="img">

                        <a href="index.php?quanly=sanpham&id=<?php echo $row['id_sanpham'] ?>"> <img src="ad_mysqli/modules/quanlysp/uploads/<?php echo $row['hinhanh'] ?> " class="img-fluid"></a>
                      </div>
                      <div class="info">
                        <p class="name"><?php echo $row['tensanpham'] ?></p>
                        <p class="star">
                          <span><i class="fas fa-star"></i></span>
                          <span><i class="fas fa-star"></i></span>
                          <span><i class="fas fa-star"></i></span>
                          <span><i class="fas fa-star"></i></span>
                          <span><i class="fas fa-star"></i></span>
                        </p>
                        <p class="desc"><?php echo $row['tomtat'] ?> </p>

                        <p class="price"><?php echo number_format($row['giasp'], 0, ',', '.') . 'VND' ?></p>

                      </div>
                    </div>


                  </div>

              <?php
                }
              }
              ?>









            </div>


          </div>
        </div>
      





      </div>
      <?php
      include('pages/outfit.php');
      ?>