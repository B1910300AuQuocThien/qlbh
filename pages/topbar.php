<?php
if (isset($_GET['dangxuat']) && $_GET['dangxuat'] == 1) {
  unset($_SESSION['dangky']);
}
?>
<div class="row py-3 top-bar" style="background-color: antiquewhite">
  <div class="header-text col-2">
    <a class="text-reset" id="lo_go" href="index.php">
      <h3 class="ml-2">Sweetheart</h3>
    </a>
  </div>
  <?php
  $sql_danhmuc = "SELECT *FROM danhmuc ORDER BY id_danhmuc DESC";
  $sth = $pdo->query($sql_danhmuc);
  //  $query_danhmuc = mysqli_query($mysqli,$sql_danhmuc);
  ?>
  <div class="menu col-8" data-show="0">
    <div class=" menu_parent  h-100 justify-content-center align-items-center">
      <ul class="menu_child row d-flex justify-content-center list-unstyled">
        <?php
        while ($row_danhmuc = $sth->fetch()) {
        ?>
          <li class="col-sm-2 text-center dm-menu">
            <a class="text-black " href="index.php?quanly=danhmuc&id=<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['tendanhmuc'] ?></a>
          </li>
        <?php
        }
        ?>
        <li class="col-2 text-center dm-menu">
          <a class="text-black " href="index.php?quanly=about">Về Chúng Tôi</a>
        </li>
        <li class="col-sm-4 mt-3 row">
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

  <div class="icon2 col-1 mt-3 d-flex">
    <div class="row">
      <div class="col-2">
        <a class="col-1 mr-2" href="index.php?quanly=giohang">
          <i class="fa fa-solid fa-bag-shopping"></i>
        </a>
      </div>
      <div class="col-2">
        <i class="tendangnhap col-1">
          <?php
          if (isset($_SESSION['dangky'])) {
          ?>
            <?php
            if (isset($_SESSION['dangky'])) {
              echo $_SESSION['dangky'];
            }
            ?>
            <a href="index.php?dangxuat=1">LogOut</a>
          <?php
          } else {
          ?>
            <a class="" href="index.php?quanly=dangky" style="font-size: small;">Register</a>
          <?php
          }
          ?>
        </i>
      </div>
    </div>

  </div>
</div>