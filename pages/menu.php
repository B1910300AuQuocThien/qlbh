<header id="header" class="header">
  <?php
  include('pages/topbar.php');
  ?>
  <?php
  $sql_danhmuc = "SELECT *FROM danhmuc ORDER BY id_danhmuc DESC";
  $sth = $pdo->query($sql_danhmuc);
  //  $query_danhmuc = mysqli_query($mysqli,$sql_danhmuc);
  ?>
  <div class="menu" data-show="0">
    <div class=" menu_parent  h-100 justify-content-center align-items-center">
      <ul class="menu_child">

        <li><a href="index.php?quanly=trangchu">Trang Chủ</a>
          <div id="iconn" class="menu-icon">
            <i class="fa-solid fa-bars"></i>
          </div>
        </li>
        <?php
        while ($row_danhmuc = $sth->fetch()) {
        ?>
          <li><a href="index.php?quanly=danhmuc&id=<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['tendanhmuc'] ?></a></li>
        <?php
        }
        ?>

        <li><a href="index.php?quanly=about">Về Chúng Tôi</a></li>
        <li>
          <form action="index.php?quanly=timkiem" method="POST">
            <div class="search">
              <input type="search" placeholder="Search" name="tukhoa">
              <input type="submit" name="timkim" value="Tìm kiếm">
            </div>
          </form>
        </li>
      </ul>
    </div>
  </div>
</header>