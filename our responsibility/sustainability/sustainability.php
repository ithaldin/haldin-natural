<?php
    $qrecord = "SELECT * FROM `t_sustainability` WHERE id = '1'";
    $rrecord = mysqli_query($konek, $qrecord);
    $rwrecord = mysqli_fetch_array($rrecord);
    {
?>

<section class="choose_server_area bg-white">
    <div class="container">
        <div class="row choose_server_inner">
            <div class="col-md-7">
                <div class="server_left_text">
                    <div class="server_title">
                        <h2 class="text_responsibility"><?php echo $rwrecord['title'];?></h2>
                        <p>
                          <?php echo $rwrecord['content'];?>
                        </p>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="media">
                                <div class="media-left">
                                    <img src="img/icon/approach.png" alt="">
                                </div>
                                <div class="media-body">
                                    <h4>Our Approach to Sustainability</h4>
                                    <p class="text-justify"><?php echo $rwrecord['sustainability_isi'];?></p>
                                </div>
                            </div>
                            
                        </div>
                       
                    </div>
                </div>
            </div>

            <div class="col-md-5">
                <div class="server_right_img">
                    <img src="img/our responsibility/sustainbility - 2.png" alt="">
                </div>
            </div>
        </div>
    </div>
</section>


<!----------------------------------------------------- CERTIFICATION AREA ------------------------------------------------------------>
    <!--<section  class="service-area section-padding bg-white">
        <div class="container">
            <div class="row">
                <div class="">
                    <div class="text-center wow fadeIn">
                        <h2 class="title">Our Certificate</h2></br>

                        <div class="row service_s_inner mt-50">
                            <div class="col-md-3 col-sm-4 col-xs-5">
                                <div class="ss_item">
                                    <img src="img/certification logo/fssc22000.png" alt="">
                                    <h4>FSSC 22000 ver 4.1</h4>
                                   
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-4 col-xs-5">
                                <div class="ss_item">
                                    <img src="img/certification logo/bpom.png" alt="">
                                    <h4>Hygiene Sanitation BPOM</h4>
                                  
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-4 col-xs-5">
                                <div class="ss_item">
                                    <img src="img/certification logo/eu_organic.png" alt="">
                                    <h4>Organic Certification (EU)</h4>

                                </div>
                            </div>
                            <div class="col-md-3 col-sm-4 col-xs-5">
                                <div class="ss_item">
                                    <img src="img/certification logo/usda_organic.png" alt="">
                                    <h4>Organic Certification (USDA)</h4>
                                    
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-4 col-xs-5">
                                <div class="ss_item">
                                    <img src="img/certification logo/has23000.png" alt="">
                                    <h4>HAS 23000 </h4>
                                    
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-4 col-xs-5">
                                <div class="ss_item">
                                    <img src="img/certification logo/iso9001_2015.png" alt="">
                                    <h4>ISO 9001 : 2015</h4>
                                    
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-4 col-xs-5">
                                <div class="ss_item">
                                    <img src="img/certification logo/iso14001.png" alt="">
                                    <h4>ISO 14001 : 2015</h4>
 
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-4 col-xs-5">
                                <div class="ss_item">
                                     <img src="img/certification logo/sedex.png" alt="">
                                    <h4>Sedex Membership</h4>
                                    
                                </div>
                            </div>
                             <div class="col-md-3 col-sm-4 col-xs-5">
                                <div class="ss_item">
                                     <img src="img/certification logo/fda.png" alt="">
                                    <h4>US-FDA Registration</h4>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>-->
<?php
}
?>