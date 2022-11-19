
<?php
?>
<div class="img-wrap col-sm-12">
        <div class="img-aboutsp ">
            <img src="img/bg/bgg3.png" alt="">
        </div>
        <div class="text-img-aboutghsp col-sm-5">
            <h1>Giỏ Hàng</h1>
        </div>
        <div class="container">
          <h3 class="xinchao"> Xin chào 
          <?php
          if(isset($_SESSION['dangky'])){
            echo $_SESSION['dangky'];
          }
          ?>
          </h3>
<table class="giohang" style="width:100% ">
  <tr class="py-3">
    <th>ID</th>
    <th>Mã sản phẩm</th>
    <th>Tên sản phẩm</th>
    <th>Hình ảnh</th>
    <th>Số lượng</th>
    <th>Giá sản phẩm</th>
    <th>Tổng giá tiền</th>
    <th>Quản lý</th>
    
  </tr>
  <?php
  if(isset($_SESSION['cart'])){
    $tongtien=0;
    $i=0;
    foreach($_SESSION['cart'] as $cart_item){
        $giatien = $cart_item['soluong']*$cart_item['giasp'];
        $tongtien+=$giatien;
        $i++;
  ?>
  <tr>
    <td><?php echo $i ?></td>
    <td><?php echo $cart_item['masp'] ?></td>
    <td><?php echo $cart_item['tensanpham'] ?></td>
    <td><img width="150px" height="180px" src="ad_mysqli/modules/quanlysp/uploads/<?php echo $cart_item['hinhanh']; ?>"></td>
    <td>
      <a href="pages/main/themgiohang.php?tru=<?Php echo $cart_item['id'] ?>"><i class="math fa-solid fa-minus"></i></a>
      <?php echo $cart_item['soluong'] ?>
      <a href="pages/main/themgiohang.php?cong=<?Php echo $cart_item['id'] ?>"><i class="math fa-solid fa-plus"></i></a>
    </td>
    <td><?php echo number_format( $cart_item['giasp'],0,',','.').'₫'  ?></td>
    <td><?php echo number_format( $giatien,0,',','.').'₫'  ?> </td>
    <td class="xoa"><a href="pages/main/themgiohang.php?xoa=<?Php echo $cart_item['id'] ?> ">Xóa</a></td>
  </tr>

  <?php
    }
    ?>
    <tr>
    <td colspan="8">
        <p>Tổng Giá Tiền : <?php  echo number_format( $tongtien,0,',','.').'₫'   ?></p>
        <p><a href="pages/main/themgiohang.php?xoatatca=1 "> Xóa Tất Cả</a></p>
    </td>
  
  </tr>
   
    <?php
  }else{
    ?>
 <tr>
    <td colspan="8">
        <p>Giỏ hàng trống</p>
    </td>
    

  </tr>
    <?php
}
?>
</table>
<div class="dathang">
  <?php
  if(isset($_SESSION['dangky'])){
    ?>
    <div class="clearfix1">
      <button  type="submit" class="signupbtn"> <a href="pages/main/thanhtoan.php">Đặt Hàng</a></button>
     </div>
  
   <?php
  }else {
    ?>
     <div class= "clearfix1">
      <button  type="submit" class="signupbtn"><a href="index.php?quanly=dangky"> Đăng Ký Đặt Hàng</a></button>
     </div>
  

  <?php
  }
  ?>

</div>
      
       
  

        