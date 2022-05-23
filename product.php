<?php 
session_start();
error_reporting(0);
include('includes/config.php');
if(isset($_GET['action']) && $_GET['action']=="add"){
	$id=intval($_GET['id']);
	if(isset($_SESSION['cart'][$id])){
		$_SESSION['cart'][$id]['quantity']++;
	}else{
		$sql_p="SELECT * FROM products WHERE id={$id}";
		$query_p=mysqli_query($con,$sql_p);
		if(mysqli_num_rows($query_p)!=0){
			$row_p=mysqli_fetch_array($query_p);
			$_SESSION['cart'][$row_p['id']]=array("quantity" => 1, "price" => $row_p['productPrice']);
			header('location:my-cart.php');
		}else{
			$message="Product ID is invalid";
		}
	}
}
$pid=intval($_GET['pid']);
if(isset($_GET['pid']) && $_GET['action']=="wishlist" ){
	if(strlen($_SESSION['login'])==0)
    {   
header('location:login.php');
}
else
{
mysqli_query($con,"insert into wishlist(userId,productId) values('".$_SESSION['id']."','$pid')");
echo "<script>alert('Product aaded in wishlist');</script>";
header('location:my-wishlist.php');

}
}
if(isset($_POST['submit']))
{
	$qty=$_POST['quality'];
	$price=$_POST['price'];
	$value=$_POST['value'];
	$name=$_POST['name'];
	$summary=$_POST['summary'];
	$review=$_POST['review'];
	mysqli_query($con,"insert into productreviews(productId,quality,price,value,name,summary,review) values('$pid','$qty','$price','$value','$name','$summary','$review')");
}


?>

<?php include('header.php');?>
<!-- ============================================== NAVBAR : END ============================================== -->

</header>
<?php
$ret=mysqli_query($con,"select category.categoryName as catname,subCategory.subcategory as subcatname,products.productName as pname from products join category on category.id=products.category join subcategory on subcategory.id=products.subCategory where products.id='$pid'");
while ($rw=mysqli_fetch_array($ret)) {

?>
        <!-- Header Area End -->
        <!-- Header Breadcumb Start -->
<?php
$ret=mysqli_query($con,"select * from products order by rand() limit 4 ");
while ($rws=mysqli_fetch_array($ret)) {

?>
        <div class="header-bradcrubm pb-50">
            <div class="container">
                <div class="row">
                    <!-- Product Categorie List Start -->
                    <div class="col-md-12">
                        <div class="main-categorie">
                            <!-- Breadcrumb Start -->
                            <div class="main-breadcrumb">
                                <ul class="ptb-15 breadcrumb-list">
                                    <li><a href="index33.php">home</a></li>
                                    <li class="active"><a href="product-details.php?pid=<?php echo htmlentities($rws['id']);?>"><?php echo htmlentities($rws['productName']);?></a></li>
                                </ul>
                            </div>
                            <!-- Breadcrumb End -->
                        </div>
                    </div>
                    <!-- product Categorie List End -->
                </div>
                <!-- Row End -->
            </div>
        </div>
        <!-- Header Breadcumb End -->
        <!-- Product Thumbnail Start -->
        <div class="main-product-thumbnail pb-50">
            <div class="container">
                <div class="row">
                    <!-- Main Thumbnail Image Start -->
                    <div class="col-sm-5">
                        <!-- Thumbnail Large Image start -->
                        <div class="tab-content">
                            <div id="thumb1" class="tab-pane fade in active">
                                <a data-fancybox="images" href="admin/productimages/<?php echo htmlentities($rws['productName']);?>/<?php echo htmlentities($rws['productImage1']);?>"  width="200" height="334" alt=""></a>
                            </div><!--
                            <div id="thumb2" class="tab-pane fade">
                                <a data-fancybox="images" href="img/best-seller/6_1.jpg"><img src="img/accessories/7_1.jpg" alt="product-view"></a>
                            </div>
                            <div id="thumb3" class="tab-pane fade">
                                <a data-fancybox="images" href="img/best-seller/6_2.jpg"><img src="img/best-seller/6_2.jpg" alt="product-view"></a>
                            </div>
                            <div id="thumb4" class="tab-pane fade">
                                <a data-fancybox="images" href="img/best-seller/4_2.jpg"><img src="img/best-seller/4_2.jpg" alt="product-view"></a>
                            </div>
                            <div id="thumb5" class="tab-pane fade">
                                <a data-fancybox="images" href="img/best-seller/9_2.jpg"> <img src="img/best-seller/9_2.jpg" alt="product-view"></a>
                            </div>
                            <div id="thumb6" class="tab-pane fade">
                                <a data-fancybox="images" href="img/accessories/7_2.jpg"><img src="img/accessories/7_2.jpg" alt="product-view"></a>
                            </div>
                        </div>
                        <!-- Thumbnail Large Image End -->

                        <!-- Thumbnail Image End -->
                        <div class="product-thumbnail">
                            <div class="thumb-menu owl-carousel">
                                <div class="active">
                                    <a data-toggle="tab" href="#thumb1"> <img src="img/thumbnail/1.jpg" alt="product-thumbnail"></a>
                                </div>
                                <div>
                                    <a data-toggle="tab" href="#thumb2"> <img src="img/thumbnail/2.jpg" alt="product-thumbnail"></a>
                                </div>
                                <div>
                                    <a data-toggle="tab" href="#thumb3"> <img src="img/thumbnail/3.jpg" alt="product-thumbnail"></a>
                                </div>
                                <div>
                                    <a data-toggle="tab" href="#thumb4"> <img src="img/thumbnail/4.jpg" alt="product-thumbnail"></a>
                                </div>
                                <div>
                                    <a data-toggle="tab" href="#thumb5"> <img src="img/thumbnail/5.jpg" alt="product-thumbnail"></a>
                                </div>
                                <div>
                                    <a data-toggle="tab" href="#thumb6"> <img src="img/thumbnail/6.jpg" alt="product-thumbnail"></a>
                                </div>
                            </div>
                        </div>
                        <!-- Thumbnail image end -->
                    </div>
                    <!-- Main Thumbnail Image End -->
                    <!-- Thumbnail Description Start -->
                    <div class="col-sm-7">
                        <div class="thubnail-desc fix">
                            <h2 class="product-header"><a href="product-details.php?pid=<?php echo htmlentities($rws['id']);?>"><?php echo htmlentities($rws['productName']);?></a></h2>
                            <div class="pro-ref">
                                <p><label>availability:</label><span class="stock" title="abailability">in stock</span></p>
                                
                            </div>
                            <div class="rating-summary fix mtb-10">
                                <div class="rating f-left">
                                    <i class="zmdi zmdi-star"></i>
                                    <i class="zmdi zmdi-star"></i>
                                    <i class="zmdi zmdi-star"></i>
                                    <i class="zmdi zmdi-star-outline"></i>
                                    <i class="zmdi zmdi-star-outline"></i>
                                </div>
                                <div class="rating-feedback f-left">
                                    <a href="#">(1 review)</a>
                                    <a href="#">add to your review</a>
                                </div>
                            </div>
                            <div class="pro-price mb-15">
                                <span>Rs. <?php echo htmlentities($rws['productPrice']);?></span>
                            </div>
                            <div class="box-quantity mb-30">
                                <form action="#">
                                    <input class="number" id="numeric" type="number" value="1">
                                    <button class="action-prime">add to cart</button>
                                </form>
                            </div>
                            <div class="product-social-link">
                                <ul class="list-inline">
                                    <li><a href="#">Add to Wish List</a></li>
                                    <li><a href="#">Add to compare</a></li>
                                    <li><a href="#">Email</a></li>
                                </ul>
                            </div>
                            <p class="ptb-30">The Go-Get'r Pushup Grips safely provide the extra range of motion you need for a deep-dip routine targeting core, shoulder, chest and arm strength. Do fewer pushups using more energy, getting better results faster than the standard floor-level technique yield.</p>
                        </div>
                    </div>
                    <!-- Thumbnail Description End -->
                </div>
                <!-- Row End -->
            </div>
            <!-- Container End -->
        </div>
		<?php }?>
        <!-- Product Thumbnail End -->
        <!-- Product Thumbnail Description Start -->
        <div class="thumnail-desc pb-50">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <ul class="main-thumb-desc">
                            <li class="active"><a data-toggle="tab" href="#dtail">Details</a></li>
                            <li><a data-toggle="tab" href="#review">Reviews 1</a></li>
                        </ul>
                        <!-- Product Thumbnail Tab Content Start -->
                        <div class="tab-content thumb-content">
                            <div id="dtail" class="tab-pane fade in active">
                                <p>The Go-Get'r Pushup Grips safely provide the extra range of motion you need for a deep-dip routine targeting core, shoulder, chest and arm strength. Do fewer pushups using more energy, getting better results faster than the standard floor-level technique yield. <br> Durable foam grips. <br> Supportive base.</p>
                            </div>
                            <div id="review" class="tab-pane fade">
                                <!-- Reviews Start -->
                                <div class="review pb-40">
                                    <h3 class="review-title mb-35">Customer Reviews</h3>
                                    <h4 class="review-mini-title">Plazathemes</h4>
                                    <ul class="review-list">
                                        <!-- Single Review List Start -->
                                        <li>
                                            <span>Quality</span>
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star-outline"></i>
                                            <i class="zmdi zmdi-star-outline"></i>
                                            <label>Plazathemes</label>
                                        </li>
                                        <!-- Single Review List End -->
                                        <!-- Single Review List Start -->
                                        <li>
                                            <span>price</span>
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star-outline"></i>
                                            <i class="zmdi zmdi-star-outline"></i>
                                            <label>Review by Plazathemes</label>
                                        </li>
                                        <!-- Single Review List End -->
                                        <!-- Single Review List Start -->
                                        <li>
                                            <span>value</span>
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star-outline"></i>
                                            <i class="zmdi zmdi-star-outline"></i>
                                            <label>Posted on 7/20/16</label>
                                        </li>
                                        <!-- Single Review List End -->
                                    </ul>
                                </div>
                                <!-- Reviews End -->
                                <!-- Reviews Start -->
                                <div class="review pt-50">
                                    <h3 class="review-title mb-30">You're reviewing: <br><span>Go-Get'r Pushup Grips</span></h3>
                                    <p class="mb-10 req">your rating</p>
                                    <ul class="review-list">
                                        <!-- Single Review List Start -->
                                        <li>
                                            <span>Quality</span>
                                            <i class="zmdi zmdi-star-outline"></i>
                                            <i class="zmdi zmdi-star-outline"></i>
                                            <i class="zmdi zmdi-star-outline"></i>
                                            <i class="zmdi zmdi-star-outline"></i>
                                            <i class="zmdi zmdi-star-outline"></i>
                                        </li>
                                        <!-- Single Review List End -->
                                        <!-- Single Review List Start -->
                                        <li>
                                            <span>price</span>
                                            <i class="zmdi zmdi-star-outline"></i>
                                            <i class="zmdi zmdi-star-outline"></i>
                                            <i class="zmdi zmdi-star-outline"></i>
                                            <i class="zmdi zmdi-star-outline"></i>
                                            <i class="zmdi zmdi-star-outline"></i>
                                        </li>
                                        <!-- Single Review List End -->
                                        <!-- Single Review List Start -->
                                        <li>
                                            <span>value</span>
                                            <i class="zmdi zmdi-star-outline"></i>
                                            <i class="zmdi zmdi-star-outline"></i>
                                            <i class="zmdi zmdi-star-outline"></i>
                                            <i class="zmdi zmdi-star-outline"></i>
                                            <i class="zmdi zmdi-star-outline"></i>
                                        </li>
                                        <!-- Single Review List End -->
                                    </ul>
                                </div>
                                <!-- Reviews End -->
                                <!-- Reviews Field Start -->
                                <div class="riview-field mt-30">
                                    <form autocomplete="off" action="#">
                                        <div class="form-group">
                                            <label class="req" for="sure-name">Nickname</label>
                                            <input type="text" class="form-control" id="sure-name" required="required">
                                        </div>
                                        <div class="form-group">
                                            <label class="req" for="subject">Summary</label>
                                            <input type="text" class="form-control" id="subject" required="required">
                                        </div>
                                        <div class="form-group">
                                            <label class="req" for="comments">Review</label>
                                            <textarea class="form-control" rows="5" id="comments" required="required"></textarea>
                                        </div>
                                        <button type="submit" class="btn-default">Submit Review</button>
                                    </form>
                                </div>
                                <!-- Reviews Field Start -->
                            </div>
                        </div>
                        <!-- Product Thumbnail Tab Content End -->
                    </div>
                </div>
                <!-- Row End -->
            </div>
            <!-- Container End -->
        </div>
        <!-- Product Thumbnail Description End -->
        <!-- Related Product Start -->
        <div class="related-product mb-50">
            <div class="container">
                <!-- Group Title Start -->
                <div class="group-title">
                    <h2>related product</h2>
                </div>
                <!-- Group Title End -->
                <div class="row">
                    <div class="col-sm-12">
                        <!-- Main Product Activation Start -->
                        <div class="related-main-pro owl-carousel">
                            <!-- Single Products Start -->
                            <div class="single-product">
                                <!-- Product Image Start -->
                                <div class="pro-img">
                                    <a href="product-page.html">
                                        <img class="primary-img" src="img/best-seller/4_1.jpg" alt="single-product">
                                        <img class="secondary-img" src="img/best-seller/4_2.jpg" alt="single-product">
                                    </a>
                                    <div class="quick-view text-center">
                                        <a href="#" data-toggle="modal" data-target="#myModal">Quick View</a>
                                    </div>
                                </div>
                                <!-- Product Image End -->
                                <!-- Product Content Start -->
                                <div class="pro-content">
                                    <h4><a href="product-page.html">Push It Messenger Bag</a></h4>
                                    <p><span>$50.00</span></p>
                                    <div class="rating">
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star-outline"></i>
                                        <i class="zmdi zmdi-star-outline"></i>
                                    </div>
                                    <div class="pro-actions">
                                        <div class="actions-primary">
                                            <a href="#" data-toggle="tooltip" title="Add to Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Product Content End -->
                            </div>
                            <!-- Single Products End -->
                            <!-- Single Products Start -->
                            <div class="single-product">
                                <!-- Product Image Start -->
                                <div class="pro-img">
                                    <a href="product-page.html">
                                        <img class="primary-img" src="img/accessories/6.jpg" alt="single-product">
                                        <img class="secondary-img" src="img/accessories/2_2.jpg" alt="single-product">
                                    </a>
                                    <div class="quick-view text-center">
                                        <a href="#" data-toggle="modal" data-target="#myModal">Quick View</a>
                                    </div>
                                </div>
                                <!-- Product Image End -->
                                <!-- Product Content Start -->
                                <div class="pro-content">
                                    <h4><a href="product-page.html">Affirm Water Bottle</a></h4>
                                    <p><span>$8.00</span><del>$10.00</del></p>
                                    <div class="rating">
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star-outline"></i>
                                        <i class="zmdi zmdi-star-outline"></i>
                                    </div>
                                    <div class="pro-actions">
                                        <div class="actions-primary">
                                            <a href="#" data-toggle="tooltip" title="Add to Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Product Content End -->
                                <span class="sticker-sale pro-sticker">-20%</span>
                            </div>
                            <!-- Single Products End -->
                            <!-- Single Products Start -->
                            <div class="single-product">
                                <!-- Product Image Start -->
                                <div class="pro-img">
                                    <a href="product-page.html">
                                        <img class="primary-img" src="img/best-seller/13_1.jpg" alt="single-product">
                                        <img class="secondary-img" src="img/best-seller/13_2.jpg" alt="single-product">
                                    </a>
                                    <div class="quick-view text-center">
                                        <a href="#" data-toggle="modal" data-target="#myModal">Quick View</a>
                                    </div>
                                </div>
                                <!-- Product Image End -->
                                <!-- Product Content Start -->
                                <div class="pro-content">
                                    <h4><a href="product-page.html">Dual Handle Cardio Ball</a></h4>
                                    <p><span>$8.00</span><del>$12.00</del></p>
                                    <div class="rating">
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star-outline"></i>
                                    </div>
                                    <div class="pro-actions">
                                        <div class="actions-primary">
                                            <a href="#" data-toggle="tooltip" title="Add to Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Product Content End -->
                                <span class="sticker-sale pro-sticker">-33%</span>
                            </div>
                            <!-- Single Products End -->
                            <!-- Single Products Start -->
                            <div class="single-product">
                                <!-- Product Image Start -->
                                <div class="pro-img">
                                    <a href="product-page.html">
                                        <img class="primary-img" src="img/best-seller/9_1.jpg" alt="single-product">
                                        <img class="secondary-img" src="img/best-seller/9_2.jpg" alt="single-product">
                                    </a>
                                    <div class="quick-view text-center">
                                        <a href="#" data-toggle="modal" data-target="#myModal">Quick View</a>
                                    </div>
                                </div>
                                <!-- Product Image End -->
                                <!-- Product Content Start -->
                                <div class="pro-content">
                                    <h4><a href="product-page.html">Zing Jump Rope</a></h4>
                                    <p><span>$12.00</span></p>
                                    <div class="rating">
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star-outline"></i>
                                    </div>
                                    <div class="pro-actions">
                                        <div class="actions-primary">
                                            <a href="#" data-toggle="tooltip" title="Add to Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Product Content End -->
                            </div>
                            <!-- Single Products End -->
                            <!-- Single Products Start -->
                            <div class="single-product">
                                <!-- Product Image Start -->
                                <div class="pro-img">
                                    <a href="product-page.html">
                                        <img class="primary-img" src="img/best-seller/6_1.jpg" alt="single-product">
                                        <img class="secondary-img" src="img/best-seller/6_2.jpg" alt="single-product">
                                    </a>
                                    <div class="quick-view text-center">
                                        <a href="#" data-toggle="modal" data-target="#myModal">Quick View</a>
                                    </div>
                                </div>
                                <!-- Product Image End -->
                                <!-- Product Content Start -->
                                <div class="pro-content">
                                    <h4><a href="product-page.html">Sprite Foam Yoga Brick</a></h4>
                                    <p><span>$4.00</span><del>$5.00</del></p>
                                    <div class="rating">
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star"></i>
                                    </div>
                                    <div class="pro-actions">
                                        <div class="actions-primary">
                                            <a href="#" data-toggle="tooltip" title="Add to Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Product Content End -->
                                <span class="sticker-sale pro-sticker">-20%</span>
                            </div>
                            <!-- Single Products End -->
                            <!-- Single Products Start -->
                            <div class="single-product">
                                <!-- Product Image Start -->
                                <div class="pro-img">
                                    <a href="product-page.html">
                                        <img class="primary-img" src="img/best-seller/4_1.jpg" alt="single-product">
                                        <img class="secondary-img" src="img/best-seller/4_2.jpg" alt="single-product">
                                    </a>
                                    <div class="quick-view text-center">
                                        <a href="#" data-toggle="modal" data-target="#myModal">Quick View</a>
                                    </div>
                                </div>
                                <!-- Product Image End -->
                                <!-- Product Content Start -->
                                <div class="pro-content">
                                    <h4><a href="product-page.html">Aim Analog</a></h4>
                                    <p><span>$45.00</span>5</p>
                                    <div class="rating">
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star-outline"></i>
                                        <i class="zmdi zmdi-star-outline"></i>
                                    </div>
                                    <div class="pro-actions">
                                        <div class="actions-primary">
                                            <a href="#" data-toggle="tooltip" title="Add to Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Product Content End -->
                            </div>
                            <!-- Single Products End -->
                        </div>
                        <!-- Main Product Activation Start -->
                    </div>
                </div>
                <!-- Row End -->
            </div>
            <!-- Container End -->
        </div>
        <!-- Related Product End -->
        <!-- Upsell Product Start -->
        <div class="related-product mb-50">
            <div class="container">
                <!-- Group Title Start -->
                <div class="group-title">
                    <h2>upsell product</h2>
                </div>
                <!-- Group Title End -->
                <div class="row">
                    <div class="col-sm-12">
                        <!-- Main Product Activation Start -->
                        <div class="related-main-pro owl-carousel">
                            <!-- Single Products Start -->
                            <div class="single-product">
                                <!-- Product Image Start -->
                                <div class="pro-img">
                                    <a href="product-page.html">
                                        <img class="primary-img" src="img/accessories/6.jpg" alt="single-product">
                                        <img class="secondary-img" src="img/accessories/2_2.jpg" alt="single-product">
                                    </a>
                                    <div class="quick-view text-center">
                                        <a href="#" data-toggle="modal" data-target="#myModal">Quick View</a>
                                    </div>
                                </div>
                                <!-- Product Image End -->
                                <!-- Product Content Start -->
                                <div class="pro-content">
                                    <h4><a href="product-page.html">Affirm Water Bottle</a></h4>
                                    <p><span>$8.00</span><del>$10.00</del></p>
                                    <div class="rating">
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star-outline"></i>
                                        <i class="zmdi zmdi-star-outline"></i>
                                    </div>
                                    <div class="pro-actions">
                                        <div class="actions-primary">
                                            <a href="#" data-toggle="tooltip" title="Add to Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Product Content End -->
                                <span class="sticker-sale pro-sticker">-20%</span>
                            </div>
                            <!-- Single Products End -->
                            <!-- Single Products Start -->
                            <div class="single-product">
                                <!-- Product Image Start -->
                                <div class="pro-img">
                                    <a href="product-page.html">
                                        <img class="primary-img" src="img/best-seller/13_1.jpg" alt="single-product">
                                        <img class="secondary-img" src="img/best-seller/13_2.jpg" alt="single-product">
                                    </a>
                                    <div class="quick-view text-center">
                                        <a href="#" data-toggle="modal" data-target="#myModal">Quick View</a>
                                    </div>
                                </div>
                                <!-- Product Image End -->
                                <!-- Product Content Start -->
                                <div class="pro-content">
                                    <h4><a href="product-page.html">Dual Handle Cardio Ball</a></h4>
                                    <p><span>$8.00</span><del>$12.00</del></p>
                                    <div class="rating">
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star-outline"></i>
                                    </div>
                                    <div class="pro-actions">
                                        <div class="actions-primary">
                                            <a href="#" data-toggle="tooltip" title="Add to Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Product Content End -->
                                <span class="sticker-sale pro-sticker">-33%</span>
                            </div>
                            <!-- Single Products End -->
                            <!-- Single Products Start -->
                            <div class="single-product">
                                <!-- Product Image Start -->
                                <div class="pro-img">
                                    <a href="product-page.html">
                                        <img class="primary-img" src="img/best-seller/9_1.jpg" alt="single-product">
                                        <img class="secondary-img" src="img/best-seller/9_2.jpg" alt="single-product">
                                    </a>
                                    <div class="quick-view text-center">
                                        <a href="#" data-toggle="modal" data-target="#myModal">Quick View</a>
                                    </div>
                                </div>
                                <!-- Product Image End -->
                                <!-- Product Content Start -->
                                <div class="pro-content">
                                    <h4><a href="product-page.html">Zing Jump Rope</a></h4>
                                    <p><span>$12.00</span></p>
                                    <div class="rating">
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star-outline"></i>
                                    </div>
                                    <div class="pro-actions">
                                        <div class="actions-primary">
                                            <a href="#" data-toggle="tooltip" title="Add to Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Product Content End -->
                            </div>
                            <!-- Single Products End -->
                            <!-- Single Products Start -->
                            <div class="single-product">
                                <!-- Product Image Start -->
                                <div class="pro-img">
                                    <a href="product-page.html">
                                        <img class="primary-img" src="img/best-seller/6_1.jpg" alt="single-product">
                                        <img class="secondary-img" src="img/best-seller/6_2.jpg" alt="single-product">
                                    </a>
                                    <div class="quick-view text-center">
                                        <a href="#" data-toggle="modal" data-target="#myModal">Quick View</a>
                                    </div>
                                </div>
                                <!-- Product Image End -->
                                <!-- Product Content Start -->
                                <div class="pro-content">
                                    <h4><a href="product-page.html">Sprite Foam Yoga Brick</a></h4>
                                    <p><span>$4.00</span><del>$5.00</del></p>
                                    <div class="rating">
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star"></i>
                                    </div>
                                    <div class="pro-actions">
                                        <div class="actions-primary">
                                            <a href="#" data-toggle="tooltip" title="Add to Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Product Content End -->
                                <span class="sticker-sale pro-sticker">-20%</span>
                            </div>
                            <!-- Single Products End -->
                            <!-- Single Products Start -->
                            <div class="single-product">
                                <!-- Product Image Start -->
                                <div class="pro-img">
                                    <a href="product-page.html">
                                        <img class="primary-img" src="img/best-seller/4_1.jpg" alt="single-product">
                                        <img class="secondary-img" src="img/best-seller/4_2.jpg" alt="single-product">
                                    </a>
                                    <div class="quick-view text-center">
                                        <a href="#" data-toggle="modal" data-target="#myModal">Quick View</a>
                                    </div>
                                </div>
                                <!-- Product Image End -->
                                <!-- Product Content Start -->
                                <div class="pro-content">
                                    <h4><a href="product-page.html">Aim Analog</a></h4>
                                    <p><span>$45.00</span>5</p>
                                    <div class="rating">
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star-outline"></i>
                                        <i class="zmdi zmdi-star-outline"></i>
                                    </div>
                                    <div class="pro-actions">
                                        <div class="actions-primary">
                                            <a href="#" data-toggle="tooltip" title="Add to Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Product Content End -->
                            </div>
                            <!-- Single Products End -->
                            <!-- Single Products Start -->
                            <div class="single-product">
                                <!-- Product Image Start -->
                                <div class="pro-img">
                                    <a href="product-page.html">
                                        <img class="primary-img" src="img/best-seller/6_1.jpg" alt="single-product">
                                        <img class="secondary-img" src="img/best-seller/6_2.jpg" alt="single-product">
                                    </a>
                                    <div class="quick-view text-center">
                                        <a href="#" data-toggle="modal" data-target="#myModal">Quick View</a>
                                    </div>
                                </div>
                                <!-- Product Image End -->
                                <!-- Product Content Start -->
                                <div class="pro-content">
                                    <h4><a href="product-page.html">endurance</a></h4>
                                    <p><span>$49.00</span></p>
                                    <div class="rating">
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star"></i>
                                    </div>
                                    <div class="pro-actions">
                                        <div class="actions-primary">
                                            <a href="#" data-toggle="tooltip" title="Add to Cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Product Content End -->
                            </div>
                            <!-- Single Products End -->
                        </div>
                        <!-- Main Product Activation Start -->
                    </div>
                </div>
                <!-- Row End -->
            </div>
            <!-- Container End -->
        </div>
        <!-- Upsell Product End -->
        <!-- Newsletter& Subscribe Start -->
        <div class="subscribe black-bg ptb-15">
            <div class="container">
                <div class="row">
                    <!-- Subscribe Box Start -->
                    <div class="col-sm-6">
                        <div class="search-box-view fix">
                            <form action="#">
                                <label for="email-two">Subscribe</label>
                                <input type="text" class="email" placeholder="Enter your email address" name="email" id="email-two">
                                <button type="submit" class="submit"></button>
                            </form>
                        </div>
                    </div>
                    <!-- Subscribe Box End -->
                    <!-- Social Follow Start -->
                    <div class="col-sm-6">
                        <div class="social-follow f-right">
                            <h3>stay connect</h3>
                            <!-- Follow Box End -->
                            <ul class="follow-box">
                                <li><a href="#"><i class="zmdi zmdi-twitter"></i></a></li>
                                <li><a href="#"><i class="zmdi zmdi-google"></i></a></li>
                                <li><a href="#"><i class="zmdi zmdi-facebook"></i></a></li>
                                <li><a href="#"><i class="zmdi zmdi-youtube"></i></a></li>
                                <li><a href="#"><i class="zmdi zmdi-instagram"></i></a></li>
                            </ul>
                            <!-- Follow Box End -->
                        </div>
                    </div>
                    <!-- Social Follow Start -->
                </div>
                <!-- Row End -->
            </div>
            <!-- Container End -->
        </div>
        <!-- Newsletter& Subscribe End -->
        <!-- Footer Start -->
        <footer>
            <!-- Footer Top Start -->
            <div class="footer-top ptb-40 white-bg">
                <div class="container">
                    <div class="row">
                        <!-- Single Footer Start -->
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="single-footer">
                                <div class="footer-logo mb-20">
                                    <a href="#"><img class="img" src="img/logo/logo.png" alt="logo-img"></a>
                                </div>
                                <div class="footer-content">
                                    <ul class="footer-list first-content">
                                        <li><i class="zmdi zmdi-phone-in-talk"></i> +(1234) 567 890</li>
                                        <li><i class="zmdi zmdi-email"></i><a href="#">mailto:info@roadthemes.com</a></li>
                                        <li>
                                            <i class="zmdi zmdi-pin-drop"></i> Address : No 40 Baria Sreet 133/2 <br> NewYork City, NY, United States.
                                        </li>
                                        <li></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Single Footer Start -->
                        <!-- Single Footer Start -->
                        <div class="col-lg-3 col-md-2 col-sm-6">
                            <div class="single-footer">
                                <h3 class="footer-title">my account</h3>
                                <div class="footer-content">
                                    <ul class="footer-list">
                                        <li><a href="#">sitemap</a></li>
                                        <li><a href="#">privacy policy</a></li>
                                        <li><a href="#">your account</a></li>
                                        <li><a href="#">adanced search</a></li>
                                        <li><a href="#">contact us</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Single Footer Start -->
                        <!-- Single Footer Start -->
                        <div class="col-lg-3 col-md-3 col-sm-6">
                            <div class="single-footer">
                                <h3 class="footer-title">Payment & Shipping</h3>
                                <div class="footer-content">
                                    <ul class="footer-list">
                                        <li><a href="#">terms of use</a></li>
                                        <li><a href="#">payment method</a></li>
                                        <li><a href="#">shipping guide</a></li>
                                        <li><a href="#">locations we ship to</a></li>
                                        <li><a href="#">estimated delivery time</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Single Footer Start -->
                        <!-- Single Footer Start -->
                        <div class="col-lg-3 col-md-3 col-sm-6">
                            <div class="single-footer">
                                <h3 class="footer-title">customer service</h3>
                                <div class="footer-content">
                                    <ul class="footer-list">
                                        <li><a href="#">shipping policy</a></li>
                                        <li><a href="#">Compensation First</a></li>
                                        <li><a href="#">my account</a></li>
                                        <li><a href="#">return policy</a></li>
                                        <li><a href="#">contact us</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Single Footer Start -->
                    </div>
                    <!-- Row End -->
                </div>
                <!-- Container End -->
            </div>
            <!-- Footer Top End -->
            <!-- Footer Middle Start -->
            <div class="footer-middle ptb-30">
                <div class="container">
                    <div class="row">
                        <!-- Single Payment Service Start -->
                        <div class="col-sm-4">
                            <div class="single-service">
                                <div class="service-des">
                                    <h3>safe-payments</h3>
                                    <p>Pay with the world’s most popular and secure payment methods.</p>
                                </div>
                            </div>
                        </div>
                        <!-- Single Payment Service End -->
                        <!-- Single Payment Service Start -->
                        <div class="col-sm-4">
                            <div class="single-service serve-two">
                                <div class="service-des">
                                    <h3>Worldwide Delivery</h3>
                                    <p>With sites in 5 languages, we shop to over 100 countries and regions.</p>
                                </div>
                            </div>
                        </div>
                        <!-- Single Payment Service End -->
                        <!-- Single Payment Service Start -->
                        <div class="col-sm-4">
                            <div class="single-service serve-three">
                                <div class="service-des">
                                    <h3>24/7 Help Center</h3>
                                    <p>Round-the-clock assistance for a smooth shopping experience.</p>
                                </div>
                            </div>
                        </div>
                        <!-- Single Payment Service End -->
                    </div>
                    <!-- Row End -->
                </div>
                <!-- Container End -->
            </div>
            <!-- Footer Middle End -->
            <!-- Footer Bottom Start -->
            <div class="footer-bottom ptb-30 white-bg">
                <div class="container">
                    <p class="f-left">Copyright © 2017 <a href="https://devitems.com/">Devitems</a> All Rights Reserved.</p>
                    <a class="f-right img" href="#"><img src="img/footer/1.png" alt="payment-image"></a>
                </div>
                <!-- Container End -->
            </div>
            <!-- Footer Bottom End -->
        </footer>
        <!-- Footer End -->
        <!-- Quick View Content Start -->
        <div class="modal fade" id="myModal" role="dialog">
            <!-- Modal Dialog Box Start -->
            <div class="modal-dialog max-width">
                <!-- Modal content Start -->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <!-- Modal Body Start -->
                    <div class="modal-body">
                        <div class="quiick-view-details">
                            <!-- Product Thumbnail Start -->
                            <div class="main-product-thumbnail">
                                <div class="row">
                                    <!-- Main Thumbnail Image Start -->
                                    <div class="col-sm-5">
                                        <!-- Thumbnail Large Image start -->
                                        <div class="tab-content">
                                            <div id="home" class="tab-pane fade in active">
                                                <a data-fancybox="images" href="img/new-products/3_1.jpg"><img src="img/accessories/8.jpg" alt="product-view"></a>
                                            </div>
                                            <div id="menu1" class="tab-pane fade">
                                                <a data-fancybox="images" href="img/best-seller/6_1.jpg"><img src="img/accessories/7_1.jpg" alt="product-view"></a>
                                            </div>
                                            <div id="menu2" class="tab-pane fade">
                                                <a data-fancybox="images" href="img/best-seller/6_2.jpg"><img src="img/best-seller/6_2.jpg" alt="product-view"></a>
                                            </div>
                                            <div id="menu3" class="tab-pane fade">
                                                <a data-fancybox="images" href="img/best-seller/4_2.jpg"><img src="img/best-seller/4_2.jpg" alt="product-view"></a>
                                            </div>
                                            <div id="menu4" class="tab-pane fade">
                                                <a data-fancybox="images" href="img/best-seller/9_2.jpg"> <img src="img/best-seller/9_2.jpg" alt="product-view"></a>
                                            </div>
                                            <div id="menu5" class="tab-pane fade">
                                                <a data-fancybox="images" href="img/accessories/7_2.jpg"><img src="img/accessories/7_2.jpg" alt="product-view"></a>
                                            </div>
                                        </div>
                                        <!-- Thumbnail Large Image End -->

                                        <!-- Thumbnail Image End -->
                                        <div class="product-thumbnail">
                                            <div class="thumb-menu owl-carousel">
                                                <div class="active">
                                                    <a data-toggle="tab" href="#home"> <img src="img/thumbnail/1.jpg" alt="product-thumbnail"></a>
                                                </div>
                                                <div>
                                                    <a data-toggle="tab" href="#menu1"> <img src="img/thumbnail/2.jpg" alt="product-thumbnail"></a>
                                                </div>
                                                <div>
                                                    <a data-toggle="tab" href="#menu2"> <img src="img/thumbnail/3.jpg" alt="product-thumbnail"></a>
                                                </div>
                                                <div>
                                                    <a data-toggle="tab" href="#menu3"> <img src="img/thumbnail/4.jpg" alt="product-thumbnail"></a>
                                                </div>
                                                <div>
                                                    <a data-toggle="tab" href="#menu4"> <img src="img/thumbnail/5.jpg" alt="product-thumbnail"></a>
                                                </div>
                                                <div>
                                                    <a data-toggle="tab" href="#menu5"> <img src="img/thumbnail/6.jpg" alt="product-thumbnail"></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Thumbnail image end -->
                                    </div>
                                    <!-- Main Thumbnail Image End -->
                                    <!-- Thumbnail Description Start -->
                                    <div class="col-sm-7">
                                        <div class="thubnail-desc fix">
                                            <h2 class="product-header">Fusion Backpack</h2>
                                            <div class="pro-ref">
                                                <p><label>abailability:</label><span class="stock" title="abailability">in stock</span></p>
                                                <p><label class="text-uppercase">sku:</label><span>25-UG05</span></p>
                                            </div>
                                            <div class="rating-summary fix mtb-10">
                                                <div class="rating f-left">
                                                    <i class="zmdi zmdi-star"></i>
                                                    <i class="zmdi zmdi-star"></i>
                                                    <i class="zmdi zmdi-star"></i>
                                                    <i class="zmdi zmdi-star-outline"></i>
                                                    <i class="zmdi zmdi-star-outline"></i>
                                                </div>
                                                <div class="rating-feedback f-left">
                                                    <a href="#">(1 review)</a>
                                                    <a href="#">add to your review</a>
                                                </div>
                                            </div>
                                            <div class="pro-price mb-15">
                                                <span>$19.00</span>
                                            </div>
                                            <div class="box-quantity mb-30">
                                                <form action="#">
                                                    <input class="number" id="number" type="number" value="1">
                                                    <button class="action-prime">add to cart</button>
                                                </form>
                                            </div>
                                            <div class="product-social-link">
                                                <ul class="list-inline">
                                                    <li><a href="#">Add to Wish List</a></li>
                                                    <li><a href="#">Add to compare</a></li>
                                                    <li><a href="#">Email</a></li>
                                                </ul>
                                            </div>
                                            <p class="ptb-30">With the Fusion Backpack strapped on, every trek is an adventure - even a bus ride to work. That's partly because two large zippered compartments store everything you need, while a front zippered pocket and side mesh pouches are perfect for stashing those little extras, in case you change your mind and take the day off.</p>
                                        </div>
                                    </div>
                                    <!-- Thumbnail Description End -->
                                </div>
                                <!-- Row End -->
                                <!-- Product Thumbnail Description Start -->
                                <div class="thumnail-desc">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <ul class="main-thumb-desc pt-30">
                                                <li class="active"><a data-toggle="tab" href="#dtails">Details</a></li>
                                                <li><a data-toggle="tab" href="#reviews">Reviews 1</a></li>
                                            </ul>
                                            <!-- Product Thumbnail Tab Content Start -->
                                            <div class="tab-content thumb-content">
                                                <div id="dtails" class="tab-pane fade in active">
                                                    <p>The Go-Get'r Pushup Grips safely provide the extra range of motion you need for a deep-dip routine targeting core, shoulder, chest and arm strength. Do fewer pushups using more energy, getting better results faster than the standard floor-level technique yield. <br> Durable foam grips.
                                                        <ul>
                                                            <li>Durable nylon construction.</li>
                                                            <li>2 main zippered compartments.</li>
                                                            <li>1 exterior zippered pocket.</li>
                                                            <li>Mesh side pouches.</li>
                                                            <li>Padded, adjustable straps.</li>
                                                            <li>Top carry handle.</li>
                                                            <li>Dimensions: 18" x 10" x 6".</li>
                                                        </ul>
                                                </div>
                                                <div id="reviews" class="tab-pane fade">
                                                    <!-- Reviews Start -->
                                                    <div class="review pb-40">
                                                        <h3 class="review-title mb-35">Customer Reviews</h3>
                                                        <h4 class="review-mini-title">Plazathemes</h4>
                                                        <ul class="review-list">
                                                            <!-- Single Review List Start -->
                                                            <li>
                                                                <span>Quality</span>
                                                                <i class="zmdi zmdi-star"></i>
                                                                <i class="zmdi zmdi-star"></i>
                                                                <i class="zmdi zmdi-star"></i>
                                                                <i class="zmdi zmdi-star-outline"></i>
                                                                <i class="zmdi zmdi-star-outline"></i>
                                                                <label>Plazathemes</label>
                                                            </li>
                                                            <!-- Single Review List End -->
                                                            <!-- Single Review List Start -->
                                                            <li>
                                                                <span>price</span>
                                                                <i class="zmdi zmdi-star"></i>
                                                                <i class="zmdi zmdi-star"></i>
                                                                <i class="zmdi zmdi-star"></i>
                                                                <i class="zmdi zmdi-star-outline"></i>
                                                                <i class="zmdi zmdi-star-outline"></i>
                                                                <label>Review by Plazathemes</label>
                                                            </li>
                                                            <!-- Single Review List End -->
                                                            <!-- Single Review List Start -->
                                                            <li>
                                                                <span>value</span>
                                                                <i class="zmdi zmdi-star"></i>
                                                                <i class="zmdi zmdi-star"></i>
                                                                <i class="zmdi zmdi-star"></i>
                                                                <i class="zmdi zmdi-star-outline"></i>
                                                                <i class="zmdi zmdi-star-outline"></i>
                                                                <label>Posted on 7/20/16</label>
                                                            </li>
                                                            <!-- Single Review List End -->
                                                        </ul>
                                                    </div>
                                                    <!-- Reviews End -->
                                                    <!-- Reviews Start -->
                                                    <div class="review pt-50">
                                                        <h3 class="review-title mb-30">You're reviewing: <br><span>Go-Get'r Pushup Grips</span></h3>
                                                        <p class="mb-10 req">your rating</p>
                                                        <ul class="review-list">
                                                            <!-- Single Review List Start -->
                                                            <li>
                                                                <span>Quality</span>
                                                                <i class="zmdi zmdi-star-outline"></i>
                                                                <i class="zmdi zmdi-star-outline"></i>
                                                                <i class="zmdi zmdi-star-outline"></i>
                                                                <i class="zmdi zmdi-star-outline"></i>
                                                                <i class="zmdi zmdi-star-outline"></i>
                                                            </li>
                                                            <!-- Single Review List End -->
                                                            <!-- Single Review List Start -->
                                                            <li>
                                                                <span>price</span>
                                                                <i class="zmdi zmdi-star-outline"></i>
                                                                <i class="zmdi zmdi-star-outline"></i>
                                                                <i class="zmdi zmdi-star-outline"></i>
                                                                <i class="zmdi zmdi-star-outline"></i>
                                                                <i class="zmdi zmdi-star-outline"></i>
                                                            </li>
                                                            <!-- Single Review List End -->
                                                            <!-- Single Review List Start -->
                                                            <li>
                                                                <span>value</span>
                                                                <i class="zmdi zmdi-star-outline"></i>
                                                                <i class="zmdi zmdi-star-outline"></i>
                                                                <i class="zmdi zmdi-star-outline"></i>
                                                                <i class="zmdi zmdi-star-outline"></i>
                                                                <i class="zmdi zmdi-star-outline"></i>
                                                            </li>
                                                            <!-- Single Review List End -->
                                                        </ul>
                                                    </div>
                                                    <!-- Reviews End -->
                                                    <!-- Reviews Field Start -->
                                                    <div class="riview-field mt-30">
                                                        <form autocomplete="off" action="#">
                                                            <div class="form-group">
                                                                <label class="req" for="n-name">Nickname</label>
                                                                <input type="text" class="form-control" id="n-name" required="required">
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="req" for="summary">Summary</label>
                                                                <input type="text" class="form-control" id="summary" required="required">
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="req" for="comment">Review</label>
                                                                <textarea class="form-control" rows="5" id="comment" required="required"></textarea>
                                                            </div>
                                                            <button type="submit" class="btn-default">Submit Review</button>
                                                        </form>
                                                    </div>
                                                    <!-- Reviews Field Start -->
                                                </div>
                                            </div>
                                            <!-- Product Thumbnail Tab Content End -->
                                        </div>
                                    </div>
                                    <!-- Row End -->
                                </div>
                                <!-- Product Thumbnail Description End -->
                            </div>
                            <!-- Product Thumbnail End -->
                        </div>
                        <!-- Quick View Details End -->
                    </div>
                    <!-- Modal Body End -->
                </div>
                <!-- Modal Content End -->
            </div>
            <!-- Modal Dialog Box End -->
        </div>
        <!-- Quick View Content End -->
    </div>
    <!-- Wrapper End -->
    <!-- jquery 3.12.4 -->
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <!-- mobile menu js  -->
    <script src="js/jquery.meanmenu.min.js"></script>
    <!-- scroll-up js -->
    <script src="js/jquery.scrollUp.js"></script>
    <!-- owl-carousel js -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- countdown js -->
    <script src="js/jquery.countdown.min.js"></script>
    <!-- wow js -->
    <script src="js/wow.min.js"></script>
    <!-- price slider js -->
    <script src="js/jquery-ui.min.js"></script>
    <!-- fancybox js -->
    <script src="js/jquery.fancybox.min.js"></script>
    <!-- nivo slider js -->
    <script src="js/jquery.nivo.slider.js"></script>
    <!-- bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- plugins -->
    <script src="js/plugins.js"></script>
    <!-- main js -->
    <script src="js/main.js"></script>
</body>


<!-- Mirrored from d29u17ylf1ylz9.cloudfront.net/gatcomart/gatcomart/product-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Dec 2018 18:57:02 GMT -->
</html>
