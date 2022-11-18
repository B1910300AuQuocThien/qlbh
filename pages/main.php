<?php
  if(isset($_GET['quanly'])){
    $tam = $_GET['quanly'];
  } else{ 
    $tam ='';
  }
  if ($tam =='danhmuc'){
    include("pages/main/maindm.php");
  }elseif($tam=='sanpham'){
        include("pages/main/sanpham.php");
  }elseif($tam=='giohang'){
    include("pages/main/giohang.php");
}elseif($tam=='dangky'){
  include("pages/main/dangky.php");
}elseif($tam=='thanhtoan'){
  include("pages/main/thanhtoan.php");
}elseif($tam=='dangnhap'){
  include("pages/main/dangnhap.php");
}elseif($tam=='end'){
  include("pages/main/end.php");
}elseif($tam=='about'){
  include("pages/about.php");
}elseif($tam=='timkiem'){
  include("pages/main/timkiem.php");
}
 
 
  else {
    include("pages/home.php");
  }

?>