<?php
session_start();
?>
<?php
include('../db/connect.php');
?>
<?php
//session_destroy();
//unset('dangnhap');
if(isset($_POST['dangnhap'])){
    $taikhoan=$_POST['taikhoan'];
    $matkhau=md5($_POST['matkhau']);
    if($taikhoan==''||$matkhau==''){
        echo '<script>alert("Xin Nhập Đầy Đủ Thông Tin!");</script>';
    }else{
        $sql_select_admin=mysqli_query($mysqli,"select * from admin where email='$taikhoan' and password='$matkhau' limit 1");
        $count=mysqli_num_rows($sql_select_admin);
        $row_dangnhap=mysqli_fetch_array($sql_select_admin);
        if($count>0){
            $_SESSION['dangnhap']=$row_dangnhap['admin_name'];
            $_SESSION['admin_id']=$row_dangnhap['admin_id'];
            echo '<script>alert("Đăng Nhập Thành Công!");</script>';
            header('location:index2.php');
        }else{
            echo '<script>alert("Sai Tài Khoản Hoặc Mật Khẩu!");</script>';
        }
        
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <LINK REL="SHORTCUT ICON" HREF="../images/logodmt.jpg">
    <title>Đăng Nhập Quản Trị</title>
    <meta charset="UTF-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
    Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- bootstrap-css -->
    <link rel="stylesheet" href="../css/css/bootstrap.min.css" >
    <!-- //bootstrap-css -->
    <!-- Custom CSS -->
    <link href="../css/css/style.css" rel='stylesheet' type='text/css' />
    <link href="../css/css/style-responsive.css" rel="stylesheet"/>
    <!-- font CSS -->
    <link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <!-- font-awesome icons -->
    <link rel="stylesheet" href="css/font.css" type="text/css"/>
    <link href="../css/css/font-awesome.css" rel="stylesheet"> 
    <!-- //font-awesome icons -->
    <script src="js/jquery2.0.3.min.js"></script>
</head>
<body>
<div class="log-w3">
<div class="w3layouts-main">
  <h2>Sign In Now</h2>
    <form action="" method="post">
      <input type="text" class="ggg" name="taikhoan" placeholder="Tài Khoản" required="">
      <input type="password" class="ggg" name="matkhau" placeholder="Mật Khẩu" required="">
      <span><input type="checkbox" />Remember Me</span>
      <h6><a href="#">Forgot Password?</a></h6>
        <div class="clearfix"></div>
        <input type="submit" value="Sign In" name="dangnhap">
    </form>
</div>
</div>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.dcjqaccordion.2.7.js"></script>
<script src="js/scripts.js"></script>
<script src="js/jquery.slimscroll.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="js/jquery.scrollTo.js"></script>
</body>
</html>