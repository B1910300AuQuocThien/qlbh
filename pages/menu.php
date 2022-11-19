<header id="header" class="header">
  <?php
  $sql_danhmuc = "SELECT *FROM danhmuc ORDER BY id_danhmuc DESC";
  $sth = $pdo->query($sql_danhmuc);
  //  $query_danhmuc = mysqli_query($mysqli,$sql_danhmuc);
  ?>
  <div class="menu mb-2" data-show="0">
    <div class=" menu_parent  h-100 justify-content-center align-items-center">
      <ul class="menu_child row d-flex justify-content-center list-unstyled">
        <?php
        while ($row_danhmuc = $sth->fetch()) {
        ?>
          <li class="col-sm-1 text-center">
            <a href="index.php?quanly=danhmuc&id=<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['tendanhmuc'] ?></a></li>
        <?php
        }
        ?>
        <li class="col-2 text-center">
          <a href="index.php?quanly=about">Về Chúng Tôi</a>
        </li>
        <li class="col-sm-4 row">
          <form action="index.php?quanly=timkiem" method="POST">
            <div class="search row form-group justify-content-center">
              <input class="col-sm-1 form-control w-50 mr-2" type="search" placeholder="Search" name="tukhoa" style="margin-right: 5px;">
              <button class="col-sm-3 ml-2 rounded " type="submit" name="timkim">
                Tìm kiếm
              </button>
            </div>
          </form>
        </li>
      </ul>
    </div>
  </div>
</header>