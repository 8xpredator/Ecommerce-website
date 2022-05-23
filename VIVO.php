<?php 
session_start();
error_reporting(0);
include('includes/config.php');
include('header.php');?>
<!-- ============================================== NAVBAR : END ============================================== -->

</header>
<div class="slider-area fix">
            <div class="row">
                <!-- Main Slider Area Start -->
                <div class="col-sm-12">
                    <a href="#">
                        <div class="slider-wrapper theme-default">
                            <!-- Slider Background  Image Start-->
                            <div id="slider" class="nivoSlider">
                               <img src="img/slider/V1.jpg" data-thumb="img/slider/V1.jpg" alt="" title="#htmlcaption2" />
		                             <img src="img/slider/V2.jpg" data-thumb="img/slider/V2.jpg" alt="" title="#htmlcaption2" />
									 <img src="img/slider/V3.jpg" data-thumb="img/slider/V3.jpg" alt="" title="#htmlcaption2" />
									 <img src="img/slider/V4.jpg" data-thumb="img/slider/V4.jpg" alt="" title="#htmlcaption2" />
									</div>
                            <!-- Slider Background  Image Start-->
                        </div>
                    </a>
                </div>
                <!-- Main Slider Area End -->
            </div>
            <!-- Row End -->
<div><CENTER>
<BR>
<BR>
<BR>
<h1> VIVO</H1>
<BR>
<BR>
<BR>
</CENTER>
</div>
<div class="best-seller owl-carousel">
                            <!-- Double Products Start -->
                            <div class="double-product">
 <div class="single-product">
                                    <!-- Product Image Start -->
                                    <div class="pro-img" >
									
                                        <a href="#">
										 <?php
$ret=mysqli_query($con,"select * from products where id='2' ");
while ($row=mysqli_fetch_array($ret)) 
{
	# code...


?>
                                            <img class="primary-img" src="admin/productimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['productImage1']);?>" data-echo="admin/productimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['productImage1']);?>"  width="150" height="300" alt="">
                                            <!--<img class="secondary-img" src="img/best-seller/4_2.jpg" alt="single-product">
                                        --></a>
                                        
                                    </div>
                                    <!-- Product Image End -->
                                    <!-- Product Content Start -->
                                    
                                        <div class="pro-content">
                                    <h4><a href="product-details.php?pid=<?php echo htmlentities($row['id']);?>"><?php echo htmlentities($row['productName']);?></a></h4>
                                    <p><span>Rs.<?php echo htmlentities($row['productPrice']);?></span><del>Rs.<?php echo htmlentities($row['productPriceBeforeDiscount']);?></del></p>
                                    <div class="rating">
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star-outline"></i>
                                            <i class="zmdi zmdi-star-outline"></i>
                                        </div>
                                        <div class="pro-actions">
                                            <div class="actions-primary">
                                                <a href="index33.php?page=product&action=add&id=<?php echo $row['id']; ?>" class="zmdi zmdi-shopping-cart-plus" data-toggle="tooltip" title="Add to Cart"></a>
                                            </div>
                                            <div class="actions-secondary">
                                                <a href="product-details.php?pid=<?php echo htmlentities($row['id'])?>&&action=wishlist" data-toggle="tooltip" title="Add Favourite"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                
                                            </div>
                                        </div>
                                        <span class="sticker-new pro-sticker">new</span>
                                    </div>
                                    <!-- Product Content End -->
                                </div>
								<?php
}
?>
</div>


<div class="single-product">
                                    <!-- Product Image Start -->
                                    <div class="pro-img">
                                        <a href="#">
										 <?php
$ret=mysqli_query($con,"select * from products where id='2' ");
while ($row=mysqli_fetch_array($ret)) 
{
	# code...


?>
                                            <img class="primary-img" src="admin/productimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['productImage1']);?>" data-echo="admin/productimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['productImage1']);?>"  width="150" height="300" alt="">
                                            <!--<img class="secondary-img" src="img/best-seller/4_2.jpg" alt="single-product">
                                        --></a>
                                        
                                    </div>
                                    <!-- Product Image End -->
                                    <!-- Product Content Start -->
                                    
                                        <div class="pro-content">
                                    <h4><a href="product-details.php?pid=<?php echo htmlentities($row['id']);?>"><?php echo htmlentities($row['productName']);?></a></h4>
                                    <p><span>Rs.<?php echo htmlentities($row['productPrice']);?></span><del>Rs.<?php echo htmlentities($row['productPriceBeforeDiscount']);?></del></p>
                                    <div class="rating">
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star-outline"></i>
                                            <i class="zmdi zmdi-star-outline"></i>
                                        </div>
                                        <div class="pro-actions">
                                            <div class="actions-primary">
                                                <a href="index33.php?page=product&action=add&id=<?php echo $row['id']; ?>" class="zmdi zmdi-shopping-cart-plus" data-toggle="tooltip" title="Add to Cart"></a>
                                            </div>
                                            <div class="actions-secondary">
                                                <a href="product-details.php?pid=<?php echo htmlentities($row['id'])?>&&action=wishlist" data-toggle="tooltip" title="Add Favourite"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                
                                            </div>
                                        </div>
                                        <span class="sticker-new pro-sticker">new</span>
                                    </div>
                                    <!-- Product Content End -->
                                </div>
								<?php
}
?>
								</div>
								<div class="best-seller owl-carousel">
                            <!-- Double Products Start -->
                            <div class="double-product">
 <div class="single-product">
                                    <!-- Product Image Start -->
                                    <div class="pro-img" >
									
                                        <a href="#">
										 <?php
$ret=mysqli_query($con,"select * from products where id='2' ");
while ($row=mysqli_fetch_array($ret)) 
{
	# code...


?>
                                            <img class="primary-img" src="admin/productimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['productImage1']);?>" data-echo="admin/productimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['productImage1']);?>"  width="150" height="300" alt="">
                                            <!--<img class="secondary-img" src="img/best-seller/4_2.jpg" alt="single-product">
                                        --></a>
                                        
                                    </div>
                                    <!-- Product Image End -->
                                    <!-- Product Content Start -->
                                    
                                        <div class="pro-content">
                                    <h4><a href="product-details.php?pid=<?php echo htmlentities($row['id']);?>"><?php echo htmlentities($row['productName']);?></a></h4>
                                    <p><span>Rs.<?php echo htmlentities($row['productPrice']);?></span><del>Rs.<?php echo htmlentities($row['productPriceBeforeDiscount']);?></del></p>
                                    <div class="rating">
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star-outline"></i>
                                            <i class="zmdi zmdi-star-outline"></i>
                                        </div>
                                        <div class="pro-actions">
                                            <div class="actions-primary">
                                                <a href="index33.php?page=product&action=add&id=<?php echo $row['id']; ?>" class="zmdi zmdi-shopping-cart-plus" data-toggle="tooltip" title="Add to Cart"></a>
                                            </div>
                                            <div class="actions-secondary">
                                                <a href="product-details.php?pid=<?php echo htmlentities($row['id'])?>&&action=wishlist" data-toggle="tooltip" title="Add Favourite"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                
                                            </div>
                                        </div>
                                        <span class="sticker-new pro-sticker">new</span>
                                    </div>
                                    <!-- Product Content End -->
                                </div>
								<?php
}
?>
</div>


<div class="single-product">
                                    <!-- Product Image Start -->
                                    <div class="pro-img">
                                        <a href="#">
										 <?php
$ret=mysqli_query($con,"select * from products where id='2' ");
while ($row=mysqli_fetch_array($ret)) 
{
	# code...


?>
                                            <img class="primary-img" src="admin/productimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['productImage1']);?>" data-echo="admin/productimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['productImage1']);?>"  width="150" height="300" alt="">
                                            <!--<img class="secondary-img" src="img/best-seller/4_2.jpg" alt="single-product">
                                        --></a>
                                       
                                    </div>
                                    <!-- Product Image End -->
                                    <!-- Product Content Start -->
                                    
                                        <div class="pro-content">
                                    <h4><a href="product-details.php?pid=<?php echo htmlentities($row['id']);?>"><?php echo htmlentities($row['productName']);?></a></h4>
                                    <p><span>Rs.<?php echo htmlentities($row['productPrice']);?></span><del>Rs.<?php echo htmlentities($row['productPriceBeforeDiscount']);?></del></p>
                                    <div class="rating">
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star-outline"></i>
                                            <i class="zmdi zmdi-star-outline"></i>
                                        </div>
                                        <div class="pro-actions">
                                            <div class="actions-primary">
                                                <a href="index33.php?page=product&action=add&id=<?php echo $row['id']; ?>" class="zmdi zmdi-shopping-cart-plus" data-toggle="tooltip" title="Add to Cart"></a>
                                            </div>
                                            <div class="actions-secondary">
                                                <a href="product-details.php?pid=<?php echo htmlentities($row['id'])?>&&action=wishlist" data-toggle="tooltip" title="Add Favourite"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                
                                            </div>
                                        </div>
                                        <span class="sticker-new pro-sticker">new</span>
                                    </div>
                                    <!-- Product Content End -->
                                </div>
								<?php
}
?>
								</div>
						<div class="best-seller owl-carousel">
                            <!-- Double Products Start -->
                            <div class="double-product">
 <div class="single-product">
                                    <!-- Product Image Start -->
                                    <div class="pro-img" >
									
                                        <a href="#">
										 <?php
$ret=mysqli_query($con,"select * from products where id='2' ");
while ($row=mysqli_fetch_array($ret)) 
{
	# code...


?>
                                            <img class="primary-img" src="admin/productimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['productImage1']);?>" data-echo="admin/productimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['productImage1']);?>"  width="150" height="300" alt="">
                                            <!--<img class="secondary-img" src="img/best-seller/4_2.jpg" alt="single-product">
                                        --></a>
                                        
                                    </div>
                                    <!-- Product Image End -->
                                    <!-- Product Content Start -->
                                    
                                        <div class="pro-content">
                                    <h4><a href="product-details.php?pid=<?php echo htmlentities($row['id']);?>"><?php echo htmlentities($row['productName']);?></a></h4>
                                    <p><span>Rs.<?php echo htmlentities($row['productPrice']);?></span><del>Rs.<?php echo htmlentities($row['productPriceBeforeDiscount']);?></del></p>
                                    <div class="rating">
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star-outline"></i>
                                            <i class="zmdi zmdi-star-outline"></i>
                                        </div>
                                        <div class="pro-actions">
                                            <div class="actions-primary">
                                                <a href="index33.php?page=product&action=add&id=<?php echo $row['id']; ?>" class="zmdi zmdi-shopping-cart-plus" data-toggle="tooltip" title="Add to Cart"></a>
                                            </div>
                                            <div class="actions-secondary">
                                                <a href="product-details.php?pid=<?php echo htmlentities($row['id'])?>&&action=wishlist" data-toggle="tooltip" title="Add Favourite"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                
                                            </div>
                                        </div>
                                        <span class="sticker-new pro-sticker">new</span>
                                    </div>
                                    <!-- Product Content End -->
                                </div>
								<?php
}
?>
</div>


<div class="single-product">
                                    <!-- Product Image Start -->
                                    <div class="pro-img">
                                        <a href="#">
										 <?php
$ret=mysqli_query($con,"select * from products where id='2' ");
while ($row=mysqli_fetch_array($ret)) 
{
	# code...


?>
                                            <img class="primary-img" src="admin/productimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['productImage1']);?>" data-echo="admin/productimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['productImage1']);?>"  width="150" height="300" alt="">
                                            <!--<img class="secondary-img" src="img/best-seller/4_2.jpg" alt="single-product">
                                        --></a>
                                       
                                    </div>
                                    <!-- Product Image End -->
                                    <!-- Product Content Start -->
                                    
                                        <div class="pro-content">
                                    <h4><a href="product-details.php?pid=<?php echo htmlentities($row['id']);?>"><?php echo htmlentities($row['productName']);?></a></h4>
                                    <p><span>Rs.<?php echo htmlentities($row['productPrice']);?></span><del>Rs.<?php echo htmlentities($row['productPriceBeforeDiscount']);?></del></p>
                                    <div class="rating">
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star-outline"></i>
                                            <i class="zmdi zmdi-star-outline"></i>
                                        </div>
                                        <div class="pro-actions">
                                            <div class="actions-primary">
                                                <a href="index33.php?page=product&action=add&id=<?php echo $row['id']; ?>" class="zmdi zmdi-shopping-cart-plus" data-toggle="tooltip" title="Add to Cart"></a>
                                            </div>
                                            <div class="actions-secondary">
                                                <a href="product-details.php?pid=<?php echo htmlentities($row['id'])?>&&action=wishlist" data-toggle="tooltip" title="Add Favourite"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                
                                            </div>
                                        </div>
                                        <span class="sticker-new pro-sticker">new</span>
                                    </div>
                                    <!-- Product Content End -->
                                </div>
								<?php
}
?>
								</div>
								<div class="best-seller owl-carousel">
                            <!-- Double Products Start -->
                            <div class="double-product">
 <div class="single-product">
                                    <!-- Product Image Start -->
                                    <div class="pro-img" >
									
                                        <a href="#">
										 <?php
$ret=mysqli_query($con,"select * from products where id='2' ");
while ($row=mysqli_fetch_array($ret)) 
{
	# code...


?>
                                            <img class="primary-img" src="admin/productimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['productImage1']);?>" data-echo="admin/productimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['productImage1']);?>"  width="150" height="300" alt="">
                                            <!--<img class="secondary-img" src="img/best-seller/4_2.jpg" alt="single-product">
                                        --></a>
                                        
                                    </div>
                                    <!-- Product Image End -->
                                    <!-- Product Content Start -->
                                    
                                        <div class="pro-content">
                                    <h4><a href="product-details.php?pid=<?php echo htmlentities($row['id']);?>"><?php echo htmlentities($row['productName']);?></a></h4>
                                    <p><span>Rs.<?php echo htmlentities($row['productPrice']);?></span><del>Rs.<?php echo htmlentities($row['productPriceBeforeDiscount']);?></del></p>
                                    <div class="rating">
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star-outline"></i>
                                            <i class="zmdi zmdi-star-outline"></i>
                                        </div>
                                        <div class="pro-actions">
                                            <div class="actions-primary">
                                                <a href="index33.php?page=product&action=add&id=<?php echo $row['id']; ?>" class="zmdi zmdi-shopping-cart-plus" data-toggle="tooltip" title="Add to Cart"></a>
                                            </div>
                                            <div class="actions-secondary">
                                                <a href="product-details.php?pid=<?php echo htmlentities($row['id'])?>&&action=wishlist" data-toggle="tooltip" title="Add Favourite"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                
                                            </div>
                                        </div>
                                        <span class="sticker-new pro-sticker">new</span>
                                    </div>
                                    <!-- Product Content End -->
                                </div>
								<?php
}
?>
</div>


<div class="single-product">
                                    <!-- Product Image Start -->
                                    <div class="pro-img">
                                        <a href="#">
										 <?php
$ret=mysqli_query($con,"select * from products where id='2' ");
while ($row=mysqli_fetch_array($ret)) 
{
	# code...


?>
                                            <img class="primary-img" src="admin/productimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['productImage1']);?>" data-echo="admin/productimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['productImage1']);?>"  width="150" height="300" alt="">
                                            <!--<img class="secondary-img" src="img/best-seller/4_2.jpg" alt="single-product">
                                        --></a>
                                       
                                    </div>
                                    <!-- Product Image End -->
                                    <!-- Product Content Start -->
                                    
                                        <div class="pro-content">
                                    <h4><a href="product-details.php?pid=<?php echo htmlentities($row['id']);?>"><?php echo htmlentities($row['productName']);?></a></h4>
                                    <p><span>Rs.<?php echo htmlentities($row['productPrice']);?></span><del>Rs.<?php echo htmlentities($row['productPriceBeforeDiscount']);?></del></p>
                                    <div class="rating">
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star-outline"></i>
                                            <i class="zmdi zmdi-star-outline"></i>
                                        </div>
                                        <div class="pro-actions">
                                            <div class="actions-primary">
                                                <a href="index33.php?page=product&action=add&id=<?php echo $row['id']; ?>" class="zmdi zmdi-shopping-cart-plus" data-toggle="tooltip" title="Add to Cart"></a>
                                            </div>
                                            <div class="actions-secondary">
                                                <a href="product-details.php?pid=<?php echo htmlentities($row['id'])?>&&action=wishlist" data-toggle="tooltip" title="Add Favourite"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                
                                            </div>
                                        </div>
                                        <span class="sticker-new pro-sticker">new</span>
                                    </div>
                                    <!-- Product Content End -->
                                </div>
								<?php
}
?>
								</div>
								<div class="best-seller owl-carousel">
                            <!-- Double Products Start -->
                            <div class="double-product">
 <div class="single-product">
                                    <!-- Product Image Start -->
                                    <div class="pro-img" >
									
                                        <a href="#">
										 <?php
$ret=mysqli_query($con,"select * from products where id='2' ");
while ($row=mysqli_fetch_array($ret)) 
{
	# code...


?>
                                            <img class="primary-img" src="admin/productimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['productImage1']);?>" data-echo="admin/productimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['productImage1']);?>"  width="150" height="300" alt="">
                                            <!--<img class="secondary-img" src="img/best-seller/4_2.jpg" alt="single-product">
                                        --></a>
                                        
                                    </div>
                                    <!-- Product Image End -->
                                    <!-- Product Content Start -->
                                    
                                        <div class="pro-content">
                                    <h4><a href="product-details.php?pid=<?php echo htmlentities($row['id']);?>"><?php echo htmlentities($row['productName']);?></a></h4>
                                    <p><span>Rs.<?php echo htmlentities($row['productPrice']);?></span><del>Rs.<?php echo htmlentities($row['productPriceBeforeDiscount']);?></del></p>
                                    <div class="rating">
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star-outline"></i>
                                            <i class="zmdi zmdi-star-outline"></i>
                                        </div>
                                        <div class="pro-actions">
                                            <div class="actions-primary">
                                                <a href="index33.php?page=product&action=add&id=<?php echo $row['id']; ?>" class="zmdi zmdi-shopping-cart-plus" data-toggle="tooltip" title="Add to Cart"></a>
                                            </div>
                                            <div class="actions-secondary">
                                                <a href="product-details.php?pid=<?php echo htmlentities($row['id'])?>&&action=wishlist" data-toggle="tooltip" title="Add Favourite"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                
                                            </div>
                                        </div>
                                        <span class="sticker-new pro-sticker">new</span>
                                    </div>
                                    <!-- Product Content End -->
                                </div>
								<?php
}
?>
</div>


<div class="single-product">
                                    <!-- Product Image Start -->
                                    <div class="pro-img">
                                        <a href="#">
										 <?php
$ret=mysqli_query($con,"select * from products where id='2' ");
while ($row=mysqli_fetch_array($ret)) 
{
	# code...


?>
                                            <img class="primary-img" src="admin/productimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['productImage1']);?>" data-echo="admin/productimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['productImage1']);?>"  width="150" height="300" alt="">
                                            <!--<img class="secondary-img" src="img/best-seller/4_2.jpg" alt="single-product">
                                        --></a>
                                       
                                    </div>
                                    <!-- Product Image End -->
                                    <!-- Product Content Start -->
                                    
                                        <div class="pro-content">
                                    <h4><a href="product-details.php?pid=<?php echo htmlentities($row['id']);?>"><?php echo htmlentities($row['productName']);?></a></h4>
                                    <p><span>Rs.<?php echo htmlentities($row['productPrice']);?></span><del>Rs.<?php echo htmlentities($row['productPriceBeforeDiscount']);?></del></p>
                                    <div class="rating">
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star-outline"></i>
                                            <i class="zmdi zmdi-star-outline"></i>
                                        </div>
                                        <div class="pro-actions">
                                            <div class="actions-primary">
                                                <a href="index33.php?page=product&action=add&id=<?php echo $row['id']; ?>" class="zmdi zmdi-shopping-cart-plus" data-toggle="tooltip" title="Add to Cart"></a>
                                            </div>
                                            <div class="actions-secondary">
                                                <a href="product-details.php?pid=<?php echo htmlentities($row['id'])?>&&action=wishlist" data-toggle="tooltip" title="Add Favourite"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                
                                            </div>
                                        </div>
                                        <span class="sticker-new pro-sticker">new</span>
                                    </div>
                                    <!-- Product Content End -->
                                </div>
								<?php
}
?>
								</div>
								<div class="best-seller owl-carousel">
                            <!-- Double Products Start -->
                            <div class="double-product">
 <div class="single-product">
                                    <!-- Product Image Start -->
                                    <div class="pro-img" >
									
                                        <a href="#">
										 <?php
$ret=mysqli_query($con,"select * from products where id='2' ");
while ($row=mysqli_fetch_array($ret)) 
{
	# code...


?>
                                            <img class="primary-img" src="admin/productimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['productImage1']);?>" data-echo="admin/productimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['productImage1']);?>"  width="150" height="300" alt="">
                                            <!--<img class="secondary-img" src="img/best-seller/4_2.jpg" alt="single-product">
                                        --></a>
                                        
                                    </div>
                                    <!-- Product Image End -->
                                    <!-- Product Content Start -->
                                    
                                        <div class="pro-content">
                                    <h4><a href="product-details.php?pid=<?php echo htmlentities($row['id']);?>"><?php echo htmlentities($row['productName']);?></a></h4>
                                    <p><span>Rs.<?php echo htmlentities($row['productPrice']);?></span><del>Rs.<?php echo htmlentities($row['productPriceBeforeDiscount']);?></del></p>
                                    <div class="rating">
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star-outline"></i>
                                            <i class="zmdi zmdi-star-outline"></i>
                                        </div>
                                        <div class="pro-actions">
                                            <div class="actions-primary">
                                                <a href="index33.php?page=product&action=add&id=<?php echo $row['id']; ?>" class="zmdi zmdi-shopping-cart-plus" data-toggle="tooltip" title="Add to Cart"></a>
                                            </div>
                                            <div class="actions-secondary">
                                                <a href="product-details.php?pid=<?php echo htmlentities($row['id'])?>&&action=wishlist" data-toggle="tooltip" title="Add Favourite"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                
                                            </div>
                                        </div>
                                        <span class="sticker-new pro-sticker">new</span>
                                    </div>
                                    <!-- Product Content End -->
                                </div>
								<?php
}
?>
</div>


<div class="single-product">
                                    <!-- Product Image Start -->
                                    <div class="pro-img">
                                        <a href="#">
										 <?php
$ret=mysqli_query($con,"select * from products where id='2' ");
while ($row=mysqli_fetch_array($ret)) 
{
	# code...


?>
                                            <img class="primary-img" src="admin/productimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['productImage1']);?>" data-echo="admin/productimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['productImage1']);?>"  width="150" height="300" alt="">
                                            <!--<img class="secondary-img" src="img/best-seller/4_2.jpg" alt="single-product">
                                        --></a>
                                       
                                    </div>
                                    <!-- Product Image End -->
                                    <!-- Product Content Start -->
                                    
                                        <div class="pro-content">
                                    <h4><a href="product-details.php?pid=<?php echo htmlentities($row['id']);?>"><?php echo htmlentities($row['productName']);?></a></h4>
                                    <p><span>Rs.<?php echo htmlentities($row['productPrice']);?></span><del>Rs.<?php echo htmlentities($row['productPriceBeforeDiscount']);?></del></p>
                                    <div class="rating">
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star-outline"></i>
                                            <i class="zmdi zmdi-star-outline"></i>
                                        </div>
                                        <div class="pro-actions">
                                            <div class="actions-primary">
                                                <a href="index33.php?page=product&action=add&id=<?php echo $row['id']; ?>" class="zmdi zmdi-shopping-cart-plus" data-toggle="tooltip" title="Add to Cart"></a>
                                            </div>
                                            <div class="actions-secondary">
                                                <a href="product-details.php?pid=<?php echo htmlentities($row['id'])?>&&action=wishlist" data-toggle="tooltip" title="Add Favourite"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                
                                            </div>
                                        </div>
                                        <span class="sticker-new pro-sticker">new</span>
                                    </div>
                                    <!-- Product Content End -->
                                </div>
								<?php
}
?>
								</div>
								<div class="best-seller owl-carousel">
                            <!-- Double Products Start -->
                            <div class="double-product">
 <div class="single-product">
                                    <!-- Product Image Start -->
                                    <div class="pro-img" >
									
                                        <a href="#">
										 <?php
$ret=mysqli_query($con,"select * from products where id='2' ");
while ($row=mysqli_fetch_array($ret)) 
{
	# code...


?>
                                            <img class="primary-img" src="admin/productimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['productImage1']);?>" data-echo="admin/productimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['productImage1']);?>"  width="150" height="300" alt="">
                                            <!--<img class="secondary-img" src="img/best-seller/4_2.jpg" alt="single-product">
                                        --></a>
                                        
                                    </div>
                                    <!-- Product Image End -->
                                    <!-- Product Content Start -->
                                    
                                        <div class="pro-content">
                                    <h4><a href="product-details.php?pid=<?php echo htmlentities($row['id']);?>"><?php echo htmlentities($row['productName']);?></a></h4>
                                    <p><span>Rs.<?php echo htmlentities($row['productPrice']);?></span><del>Rs.<?php echo htmlentities($row['productPriceBeforeDiscount']);?></del></p>
                                    <div class="rating">
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star-outline"></i>
                                            <i class="zmdi zmdi-star-outline"></i>
                                        </div>
                                        <div class="pro-actions">
                                            <div class="actions-primary">
                                                <a href="index33.php?page=product&action=add&id=<?php echo $row['id']; ?>" class="zmdi zmdi-shopping-cart-plus" data-toggle="tooltip" title="Add to Cart"></a>
                                            </div>
                                            <div class="actions-secondary">
                                                <a href="product-details.php?pid=<?php echo htmlentities($row['id'])?>&&action=wishlist" data-toggle="tooltip" title="Add Favourite"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                
                                            </div>
                                        </div>
                                        <span class="sticker-new pro-sticker">new</span>
                                    </div>
                                    <!-- Product Content End -->
                                </div>
								<?php
}
?>
</div>


<div class="single-product">
                                    <!-- Product Image Start -->
                                    <div class="pro-img">
                                        <a href="#">
										 <?php
$ret=mysqli_query($con,"select * from products where id='2' ");
while ($row=mysqli_fetch_array($ret)) 
{
	# code...


?>
                                            <img class="primary-img" src="admin/productimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['productImage1']);?>" data-echo="admin/productimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['productImage1']);?>"  width="150" height="300" alt="">
                                            <!--<img class="secondary-img" src="img/best-seller/4_2.jpg" alt="single-product">
                                        --></a>
                                       
                                    </div>
                                    <!-- Product Image End -->
                                    <!-- Product Content Start -->
                                    
                                        <div class="pro-content">
                                    <h4><a href="product-details.php?pid=<?php echo htmlentities($row['id']);?>"><?php echo htmlentities($row['productName']);?></a></h4>
                                    <p><span>Rs.<?php echo htmlentities($row['productPrice']);?></span><del>Rs.<?php echo htmlentities($row['productPriceBeforeDiscount']);?></del></p>
                                    <div class="rating">
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star-outline"></i>
                                            <i class="zmdi zmdi-star-outline"></i>
                                        </div>
                                        <div class="pro-actions">
                                            <div class="actions-primary">
                                                <a href="index33.php?page=product&action=add&id=<?php echo $row['id']; ?>" class="zmdi zmdi-shopping-cart-plus" data-toggle="tooltip" title="Add to Cart"></a>
                                            </div>
                                            <div class="actions-secondary">
                                                <a href="product-details.php?pid=<?php echo htmlentities($row['id'])?>&&action=wishlist" data-toggle="tooltip" title="Add Favourite"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                
                                            </div>
                                        </div>
                                        <span class="sticker-new pro-sticker">new</span>
                                    </div>
                                    <!-- Product Content End -->
                                </div>
								<?php
}
?>
								</div>
								<div class="best-seller owl-carousel">
                            <!-- Double Products Start -->
                            <div class="double-product">
 <div class="single-product">
                                    <!-- Product Image Start -->
                                    <div class="pro-img" >
									
                                        <a href="#">
										 <?php
$ret=mysqli_query($con,"select * from products where id='2' ");
while ($row=mysqli_fetch_array($ret)) 
{
	# code...


?>
                                            <img class="primary-img" src="admin/productimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['productImage1']);?>" data-echo="admin/productimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['productImage1']);?>"  width="150" height="300" alt="">
                                            <!--<img class="secondary-img" src="img/best-seller/4_2.jpg" alt="single-product">
                                        --></a>
                                        
                                    </div>
                                    <!-- Product Image End -->
                                    <!-- Product Content Start -->
                                    
                                        <div class="pro-content">
                                    <h4><a href="product-details.php?pid=<?php echo htmlentities($row['id']);?>"><?php echo htmlentities($row['productName']);?></a></h4>
                                    <p><span>Rs.<?php echo htmlentities($row['productPrice']);?></span><del>Rs.<?php echo htmlentities($row['productPriceBeforeDiscount']);?></del></p>
                                    <div class="rating">
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star-outline"></i>
                                            <i class="zmdi zmdi-star-outline"></i>
                                        </div>
                                        <div class="pro-actions">
                                            <div class="actions-primary">
                                                <a href="index33.php?page=product&action=add&id=<?php echo $row['id']; ?>" class="zmdi zmdi-shopping-cart-plus" data-toggle="tooltip" title="Add to Cart"></a>
                                            </div>
                                            <div class="actions-secondary">
                                                <a href="product-details.php?pid=<?php echo htmlentities($row['id'])?>&&action=wishlist" data-toggle="tooltip" title="Add Favourite"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                
                                            </div>
                                        </div>
                                        <span class="sticker-new pro-sticker">new</span>
                                    </div>
                                    <!-- Product Content End -->
                                </div>
								<?php
}
?>
</div>


<div class="single-product">
                                    <!-- Product Image Start -->
                                    <div class="pro-img">
                                        <a href="#">
										 <?php
$ret=mysqli_query($con,"select * from products where id='2' ");
while ($row=mysqli_fetch_array($ret)) 
{
	# code...


?>
                                            <img class="primary-img" src="admin/productimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['productImage1']);?>" data-echo="admin/productimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['productImage1']);?>"  width="150" height="300" alt="">
                                            <!--<img class="secondary-img" src="img/best-seller/4_2.jpg" alt="single-product">
                                        --></a>
                                       
                                    </div>
                                    <!-- Product Image End -->
                                    <!-- Product Content Start -->
                                    
                                        <div class="pro-content">
                                    <h4><a href="product-details.php?pid=<?php echo htmlentities($row['id']);?>"><?php echo htmlentities($row['productName']);?></a></h4>
                                    <p><span>Rs.<?php echo htmlentities($row['productPrice']);?></span><del>Rs.<?php echo htmlentities($row['productPriceBeforeDiscount']);?></del></p>
                                    <div class="rating">
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star-outline"></i>
                                            <i class="zmdi zmdi-star-outline"></i>
                                        </div>
                                        <div class="pro-actions">
                                            <div class="actions-primary">
                                                <a href="index33.php?page=product&action=add&id=<?php echo $row['id']; ?>" class="zmdi zmdi-shopping-cart-plus" data-toggle="tooltip" title="Add to Cart"></a>
                                            </div>
                                            <div class="actions-secondary">
                                                <a href="product-details.php?pid=<?php echo htmlentities($row['id'])?>&&action=wishlist" data-toggle="tooltip" title="Add Favourite"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                
                                            </div>
                                        </div>
                                        <span class="sticker-new pro-sticker">new</span>
                                    </div>
                                    <!-- Product Content End -->
                                </div>
								<?php
}
?>
								</div>
<?php include('footer.php');?>