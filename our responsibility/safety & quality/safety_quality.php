<?php
    $qrecord = "SELECT * FROM `t_safety_quality` WHERE id = '1'";
    $rrecord = mysqli_query($konek, $qrecord);
    $rwrecord = mysqli_fetch_array($rrecord);
    {
?>

<section class="choose_server_area bg-white" id="hosting">
    <div class="container">
        <div class="row choose_server_inner">
            <div class="col-md-7">
                <div class="server_left_text">
                    <div class="server_title">
                        <h2 class="text_responsibility"><?php echo $rwrecord['title1'];?></h2>
                        <p>
                            <?php echo $rwrecord['content1'];?>
                        </p>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="media">
                                <div class="media-left">
                                    <img src="img/icon/certified.png" alt="">
                                </div>
                                <div class="media-body">
                                    <h4>Certified</h4>
                                    <p class="text-justify">
                                        <?php echo $rwrecord['certified_isi'];?>
                                    </p>
                                </div>
                            </div>
                            <div class="media">
                                <div class="media-left">
                                    <img src="img/icon/international_standards.png" alt="">
                                </div>
                                <div class="media-body">
                                    <h4>International Standards</h4>
                                    <p class="text-justify">
                                        <?php echo $rwrecord['standards_isi'];?>
                                    </p>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                </div>
            </div>

            <div class="col-md-5">
                <div class="server_right_img">
                    <img src="img/our responsibility/safety-2.png" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="hosting_service_area bg-white">
    <div class="container">
        <div class="row hosting_service_inner">
            <div class="col-md-6">
                <div class="h_service_left">
                    <img src="img/our responsibility/quality - 2.png" alt="">
                </div>
            </div>
            <div class="col-md-6 mt-30">
                <div class="h_service_right">
                    <div class="server_title">
                        <h2><?php echo $rwrecord['title2'];?></h2>
                        <p><?php echo $rwrecord['content2'];?></p>
                    </div>
                    <div class="h_service_list">
                        <div class="media">
                            <div class="media-left">
                                <img src="img/icon/qc.png" alt="">
                            </div>
                            <div class="media-body">
                                <p><?php echo $rwrecord['quality_isi']?>;</p>
                            </div>
                        </div>
                        <div class="media">
                            <div class="media-left">
                                <img src="img/icon/good.png" alt="">
                            </div>
                            <div class="media-body">
                                <p>
                                     <?php echo $rwrecord['source_isi'];?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include "./about us/aboutus_certification.php"?>


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
