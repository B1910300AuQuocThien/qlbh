<p>Thêm sản phẩm</p>
<table class="bang" border="1" style="border-collapse:collapse;">
  <form method="POST" action="modules/quanlysp/xuly.php" enctype="multipart/form-data">
    <tr>
        <td>Tên sản phẩm</td>
        <td><input type="text" name="tensanpham" ></td>
    </tr>
    <tr>
        <td>Mã sp</td>
        <td><input type="text" name="masp" ></td>
    </tr>
    <tr>
        <td>Giá sp</td>
        <td><input type="text" name="giasp" ></td>
    </tr>
    <tr>
        <td>Số lượng</td>
        <td><input type="text" name="soluong" ></td>
    </tr>
    <tr>
        <td>Hình ảnh</td>
        <td><input type="file" name="hinhanh" ></td>
    </tr>
    <tr>
        <td>Tóm tắt</td>
        <td><textarea name="tomtat"    rows="10"></textarea></td>
    </tr>
    <tr>
        <td>Nội dung</td>
        <td><textarea name="noidung"   rows="10"></textarea></td>
    </tr>
    <tr>
        <td>Danh mục sản phẩm</td>
        <td>
          <select name="danhmuc" id="">
            <?php
             $sql_danhmuc = "SELECT *FROM danhmuc ORDER BY id_danhmuc DESC";
             $sth = $pdo -> query($sql_danhmuc);
            //  $query_danhmuc = mysqli_query($mysqli,$sql_danhmuc);
             while($row_danhmuc = $sth -> fetch()){
              
            
            ?>
            <option value="<?php echo $row_danhmuc['id_danhmuc']?>"><?php echo $row_danhmuc['tendanhmuc']?></option>
            <?php
             }
             ?>
          </select>
        </td> 
    </tr>
    <tr>
        <td>Tình Trạng</td>
        <td>
          <select name="tinhtrang" id="">
            <option value="1">Kích hoạt</option>
            <option value="0">Ẩn</option>
          </select>
        </td> 
    </tr>
    <tr>
        <td colspan="2"><input type="submit" name="themsanpham" value="thêm sản phẩm"></td>
    </tr>
  </form>
</table>