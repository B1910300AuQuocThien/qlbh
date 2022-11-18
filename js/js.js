window.onscroll = function() {scrollFunction()};
// khai báo hàm scrollFunction
function scrollFunction() {
    // Kiểm tra vị trí hiện tại của con trỏ so với nội dung trang
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        //nếu lớn hơn 20px thì hiện button
        document.getElementById("myButon").style.display = "block";
    } else {
         //nếu nhỏ hơn 20px thì ẩn button
        document.getElementById("myButon").style.display = "none";
    }
}
//gán sự kiện click cho button
document.getElementById('myButon').addEventListener("click", function(){
    //Nếu button được click thì nhảy về đầu trang
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
});

// menu-icon
var  header = document.getElementById('header');
var  mobile = document.getElementById('iconn');
var headerHeight = header.clientHeight;
mobile.onclick = function(){
  var isClosed = header.clientHeight === headerHeight;
  if(isClosed){
    header.style.height = 'auto';
  } else{
    header.style.height = null;
  }
}
//
var button = document.getElementById("btn");
button.onclick = function(){
    alert("Đăng Ký Thành Công !!!");
}
