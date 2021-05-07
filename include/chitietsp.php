<?php
	if(isset($_GET['id'])){
		$id=$_GET['id'];
	}else{
		$id='';
	}
	$sql_chitiet = mysqli_query($mysqli,"select * from sanpham where sanpham.sp_id=$id");
?>
<head>
	<link href="css/danhgia.css" rel="stylesheet" type="text/css" media="all" />
</head>
<!-- page -->
<div class="services-breadcrumb" >
		<div class="agile_inner_breadcrumb">
			<div class="container">
				<ul class="w3_short" style="margin-top: 120px">
					<li>
						<a href="index.php">Trang chủ</a>
						<i>|</i>
					</li>
					<li>Thông Tin Sản Phẩm</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- //page -->
	<?php
		while($row_chitiet=mysqli_fetch_array($sql_chitiet)){
	?>
	<!-- Single Page -->
	<div class="banner-bootom-w3-agileits py-5">
		<div class="container py-xl-4 py-lg-2">
			<!-- tittle heading -->
			
			<!-- //tittle heading -->
			<div class="row">
				<div class="col-lg-5 col-md-8 single-right-left ">
					<div class="grid images_3_of_2">
						<div class="flexslider" style='height="400" width="200"'>
							<ul class="slides">
								<li data-thumb="images/<?php echo $row_chitiet["sp_image"] ?>">
									<div class="thumb-image">
										<img src="images/<?php echo $row_chitiet["sp_image"] ?>" data-imagezoom="true" class="img-fluid" alt=""> </div>
								
							</ul>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>

				<div class="col-lg-7 single-right-left simpleCart_shelfItem">
					<h3 class="mb-3"><?php echo $row_chitiet["sp_name"] ?></h3>
					<p class="mb-3">
						<span class="item_price"><?php echo number_format( $row_chitiet["sp_giakhuyenmai"])."vnđ" ?></span>
						<del class="mx-2 font-weight-light"><?php echo number_format( $row_chitiet["sp_gia"])."vnđ" ?></del>
						<label>Miễn phí vận chuyển</label>
					</p>
					
					<div class="product-single-w3l">
						<p><?php echo  $row_chitiet["sp_chitiet"] ?></p><br>
						<p><?php echo  $row_chitiet["sp_mota"] ?></p>
					</div>
					<div class="occasion-cart">
						<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
							<form action="?quanly=giohang" method="post">
								<fieldset>
									<input type="hidden" name="tensanpham" value="<?php echo $row_chitiet['sp_name'] ?>" />
									<input type="hidden" name="sp_id" value="<?php echo $row_chitiet['sp_id'] ?>" />
									<input type="hidden" name="giasanpham" value="<?php echo $row_chitiet['sp_gia'] ?>" />
									<input type="hidden" name="hinhanh" value="<?php echo $row_chitiet['sp_image'] ?>" />
									<input type="hidden" name="soluong" value="1" />
									
									<div class="center">
										Đánh Giá : 
								      <div class="stars">
								        <input type="radio" id="five" name="rate" value="5">
								        <label for="five"></label>
								        <input type="radio" id="four" name="rate" value="4">
								        <label for="four"></label>
								        <input type="radio" id="three" name="rate" value="3">
								        <label for="three"></label>
								        <input type="radio" id="two" name="rate" value="2">
								        <label for="two"></label>
								        <input type="radio" id="one" name="rate" value="1">
								        <label for="one"></label>
								        <span class="result"></span>
								      </div>
								</div>
									<input type="submit" name="themgiohang" value="Thêm vào giỏ hàng" class="button" />
								</fieldset>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //Single Page -->
	<?php
		}
		?>