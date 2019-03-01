<?php
    $qrecord = "SELECT * FROM `t_technology` WHERE id = '1'";
    $rrecord = mysqli_query($konek, $qrecord);
    $rwrecord = mysqli_fetch_array($rrecord);
    {
?>
<!----------------------------------------------------- PROCESS CAPABILITY AREA ------------------------------------------------------->
<section  class="service-area section-padding bg-white" id="technology">
    <div class="container">
        <div class="row">
            

            <div class="main_title text-center ">
                <h2 class="title"><?php echo $rwrecord['title'];?></h2>
                <p class="text-center">
                    <i>
                    <?php echo $rwrecord['content'];?>
                    </i>
                </p>
            </div> 
<!----------------------------------------------------- PROCESS CAPABILITY CATEGORY 1 ------------------------------------------------------->
                <div class="col-md-7 mt-50">
                    <div class="left_question_inner">
                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                     <?php
                                        $qrecord = "SELECT * FROM `t_technology` WHERE id = '1'";
                                        $rrecord = mysqli_query($konek, $qrecord);
                                        $rwrecorda = mysqli_fetch_array($rrecord);
                                        {
                                        ?>

                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingOne">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        <?php echo $rwrecorda['header'];?>
                                        <i class="fa fa-minus" aria-hidden="true"></i>
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                    <div class="panel-body">
                                      <?php echo $rwrecorda['isi'];?>                                       
                                    </div>
                                </div>
                            </div>

<!----------------------------------------------------- PROCESS CAPABILITY CATEGORY 2 ------------------------------------------------------->

                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingTwo">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            <?php
                                        $qrecord = "SELECT * FROM `t_technology` WHERE id = '2'";
                                        $rrecord = mysqli_query($konek, $qrecord);
                                        $rwrecordb = mysqli_fetch_array($rrecord);
                                        {
                                        ?>
                                        <?php echo $rwrecordb['header'];?>
                                        <i class="fa fa-minus" aria-hidden="true"></i>
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                    <div class="panel-body">
                                        <?php echo $rwrecordb['isi'];?>
                                    </div>
                                </div>
                            </div>

<!----------------------------------------------------- PROCESS CAPABILITY CATEGORY 3 ------------------------------------------------------->

                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingThree">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            <?php
                                        $qrecord = "SELECT * FROM `t_technology` WHERE id = '3'";
                                        $rrecord = mysqli_query($konek, $qrecord);
                                        $rwrecordc = mysqli_fetch_array($rrecord);
                                        {
                                        ?>
                                        <?php echo $rwrecordc['header'];?>
                                        <i class="fa fa-minus" aria-hidden="true"></i>
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                    <div class="panel-body">
                                      <?php echo $rwrecordc['isi'];?>
                                    </div>
                                </div>
                            </div>

<!----------------------------------------------------- PROCESS CAPABILITY CATEGORY 4 ------------------------------------------------------->

                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingfour">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                                            <?php
                                        $qrecord = "SELECT * FROM `t_technology` WHERE id = '4'";
                                        $rrecord = mysqli_query($konek, $qrecord);
                                        $rwrecordd = mysqli_fetch_array($rrecord);
                                        {
                                        ?>
                                        <?php echo $rwrecordd['header'];?>
                                        <i class="fa fa-minus" aria-hidden="true"></i>
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapsefour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfour">
                                    <div class="panel-body">
                                        <?php echo $rwrecordd['isi'];?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 mt-50">
                    <div class="right_question_img">
                        <img src="img/technology/teknologi spray drying.png" alt="">
                    </div>
                </div>
            </div>   
        </div>
    </div>
</section>

<?php
}
}
}
}
}
?>
