<?php
    $qrecord = "SELECT * FROM `t_product` WHERE id = '3'";
    $rrecord = mysqli_query($konek, $qrecord);
    $rwrecord = mysqli_fetch_array($rrecord);
    {
?> 

<!----------------------------------------------------- FUNCTIONAL INGREDIENTS AREA ------------------------------------------------------->
    <section  class="service-area section-padding bg-white">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-8 col-md-offset-2 col-lg-offset-2 col-sm-12 col-xs-12">
                    <div class="text-center wow fadeIn">
                        <h2 class="title"><?php echo $rwrecord['product'];?></h2>

                        <p style="font-style: italic;" class="text-center">
                             <?php echo $rwrecord['story'];?>
                        </p></br>

                        <p class="text-justify">
                           <?php echo $rwrecord['content1'];?>
                        </p></br>

                         <p class="text-justify">
                           <?php echo $rwrecord['content2'];?>
                        </p>

                        <div class="why_choose_us col-md-12 mb-30">
                            <div id="about-slider3" class="owl-carousel owl-theme">
                                <img class="img-responsive" src="./img/product/menu product/functional - 1.png" alt="">
                                <img class="img-responsive" src="./img/product/menu product/functional - 2.png" alt="">
                                <img class="img-responsive" src="./img/product/menu product/functional - 3.png" alt="">
                            </div>
                        </div>

                        <p class="text-justify">
                          <?php echo $rwrecord['content3'];?>
                        </p></br>
                            
                        <p class="text-justify">
                           <?php echo $rwrecord['content4'];?>
                        </p></br>
                        
                        <p class="text-justify">
                          <?php echo $rwrecord['content5'];?>
                        </p>

                    </div>
                </div>   
            </div>
        </div>
    </section>

<?php
}
?>