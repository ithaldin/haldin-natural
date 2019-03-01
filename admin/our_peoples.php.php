<?php
    session_start();
    error_reporting(0);
    include "../include/koneksi.php";
    include "../include/current.php";

    date_default_timezone_set("Asia/Bangkok");
    if ($_POST[Update])
    {
        $date=date("Y-m-d");
        $time=date("H:i:s");
        $qupdate = "    UPDATE `t_about_us` SET 
                        title1 = '".$_POST['title1']."',
                        story1 = '".$_POST['story1']."',
                        title2 = '".$_POST['title2']."',
                        story2 = '".$_POST['story2']."'
                        WHERE `t_about_us`.`id` = 2";
        $rupdate = mysqli_query ($konek, $qupdate);

        $_POST['Update'] = '';   
        $Done = '';

        echo "<script type='text/javascript'> alert('Success!') window.location='our_peoples.php';</script>";
    }

    // Apabila user belum login
    if (empty($_SESSION['id']) AND empty($_SESSION['password']))
    {
        header('location:../cpanel/index.php');  
    }
    // Apabila user sudah login dengan benar, maka terbentuklah session
    else
    {
?>

    <!doctype html>
    <!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
    <!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
    <!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
    <!--[if gt IE 8]><!-->
    <html class="no-js" lang="en">
    <!--<![endif]-->

        <head>
            <?php include "title_and_css.php"?>
        </head>

        <body>

        	<?php include "left_menu.php"?>

            <div id="right-panel" class="right-panel">
            	
            	<?php include "top_menu.php"?>

                 <?php
                    $qrecord = "SELECT * FROM `t_about_us` WHERE id = '2'";
                    $rrecord = mysqli_query($konek, $qrecord);
                    $rwrecord = mysqli_fetch_array($rrecord);
                    {
                ?> 

                <div class="content mt-3">
                     <div class="animated fadeIn">
                        <div class="row">

                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <strong class="card-title">Update About Us Page</strong>
                                    </div>


                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center"><?php echo $rwrecord['title1'];?></h3>
                                        </div>
        <!---------------------------- ABOUT'S SETUP AREA ------------------------------->

                                        <form name="action" method="post" action="">

                                            <div class="form-group">
                                            <div class="row form-group">
                                                    <div class="col col-md-3"><label for="text-input" class=" form-control-label"><strong>Title 1</strong></label></div>
                                                    <div class="col-12 col-md-9">
                                                         <textarea class="form-control" id="textarea-input" rows="" name="title1"><?php echo $rwrecord['title1'];?></textarea>
                                                    </div>
                                                </div>


           <!--------------------------------------- HAlDIN'S SETUP AREA ---------------------------------->

                                        <form name="action" method="post" action="">
                                            <div class="form-group">
                                                <div class="row form-group">
                                                    <div class="col col-md-3"><label for="text-input" class=" form-control-label"><strong>Title 2</strong></label></div>
                                                    <div class="col-12 col-md-9">
                                                         <textarea class="form-control" id="textarea-input" rows="" name="title2"><?php echo $rwrecord['title2'];?></textarea>
                                                    </div>
                                                </div>

                                            
                                                <div class="custom-tab">

                                                    <nav>
                                                        <div class="nav nav-pills nav-justified mb-3" id="pills-tab" role="tablist">
                                                            <a class="nav-item nav-link active" id="custom-nav-home-tab" data-toggle="tab" href="#point1" role="tab" aria-controls="point1" aria-selected="true">
                                                                Top Content
                                                            </a>

                                                            <a class="nav-item nav-link" id="custom-nav-profile-tab" data-toggle="tab" href="#point2" role="tab" aria-controls="point2" aria-selected="false">
                                                                Bottom Content
                                                            </a>
                                                        </div>
                                                    </nav>

                                                    <div class="tab-content pl-3 pt-2" id="nav-tabContent">
                                                        <div class="tab-pane fade show active" id="point1" role="tabpanel" aria-labelledby="custom-nav-home-tab">
                                                            <div class="form-group">
                                                                <div class="row form-group">
                                                                    <div class="col-12 col-md-12">

                                                                        <textarea name="story1" id="content_area" rows="5" class="form-control"><?php echo $rwrecord['story1'];?></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="tab-pane fade" id="point2" role="tabpanel" aria-labelledby="custom-nav-profile-tab">
                                                            <div class="form-group">
                                                                <div class="row form-group">
                                                                    <div class="col-12 col-md-12">
                                                                        <textarea name="story2" id="content_area" rows="5" class="form-control"><?php echo $rwrecord['story2'];?></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        
                                                    </div>

                                                </div>
                                               
                                                </div>
                                            </div>

                                            <input name='Update' value='Update' type="submit" class="btn btn-lg btn-info btn-block">
                                        
                                        </form>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div> <!-- .content -->

                <?php } ?>

            </div><!-- /#right-panel -->

            <!-- Right Panel -->

            <?php include "java_script.php"?>

            <!-- TiniMCE -->
            <script type="text/javascript" src="assets/js/tinymce.min.js"></script>
    <script type="text/javascript">
    tinymce.init({
            selector: "textarea",
            plugins: [
                    "advlist autolink autosave link image lists charmap print preview hr anchor pagebreak spellchecker",
                    "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                    "table contextmenu directionality emoticons template textcolor paste textcolor filemanager"
            ],
    
            toolbar1: "newdocument | bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | styleselect formatselect fontselect fontsizeselect",
            toolbar2: "cut copy paste | searchreplace | bullist numlist | outdent indent blockquote | undo redo | link unlink anchor image media code | inserttime preview | forecolor backcolor",
            toolbar3: "table | hr removeformat | subscript superscript | charmap emoticons | print fullscreen | ltr rtl | spellchecker | visualchars visualblocks nonbreaking template pagebreak restoredraft",
    
            menubar: false,
            toolbar_items_size: 'small',
            image_advtab: true,
            style_formats: [
                    {title: 'Bold text', inline: 'b'},
                    {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
                    {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
                    {title: 'Example 1', inline: 'span', classes: 'example1'},
                    {title: 'Example 2', inline: 'span', classes: 'example2'},
                    {title: 'Table styles'},
                    {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
            ],
    
            templates: [
                    {title: 'Test template 1', content: 'Test 1'},
                    {title: 'Test template 2', content: 'Test 2'}
            ]
    });
    </script>

        </body>

    </html>

<?php
}
?>
