<style>
    textarea:focus, input:focus{
        outline-color: white;
    }
    .form-outline{
        position: relative;
        margin-bottom: 30px;
    }
    .form-control-dn{
        padding-left: 7px;
        border-radius: 0px;
        border: 0;
        border-bottom: 2px solid gray;
        outline: 0;
        background: transparent;
        transition: border-color 0.2s;
        font-size: 16px;
        width: 100%;
    }
    .form-control-dn:placeholder{
        color: transparent;
    }
    .form-control-dn:placeholder-shown ~ label{
        font-size: 16px;
        cursor: text;
        top: -5px;
        left: 7px;
    }
    .form-control-dn:focus{
        outline: 0;
    }
    label{
        position: absolute;
        top: -20px;
        left: 7px;
        display: block;
        transition: 0.2s;
        font-size: 16px;
        font-weight: bold;
        
    }
    .form-control-dn:focus ~ label{
        position: absolute;
        top: -20px;
        display: block;
        transition: 0.2s;
        font-size: 16px;
    }
    .form-control-dn:focus{
        /* padding-bottom: 6px; */
        /* font-weight: 700; */
        outline-color: white;
        border-width: 3px;
        border-image: linear-gradient(to right, black, red);
        border-image-slice: 1;
    }
    .form-control-dn:required, .form-control-dn:invalid{
        box-shadow: none;
    }
    

</style>

<div class="img-wrap col-sm-12">
    <div class="img-aboutsp ">
        <img src="img/bg/bgg2.jpg" alt="">
    </div>
    <div class="text-img-aboutsp col-sm-5">
        <h1 style="color: while;">Đăng Nhập Tài Khoản Người Dùng</h1>
    </div>
    <?php
    if (isset($_POST['dangnhap'])) {
        $email = $_POST['email'];
        $matkhau = md5($_POST['password']);
        $sql = "SELECT * FROM dangky WHERE email='" . $email . "'AND matkhau='" . $matkhau . "' LIMIT 1";
        // $row = mysqli_query($mysqli,$sql);
        $row = $pdo->query($sql);
        $count = $row->fetchColumn();
        if ($count > 0) {
            $row_data = $row->fetch();
            $_SESSION['dangky'] = $row_data['tenkhachhang'];
            $_SESSION['id_khachhang'] = $row_data['id_dangky'];
            header("Location:index.php?quanly=giohang");
        } else {
            echo '<p> Mật Khẩu hoặc Email sai, vui lòng nhập lại..</p>';
        }
    }
    ?>
    <div class="container-dn">
        <form action=" " autocomplete="off" method="POST">
            <div class="form-outline">
                <input class="form-control-dn" placeholder="" type="email"  name="email">
                <label>Email tài Khoản: </label>
            </div>
            <div class="form-outline">
                <input class="form-control-dn" placeholder="" type="text" name="password">
                <label>Mật Khẩu: </label>
            </div>
            <div class="form-outline">
                <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Nhớ Đăng Nhập
            </div>
            <div class="clearfix">
                <button name="dangnhap" value="đăng nhập" type="submit" class="signupbtn">Log In</button>
            </div>
        </form>
    </div>
</div>  