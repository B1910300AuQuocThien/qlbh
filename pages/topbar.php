<?php

if(isset($_GET['dangxuat'])&&$_GET['dangxuat']==1){
  unset($_SESSION['dangky']);
}
?>

<div class="logo  ">
              <div class="icon">
              <i class="fa fa-brands fa-facebook"></i>
              <i class=" fa fa-brands fa-instagram"></i>
              </div>
              <div class="header-text"><a id="lo_go"href="Trang Chủ.html"><h3>Limerence</h3></a></div>
              <div class="icon2">
              <a href="index.php?quanly=giohang"><i class="fa fa-solid fa-bag-shopping"></i></a>
                <i class="fa fa-solid fa-user"></i>
                <i class="tendangnhap">
              <?php
                if(isset($_SESSION['dangky'])){
                ?>
                <?php
          if(isset($_SESSION['dangky'])){
            echo $_SESSION['dangky'];
          }
          ?>
              <a href="index.php?dangxuat=1">LogOut</a>
              <?php
                }else{
                  ?>
              <a href="index.php?quanly=dangky">Register</a>
              <?php
                }
              ?>
              </i>
                </div>
           
            </div>
           
            