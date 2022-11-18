
<style>
    @import url('https://fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap');
 * {box-sizing: border-box}
 body{
   font-family: 'Noto Sans JP', sans-serif;
 }
  label{
   color: black;
 }
   input[type=text], input[type=password] {
   width: 100%;
   padding: 15px;
   margin: 5px 0 22px 0;
   display: inline-block;
   border: none;
   width:100%;
   resize: vertical;
   padding:15px;
   border-radius:15px;
   border:0;
   box-shadow:4px 4px 10px rgba(0,0,0,0.2);
 }
input[type=text]:focus, input[type=password]:focus {
   outline: none;
 }
hr {
   border: none;
   margin-bottom: 25px;
 }
button {
   background-color: black;
   color: white;
   padding: 14px 20px;
   margin: 8px 0;
   border: none;
   cursor: pointer;
   
   opacity: 0.9;
 }
button:hover {
   opacity:1;
 }
.cancelbtn {
   padding: 14px 20px;
   background-color: #f44336;
 }
.signupbtn {
   float: left;
   width: 100%;
   border-radius:15px;
   border:0;
   box-shadow:4px 4px 10px rgba(0,0,0,0.2);
 }
.container-login {
   padding: 16px;
   width: 50%;
   margin: 0 auto;
 }
.clearfix::after {
   content: "";
   clear: both;
   display: table;
 
}

</style>
<div class="img-wrap col-sm-12">
        <div class="img-aboutsp ">
            <img src="img/bg/bgg2.jpg" alt="">
        </div>
        <div class="text-img-aboutctsp col-sm-5">
            <h1 style="color: while;">Đăng Ký Tài Khoản Người Dùng</h1>
        </div>
        <div class="container-login">
        <?php
  if(isset($_POST['dangky'])){
    $tenkhachhang = $_POST['hovaten'];
    $email = $_POST['email'];
    $dienthoai = $_POST['dienthoai'];
    $matkhau = md5($_POST['matkhau']);
    $diachi = $_POST['diachi'];
    
    //$sql_dangky = mysqli_query($mysqli,"INSERT INTO dangky(tenkhachhang,email,dienthoai,matkhau,diachi) VALUE('".$tenkhachhang."','".$email."','".$dienthoai."','".$matkhau."','".$diachi."')");
    $sth = $pdo -> query("INSERT INTO dangky(tenkhachhang,email,dienthoai,matkhau,diachi) VALUE('".$tenkhachhang."','".$email."','".$dienthoai."','".$matkhau."','".$diachi."')");
    if($sth){
        echo '<p style=" font-size: 20px;color: green;"> Bạn đã đăng ký thành công</P>';
        $_SESSION['dangky'] = $tenkhachhang;
        // $_SESSION['id_khachhang'] = mysqli_insert_id($mysqli);
        $_SESSION['id_khachhang'] = $pdo->lastInsertId();
        //header('Location:index.php?quanly=giohang');
    }
  }
  ?>
        <form action=" " method="POST" >
     
     <hr>
    <label ><b>Họ Và Tên</b></label>
     <input type="text" placeholder="Nhập Họ Và Tên" name="hovaten" >
    <label ><b>Email</b></label>
     <input type="text" placeholder="Nhập Email" name="email" >
    <label ><b>Điện Thoại</b></label>
     <input type="text" placeholder="Nhập SDT" name="dienthoai">
    <label>
    <label ><b>Địa Chỉ</b></label>
     <input type="text" placeholder="Nhập Địa Chỉ" name="diachi" >
    <label>
    <label ><b>Mật Khẩu</b></label>
     <input type="text" placeholder="Nhập Mật Khẩu" name="matkhau">
    <label>
       <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Nhớ Đăng Nhập
     </label>
    <div class="clearfix">
       <button id="btn" name="dangky" value="đăng ký" type="submit" class="signupbtn">Sign Up</button>
     </div>
     <div class="clearfix">
      <button name="dangnhap" value="đăng nhập" type="submit" class="signupbtn"> <a href="index.php?quanly=dangnhap">Log In</a></button>
     </div>

   </div>
 </form>

        </div> 
       