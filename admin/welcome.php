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
        $qupdate = "UPDATE `t_main_page` SET welcome_headline = '".$_POST['welcome_headline']."', welcome_content = '".$_POST['welcome_content']."'";
        $rupdate = mysqli_query ($konek, $qupdate);

        $_POST['Update'] = '';   
        $Done = '';

        echo "<script type='text/javascript'>
             alert('Success!')
             window.location='welcome.php';
             </script>";
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
            <?php include "./title_and_css.php"?>
        </head>

        <body>

        	<?php include "./left_menu.php"?>

            <div id="right-panel" class="right-panel">
            	
            	<?php include "./top_menu.php"?>

                <?php
                    $qrecord = "SELECT * FROM `t_main_page`";
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
                                        <strong class="card-title">Update Home Content</strong>
                                    </div>

                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center">Welcome Screen</h3>
                                        </div>
                                         <form name="action" method="post" action="">

                                            <div class="form-group">
                                                <label class="control-label mb-1">Title</label>
                                                <input name="welcome_headline" type="text" class="form-control" value="<?php echo $rwrecord['welcome_headline'];?>">
                                            </div>

                                            <div class="form-group">
                                                <label  class="control-label mb-1">Content</label>
                                                <textarea name="welcome_content" id="textarea-input" type="text" rows="7" class="form-control" aria-required="true" aria-invalid="false"><?php echo $rwrecord['welcome_content'];?></textarea>
                                            </div>

                                            <input name='Update' value='Update' type="submit" class="btn btn-lg btn-info btn-block">
                                        </form>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div> <!-- .content -->

                <?php
                }
                ?>

            </div><!-- /#right-panel -->

            <!-- Right Panel -->

            <?php include "java_script.php"?>

        </body>

    </html>

<?php
}
?>
