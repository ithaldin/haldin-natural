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

                <div class="col-md-7 mt-50">
                    <div class="left_question_inner">
                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingOne">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        <?php echo $rwrecord['header'];
                                        "SELECT * FROM `t_technology` WHERE id = '2'"?>
                                        <i class="fa fa-minus" aria-hidden="true"></i>
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                    <div class="panel-body">
                                        We are fully equipped with the technology, expertise, and experience to employ the right production technique to produce the right product :

                                        <div class="feature">
                                            <i class="fa fa-check"></i>
                                            <p>Milling</p>
                                        </div>

                                         <div class="feature">
                                            <i class="fa fa-check"></i>
                                            <p>Distilling</p>
                                        </div>

                                         <div class="feature">
                                            <i class="fa fa-check"></i>
                                            <p>Fractionating</p>
                                        </div>

                                         <div class="feature">
                                            <i class="fa fa-check"></i>
                                            <p>Extracting</p>
                                        </div>

                                         <div class="feature">
                                            <i class="fa fa-check"></i>
                                            <p>Spray drying</p>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingTwo">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        2. Pilot Plant
                                        <i class="fa fa-minus" aria-hidden="true"></i>
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                    <div class="panel-body">
                                        The Pilot Plants provide a way to simulate a continuous countercurrent extraction process and pre-determine process parameters such as temperature, solvent requirement, yields, production time and costs.</br></br>

                                        Knowing the product quality and evaporation behavior or temperature sensitivity of an           extract is important for a successful extraction.
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingThree">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        3. Pilot Extraction Plant
                                        <i class="fa fa-minus" aria-hidden="true"></i>
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                    <div class="panel-body">
                                        Haldin pilot extraction and evaporation plants provide us the possibility to determine the      relevant process parameters which are necessary for the production plant beforehand.
                                        Haldin extraction plants fully meet these demands due to innovative exchange of views           with customers and extensive experiences in practice. The extraction plants are used for        the recovery of natural extracts; oleoresins, colorings, aromas, extractive-basic materials in general from:

                                          <div class="feature">
                                            <i class="fa fa-check"></i>
                                            <p>Leaves</p>
                                        </div>

                                         <div class="feature">
                                            <i class="fa fa-check"></i>
                                            <p>Roots</p>
                                        </div>

                                         <div class="feature">
                                            <i class="fa fa-check"></i>
                                            <p>Seeds</p>
                                        </div>

                                         <div class="feature">
                                            <i class="fa fa-check"></i>
                                            <p>Barks</p>
                                        </div>

                                         <div class="feature">
                                            <i class="fa fa-check"></i>
                                            <p>Spices</p>
                                        </div>

                                        <div class="feature">
                                            <i class="fa fa-check"></i>
                                            <p>Fruits</p>
                                        </div>

                                        <div class="feature">
                                            <i class="fa fa-check"></i>
                                            <p>Others</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingfour">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                                        4. Pilot Evaporation Plant
                                        <i class="fa fa-minus" aria-hidden="true"></i>
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapsefour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfour">
                                    <div class="panel-body">
                                        Evaporation unit, condenser, vacuum pump.</br></br>
                                        Advantages from pilot extraction plants:</br>
                                        Determination of all process conditions which are necessary for the design and of a production plant, as for example: yields, solvent requirement, temperatures, etc.

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
?>
