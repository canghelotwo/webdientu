<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home Admin</title> 
    <LINK REL="SHORTCUT ICON" HREF="../images/logodmt.jpg">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="../css/assets/materialize/css/materialize.min.css" media="screen,projection" />
    <!-- Bootstrap Styles-->
    <link href="../css/assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="../css/assets/css/font-awesome.css" rel="stylesheet" />
    <!-- Morris Chart Styles-->
    <link href="../css/assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="../css/assets/css/custom-styles.css" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="../css/assets/js/Lightweight-Chart/cssCharts.css"> 
</head>

<body>
    <div id="wrapper">
        <?php require_once('header.php') ?>
	   <!--/. NAV TOP  -->
         <?php require_once('menu.php') ?>
        <!-- /. NAV SIDE  -->
      
		<div id="page-wrapper">
		  <div class="header"> 
                        <h1 class="page-header">
                            Table
                        </h1>
		</div>
            <div id="page-inner">
            	<?php 
        			$mod = isset($_GET['mod']) ? $_GET['mod'] : "trangchu";
        			switch ($mod) {
            			case 'trangchu':
            				require_once('homeadmin.php');
            				break;
            			case 'donhang':
            				require_once('xulydonhang.php');
            				break;
            			case 'sanpham':
            				require_once('xulysanpham.php');
            				break;
            			case 'khachhang':
            				require_once('xulydonhang.php');
            				break;
            			case 'danhmucmenu':
            				require_once('xulydanhmuc.php');
            				break;
            			case 'baiviet':
            				require_once('xulybaiviet.php');
            				break;
            			case 'taikhoan':
            				require_once('homeadmin.php');
            				break;
            			case 'banner':
            				require_once('homeadmin.php');
            				break;
            			case 'lienhe':
            				require_once('xulylienhe.php');
            				break;
            			
            			default:
            				require_once('homeadmin.php');
            				break;
            		}
            	?>
				
            </div>
            <?php require_once('footer.php') ?>
            <!-- /. PAGE INNER  -->
        </div>

        <!-- /. PAGE WRAPPER  -->
    </div>

    <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
	
	<!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
	
	<script src="assets/materialize/js/materialize.min.js"></script>
	
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- Morris Chart Js -->
    <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
	
	
	<script src="assets/js/easypiechart.js"></script>
	<script src="assets/js/easypiechart-data.js"></script>
	
	 <script src="assets/js/Lightweight-Chart/jquery.chart.js"></script>
	
    <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script> 
 

</body>

</html>