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
        $nama_file   = $_FILES['image']['name'];
        $lokasi_file = $_FILES['image']['tmp_name'];
        move_uploaded_file($lokasi_file, "./images/$nama_file");
        $qupdate = "    UPDATE `t_our_product` SET 
                        nama_produk = '".$_POST['nama']."', gambar='$nama_file' WHERE `t_our_product`.`id` = 1";
        $rupdate = mysqli_query ($konek, $qupdate);

        $_POST['Update'] = '';   
        $Done = '';

        echo "<script type='text/javascript'>
             alert('Success!')
             window.location='our_product.php';
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
                    $qrecord = "SELECT * FROM `t_our_product`";
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
                                            <h3 class="text-center">Our Product</h3>
                                        </div>

                                         <form name="action" method="post" action="">
                                             <div class="form-group">
                                                <div class="row form-group">
                                                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Product Name</label></div>
                                                    <div class="col-12 col-md-9">
                                                        <input name="nama" type="text" class="form-control" value="<?php echo $rwrecord['nama'];?>">
                                                    </div>
                                                </div>

                                            <div class="form-group">
                                                <label>Gambar</label>
                                                <input class="form-control" type="file" name="image">
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

            <script src="vendors/jquery/dist/jquery.min.js"></script>
            <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
            <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
            <script src="assets/js/main.js"></script>


            <script src="vendors/chart.js/dist/Chart.bundle.min.js"></script>
            <script src="assets/js/dashboard.js"></script>
            <script src="assets/js/widgets.js"></script>
            <script src="vendors/jqvmap/dist/jquery.vmap.min.js"></script>
            <script src="vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
            <script src="vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
            <script>
                (function($) {
                    "use strict";

                    jQuery('#vmap').vectorMap({
                        map: 'world_en',
                        backgroundColor: null,
                        color: '#ffffff',
                        hoverOpacity: 0.7,
                        selectedColor: '#1de9b6',
                        enableZoom: true,
                        showTooltip: true,
                        values: sample_data,
                        scaleColors: ['#1de9b6', '#03a9f5'],
                        normalizeFunction: 'polynomial'
                    });
                })(jQuery);
            </script>

        </body>

    </html>

<?php
}
?>
