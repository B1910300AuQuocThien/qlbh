<style>
  @import url('https://fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap');

  * {
    box-sizing: border-box
  }

  body {
    font-family: 'Noto Sans JP', sans-serif;
  }

  /* label {
    color: black;
  } */

  /* input[type=text], input[type=password] {
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
} */
  /* input[type=text]:focus, input[type=password]:focus {
   outline: none;
 } */
  hr {
    border: none;
    margin-bottom: 25px;
  }

  .clearfix button {
    background-color: black;
    color: white;
    padding: 14px 10px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    opacity: 0.9;
  }

  button:hover {
    opacity: 1;
  }

  .cancelbtn {
    padding: 14px 20px;
    background-color: #f44336;
  }

  .signupbtn {
    float: left;
    width: 100%;
    border-radius: 15px;
    border: 0;
    box-shadow: 4px 4px 10px rgba(0, 0, 0, 0.2);
  }

  .container-login {
    padding: 16px;
    margin: 20px auto;
    margin-right: 50px;
    border: 1px solid black;
    border-top: none;
    border-radius: 5px;
    box-shadow: 0 30px 40px burlywood;
  }

  form>div {
    position: relative;
  }

  .clearfix::after {
    content: "";
    clear: both;
    display: table;

  }

  .form label {
    position: absolute;
    font-weight: bold;
    margin-bottom: 2px;
    left: 15px;
    pointer-events: none;
    transition: all .22s;
    top: 50%;
    transform: translateY(-50%);
    display: block;
  }

  .form-outline {
    margin-bottom: 30px;
  }

  .form .form-control {
    height: 45px;
    border-radius: 5px;
    border: 0.5px solid black;
    font-size: medium;
    box-shadow: 1px 2px 3px black;
  }

  form input:focus {
    outline-width: 0;
  }

  form input:hover+label {
    top: -25px;
    transform: translateY(0);
    left: 0;
  }

  .form-outline .cover {
    width: 100%;
    position: absolute;
    background: #111;
    height: 4px;
    top: 0px;
  }

  img {
    margin-top: 20px;
    --_g: 10% /45% 45% no-repeat linear-gradient(#000 0 0);
    --m:
      left var(--_i, 0%) top var(--_g),
      bottom var(--_i, 0%) left var(--_g),
      top var(--_i, 0%) right var(--_g),
      right var(--_i, 0%) bottom var(--_g);
    -webkit-mask: var(--m);
    mask: var(--m);
    filter: grayscale();
    transition: .3s linear;
    cursor: pointer;
  }

  img:hover {
    --_i: 10%;
    filter: grayscale(0);
  }
  
</style>
<div class="img-wrap">
  <div class="img-aboutsp ">
    <img src="img/bg/bgg2.jpg" alt="">
  </div>
  <div class="text-img-aboutctsp col-sm-5">
    <h1 style="color: while;">Đăng Ký Tài Khoản Người Dùng</h1>
  </div>
  <div class="row">
    <div class="col-8">
      <div class="text-center">
        <img src="/img/Tops/ao-so-mi-nu-cho-nguoi-gay0.jpg">
      </div>
    </div>
    <div class="container-login text-end col-3">
      <?php
      if (isset($_POST['dangky'])) {
        $tenkhachhang = $_POST['hovaten'];
        $email = $_POST['email'];
        $dienthoai = $_POST['dienthoai'];
        $matkhau = md5($_POST['matkhau']);
        $diachi = $_POST['diachi'];

        //$sql_dangky = mysqli_query($mysqli,"INSERT INTO dangky(tenkhachhang,email,dienthoai,matkhau,diachi) VALUE('".$tenkhachhang."','".$email."','".$dienthoai."','".$matkhau."','".$diachi."')");
        $sth = $pdo->query("INSERT INTO dangky(tenkhachhang,email,dienthoai,matkhau,diachi) VALUE('" . $tenkhachhang . "','" . $email . "','" . $dienthoai . "','" . $matkhau . "','" . $diachi . "')");
        if ($sth) {
          echo '<p style=" font-size: 20px;color: green;"> Bạn đã đăng ký thành công</P>';
          $_SESSION['dangky'] = $tenkhachhang;
          // $_SESSION['id_khachhang'] = mysqli_insert_id($mysqli);
          $_SESSION['id_khachhang'] = $pdo->lastInsertId();
          //header('Location:index.php?quanly=giohang');
        }
      }
      ?>
      <form class="form" action=" " method="POST">
        <hr>
        <div class="form-outline">
          <input class="form-control" type="text" name="hovaten">
          <label>Họ Và Tên</label>
          <div class="cover"></div>
        </div>
        <div class="form-outline">
          <input class="form-control" type="text" name="email">
          <label>Email</label>
          <div class="cover"></div>

        </div>
        <div class="form-outline">
          <input class="form-control" type="text" name="dienthoai">
          <label>Điện Thoại</label>
          <div class="cover"></div>
        </div>
        <div class="form-outline">
          <input class="form-control" type="text" name="diachi">
          <label>Địa Chỉ</label>
          <div class="cover"></div>
        </div>
        <div class="form-outline">
          <input class="form-control" type="text" name="matkhau">
          <label>Mật Khẩu</label>
          <div class="cover"></div>
        </div>
        <div class="form-outline mt-2 ">
          <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Nhớ Đăng Nhập
        </div>
        <div class="clearfix">
          <button id="btn" name="dangky" value="đăng ký" type="submit" class="signupbtn">Sign Up</button>
        </div>
        <div class="clearfix">
          <button name="dangnhap" value="đăng nhập" type="submit" class="signupbtn"> <a href="index.php?quanly=dangnhap">Log In</a></button>
        </div>
      </form>
    </div>
  </div>
</div>