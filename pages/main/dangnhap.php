<div class="img-wrap col-sm-12">
        <div class="img-aboutsp ">
            <img src="img/bg/bgg2.jpg" alt="">
        </div>
        <div class="text-img-aboutsp col-sm-5">
            <h1 style="color: while;">Đăng Nhập Tài Khoản Người Dùng</h1>
        </div>
<?php
if(isset($_POST['dangnhap'])){
    $email = $_POST['email'];
    $matkhau = md5($_POST['password']);
    $sql = "SELECT * FROM dangky WHERE email='".$email."'AND matkhau='".$matkhau."' LIMIT 1";
    // $row = mysqli_query($mysqli,$sql);
    $row = $pdo -> query($sql);
    $count = $row -> fetchColumn();
    if($count>0){
        $row_data = $row -> fetch();
        $_SESSION['dangky'] = $row_data['tenkhachhang'];
        $_SESSION['id_khachhang'] = $row_data['id_dangky'];
        header("Location:index.php?quanly=giohang");

    }else{
        echo '<p> Mật Khẩu hoặc Email sai, vui lòng nhập lại..</p>';

    }
}
?>  
<div class="container-dn">
<form action=" " autocomplete="off" method="POST" >
     
     
    <label ><b>Email tài Khoản: </b></label>
     <input type="email" placeholder="Nhập email...." name="email" >
    <label ><b>Mật Khẩu :</b></label>
     <input type="text" placeholder="Nhập mật khẩu..." name="password" >
    <label>
       <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Nhớ Đăng Nhập
     </label>
     <div class="clearfix">
      <button name="dangnhap" value="đăng nhập" type="submit" class="signupbtn">Log In</button>
     </div>

  
 </form>
</div>
        </div> 