<?php
	session_start();

	include "include/koneksi.php";

?>

<!DOCTYPE html>
<html lang="en">
    <head>
		<?php include "./main page/website title/title.php"?>
		<?php include "./vendors/component.php"?>
		
	</head>
	
	<body>
		<header>
			<?php include "./main menu/main_menu_blog.php"?>
			<?php include "./blog/header_product_blog.php"?>
		</header>
		
		<!-- Blog -->
	    <div id="blog" class="section md-padding">

	        <!-- Container -->
	        <div class="container">

	            <!-- Row -->
	            <div class="row">

	                <!-- Main -->
	                <main id="main" class="col-md-9">
	                	<?php
							$qrecord = "SELECT * FROM `t_blog_record`";
							$rrecord = mysqli_query($konek, $qrecord);
							$rwrecord = mysqli_fetch_array($rrecord);
							{
						?> 
	                    <div class="blog">
	                        <div class="blog-img">
	                            <h2><?php echo $rwrecord['judul_blog'];?></h2>

	                            <ul class="blog-meta">
	                                <li><i class="fa fa-user"></i><?php echo $rwrecord['username'];?></li>
	                                <li><i class="fa fa-clock-o"></i><?php echo $rwrecord['date_created'];?></li>
	                            </ul>
	                            <div id="captioned-gallery">
	                                <figure class="slider">
	                                    <figure>
	                                         <img class="img-responsive" src="./img/product/menu product/blog - coffee - 2.png" alt="">
	                                        <figcaption><?php echo $rwrecord['headline'];?></figcaption>
	                                    </figure>
	                                </figure>
	                            </div>
	                           
	                        </div>

	                        <div class="blog-content">
	                            <p>
	                                Produced from Indonesian origin coffee Robusta and Arabica beans, Haldin’s Coffee Extract is made for one sole purpose; delivering the sensory characteristics of a freshly brewed coffee.
	                            </p></br>

	                            <h5>Coffee Extract</h5>
	                             <p>
	                                Concentrated liquid extract, containing full characteristics of coffee, from top note to body note flavor.
	                            </p></br>


	                            <h5>Technology</h5>
	                             <p>
	                                Our technology allows the process to capture the entire aroma profile of roasted coffee beans, whilst extracting the body profile to its optimal yields, making it a distinctive coffee extract when compared to others.
	                            </p></br>


	                            <h5>Coffee Liquid Extract Application :</h5>
	                            <div class="feature">
	                                <i class="fa fa-hand-o-right"></i>
	                                <p>Beverages: Syrup, Ready-to-drink beverage, Instant powder drink, Flavored water, Effervescent, Fruits beverage, Carbonated drink</p>
	                            </div>
	                            <div class="feature">
	                                <i class="fa fa-hand-o-right"></i>
	                                <p>Sweet goods: Biscuits, Cereal, Cracker, Snacks, Bakery, Instant dessert</p>
	                            </div>
	                            <div class="feature">
	                                <i class="fa fa-hand-o-right"></i>
	                                <p>Dairy: Ice cream, Milk, Yoghurt</p>
	                            </div>
	                            <div class="feature">
	                                <i class="fa fa-hand-o-right"></i>
	                                <p>Confectionary: Hard candy, Chewing gum, Chocolate, Soft candy</p>
	                            </div>

	                            <!-- blog tags -->
	                            <div class="blog-tags">
	                                <h5>Tags :</h5>
	                                <a href="#"><i class="fa fa-tag"></i>Coffe</a>
	                                <a href="#"><i class="fa fa-tag"></i>Liquid</a>
	                                <a href="#"><i class="fa fa-tag"></i>Extract</a>
	                                <a href="#"><i class="fa fa-tag"></i>Marketing</a>
	                                <a href="#"><i class="fa fa-tag"></i>Technology</a>
	                                <a href="#"><i class="fa fa-tag"></i>Product</a>
	                            </div>
	                            <!-- blog tags -->
								

	                        </div>
	                    </div>

	                    <?php
	                	}
	                	?>
	                </main>
	                <!-- /Main -->


	                <!-- Aside -->
	                <aside id="aside" class="col-md-3">

	                   <?php include "./blog/blog_category.php"?>

	                   <?php include "./blog/sidebar_blog.php"?>

	                  
	                </aside>
	                <!-- /Aside -->

	            </div>
	            <!-- /Row -->

	        </div>
	        <!-- /Container -->

	    </div>
	    <!-- /Blog -->
		<?php include "./main page/footer.php"?>
		<?php include "./main page/features.php"?>
		<?php include "./vendors/java_script.php"?>
	</body>
</html>

<?php

?>