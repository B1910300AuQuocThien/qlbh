<div class="img-wrap col-sm-12">
        <div class="img-aboutsp ">
            <img src="img/bg/bgg.jpg" alt="">
        </div>
        <div class="text-img-aboutsp col-sm-5">
            <h1>CHI TIẾT SẢN PHẨM</h1>
        </div>
        <?php
        $sql_chitiet = "SELECT *FROM sanpham,danhmuc WHERE sanpham.id_danhmuc=danhmuc.id_danhmuc AND sanpham.id_sanpham='$_GET[id]' LIMIT 1 ";
        $sth = $pdo -> query($sql_chitiet);
        // $query_chitiet = mysqli_query($mysqli,$sql_chitiet);  
                 while($row_chitiet = $sth -> fetch){   
        ?>
       </div>
       <div class="container wrapper_chitiet">
        <div class="hinhanh">
           <img  src="ad_mysqli/modules/quanlysp/uploads/<?php echo $row_chitiet['hinhanh'] ?>" >
        </div>
        <form method="POST" action="pages/main/themgiohang.php?idsanpham=<?php echo $row_chitiet['id_sanpham'] ?>">
        <div class="chitietsp">
        
            <h1>Tên Sản Phẩm : <?php echo $row_chitiet['tensanpham'] ?></h3>
            <h3>Danh Mục Sản Phẩm : <?php echo $row_chitiet['tendanhmuc'] ?></h3>
            <h3>Mã Sản Phẩm : <?php echo $row_chitiet['masp'] ?></h3>
            <h3>Giá Sản Phẩm : <?php echo number_format( $row_chitiet['giasp'],0,',','.')  ?>₫</h3>
            <h3>Số Lượng Sản Phẩm: <?php echo $row_chitiet['soluong'] ?></h3>
             <button name="themgiohang" type="submit" class="themgiohang" value="thêm giỏ hàng" >Thêm Giỏ Hàng</button>
        </div>
        </form>
       </div>
       
       <?php
                 }
                 ?>
      
       
 