<?php
    $qrecord = "SELECT * FROM `t_about_us` WHERE id = '2'";
    $rrecord = mysqli_query($konek, $qrecord);
    $rwrecord = mysqli_fetch_array($rrecord);
    {
?> 

<section class="section md-padding info-area" id="about">
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
				<div id="about-slider3" class="info-thumb owl-carousel owl-theme">
					<img class="rounded-circle mx-auto d-block" <?php echo 'src="../img/why_choose_us/'.$rwrecord['file_name'].'"';?> height="158" width="167" alt="Card image cap">
					<img class="rounded-circle mx-auto d-block" <?php echo 'src="../img/why_choose_us/'.$rwrecord['file_name2'].'"';?> height="158" width="167" alt="Card image cap">
					<img class="rounded-circle mx-auto d-block" <?php echo 'src="../img/why_choose_us/'.$rwrecord['file_name3'].'"';?> height="158" width="167" alt="Card image cap">
				</div>
			</div>

			<div class="col-lg-6 col-md-12 no-padding info-right">
				<div class="text-center info-content">
					<h2 class="title another_font"><?php echo $rwrecord['title2'];?></h2>
					<p class="text-justify">
						<?php echo $rwrecord['story2'];?>
						<br>
						<br>
						<br>
						
						Keep Updated : LinkedIn
							<a href="https://id.linkedin.com/company/pt-haldin-pacifik-semesta" target="_blank">
								<img src="./img/icon/linkedin.png" class="icon-responsive">
							</a>
					</p></br>

					<p>
						
					</p>

				</div>	
			</div>
		</div>
	</div>
</section>
<!-- End about Area -->

<script>
// Open mailto links in a new tab
function mailto(email, subject) {
    var url;
    url = 'mailto:' + email;
    url += '?subject=' + subject;
    window.open(url);
}
</script>
<?php
}
?>