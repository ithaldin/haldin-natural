<?php
    $qrecord = "SELECT * FROM `t_about_us` WHERE id = '1'";
    $rrecord = mysqli_query($konek, $qrecord);
    $rwrecord = mysqli_fetch_array($rrecord);
    {
?> 

<section class="section-gap info-area" id="about">
	<div class="container">			

		<div class="col-md-8 col-lg-8 col-md-offset-2 col-lg-offset-2 col-sm-12 col-xs-12 mb-100">
           <div class="text-center wow fadeIn">
               <h2 class="title"><?php echo $rwrecord['title1'];?></h2>
                <p>
                	<i>
               			<?php echo $rwrecord['story1'];?>
					</i>
				</p>
            </div>
        </div>
         
		<div class="single-info row mt-40">
			<div class="col-lg-6 col-md-12 mt-120 text-center no-padding info-left">
				<div class="info-thumb">
					<img src="img/about_us_image.jpg" border="0"/>
				</div>
			</div>
			
			<div class="col-lg-6 col-md-12 no-padding info-right">
				<div class="text-center info-content">
					<h2 class="title another_font"><?php echo $rwrecord['title2'];?></h2>
					<p class="text-justify mt-50">
						<?php echo $rwrecord['story2'];?>
					</p>

					
					</br>
				</div>
			</div>
		</div>
	</div>
</section>

<?php
}
?>