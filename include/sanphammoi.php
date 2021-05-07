<?php
	
	$sql_cate = mysqli_query($mysqli,"select * from sanpham where sp_hot='1' order by sp_id desc");
?>
<!-- top Products -->
<div class="ads-grid py-sm-5 py-4">
		<div class="container py-xl-4 py-lg-2">
			<!-- tittle heading -->
			<h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">Sản Phẩm Mới</h3>
			<!-- //tittle heading -->
			<div class="row">
				<!-- product left -->
				<div class="agileinfo-ads-display col-lg-9">
					<div class="wrapper">
						<!-- first section -->
						<div class="product-sec1 px-sm-4 px-3 py-sm-5  py-3 mb-4">
							<div class="row">
								<?php
								while($row_sanpham=mysqli_fetch_array($sql_cate)){
									?>
								<div class="col-md-4 product-men mt-5" >
									<div class="men-pro-item simpleCart_shelfItem">
										<div class="men-thumb-item text-center">
											<img src="images/<?php echo $row_sanpham["sp_image"] ?>" alt="" style="width: 120px;height: 250px">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="?quanly=chitietsp&id=<?php echo $row_sanpham["sp_id"]?>" class="link-product-add-cart">Xem sản phẩm</a>
												</div>
											</div>
										</div>
										<div class="item-info-product text-center border-top mt-4">
											<h4 class="pt-1">
												<a href="?quanly=chitietsp&id=<?php echo $row_sanpham["sp_id"] ?>"><?php echo $row_sanpham["sp_name"] ?></a>
											</h4>
											<div class="info-product-price my-2">
												<span class="item_price"><?php echo number_format( $row_sanpham["sp_giakhuyenmai"])."vnđ" ?></span>
												<del><?php echo number_format( $row_sanpham["sp_gia"])."vnđ" ?></del>
											</div>
											<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
											<form action="?quanly=giohang" method="post">
                                            <fieldset>
                                                <input type="hidden" name="tensanpham" value="<?php echo $row_sanpham['sp_name'] ?>" />
                                                <input type="hidden" name="sp_id" value="<?php echo $row_sanpham['sp_id'] ?>" />
                                                <input type="hidden" name="giasanpham" value="<?php echo $row_sanpham['sp_gia'] ?>" />
                                                <input type="hidden" name="hinhanh" value="<?php echo $row_sanpham['sp_image'] ?>" />
                                                <input type="hidden" name="soluong" value="1" />

                                                <input type="submit" name="themgiohang" value="Thêm vào giỏ hàng" class="button" />
                                            </fieldset>
                                        </form>
											</div>
										</div>
									</div>
								</div>
								
								<?php
								}
								?>
							</div>
						</div>
						<!-- //first section -->
						
					</div>
				</div>

				<!-- //product left -->
				<!-- product right -->
				<div class="col-lg-3 mt-lg-0 mt-4 p-lg-0">
					<div class="side-bar p-sm-4 p-3">
						<div class="search-hotel border-bottom py-2">
							<h3 class="agileits-sear-head mb-3">Tìm kiếm...</h3>
							<form action="index.php?quanly=timkiem" method="post">
								<input type="search" placeholder="Tìm kiếm" name="seach_product" required="">
								<button class="btn my-2 my-sm-0" name="seach_button" type="submit">Tìm kiếm</button>
							</form>
						</div>
						<!-- price -->
						<div class="range border-bottom py-2">
							<h3 class="agileits-sear-head mb-3">Giá</h3>
							<div class="w3l-range">
								<ul>
									<a href="?quanly=tkgia">Từ 1 - 5 triệu</a></br>
									<a href="?quanly=tkgia1">Từ 5 - 10 triệu</a></br>
									<a href="?quanly=tkgia2">Trên 10 triệu</a></br>
								</ul>
							</div>
						</div>
						<!-- //price -->
						
						<!-- reviews -->
						
						<!-- //reviews -->
						<!-- electronics -->
						<div class="left-side border-bottom py-2"> 
						
							<h3 class="agileits-sear-head mb-3">Thương Hiệu</h3>
							<ul>
									<a href="?quanly=tkthuonghieu&th=IPhone">IPhone</a></br>
									<a href="?quanly=tkthuonghieu&th=Samsung">Samsung</a></br>
									<a href="?quanly=tkthuonghieu&th=Toshiba">Toshiba</a></br>
									<a href="?quanly=tkthuonghieu&th=LG">LG</a></br>
									<a href="?quanly=tkthuonghieu&th=Oppo">Oppo</a></br>
									<a href="?quanly=tkthuonghieu&th=Electrolux">Electrolux</a></br>
									<a href="?quanly=tkthuonghieu&th=Panasonic">Panasonic</a></br>
									<a href="?quanly=tkthuonghieu&th=HP">HP</a></br>
									<a href="?quanly=tkthuonghieu&th=Lenovo">Lenovo</a></br>
									<a href="?quanly=tkthuonghieu&th=Aces">Aces</a></br>
									<a href="?quanly=tkthuonghieu&th=Asus">Asus</a></br>
									<a href="?quanly=tkthuonghieu&th=Xiaomi">Xiaomi</a></br>
								</ul>
						</div>
						<!-- //electronics -->
					
						<!-- best seller -->
						<div class="f-grid py-2">
							<h3 class="agileits-sear-head mb-3">Sản phẩm bán chạy</h3>
							<div class="box-scroll">
								<div class="scroll">
								<?php
									$sql_product_slidebar = mysqli_query($mysqli,"select * from sanpham where sp_hot='0' order by sp_id desc");
									while($row_product_slidebar=mysqli_fetch_array($sql_product_slidebar)){
								?>
									<div class="row">
										<div class="col-lg-3 col-sm-2 col-3 left-mar">
											<img src="images/<?php echo $row_product_slidebar["sp_image"] ?>" alt="" class="img-fluid">
										</div>
										<div class="col-lg-9 col-sm-10 col-9 w3_mvd">
											<a href=""><?php echo $row_product_slidebar["sp_name"] ?></a>
											<a href="" class="price-mar mt-2"><?php echo number_format( $row_product_slidebar["sp_giakhuyenmai"])."vnđ" ?></a>
											<del><?php echo number_format ($row_product_slidebar["sp_gia"])."vnđ" ?></del>
										</div>
									</div>
									<?php
									}
									?>
								</div>
							</div>
						</div>
						<!-- //best seller -->
					</div>
					<!-- //product right -->
				</div>
			</div>
		</div>
	</div>
	
	<!-- //top products -->