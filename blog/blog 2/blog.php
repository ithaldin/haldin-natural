<!-- Blog -->
    <div id="blog" class="section md-padding">

        <!-- Container -->
        <div class="container">

            <!-- Row -->
            <div class="row">

                <!-- Main -->
                <main id="main" class="col-md-9">
                    <div class="blog">
                        <div class="blog-img">
                            <div id="captioned-gallery">
                                <figure class="slider">
                                    <figure>
                                        <img class="img-responsive" src="./img/blog/blog coconut.png" alt="">
                                        <figcaption>Haldin's Coconut!</figcaption>
                                    </figure>
                                </figure>
                            </div>
                        </div>

                        <div class="blog-content">
                           
                            <ul class="blog-meta">
                                <li><i class="fa fa-user"></i>Marketing Haldin</li>
                                <li><i class="fa fa-clock-o"></i>20 Sept</li>
                            </ul>
                           
                            <p>
                               Processed at our modern facility from start to finish…
                            </p></br>

                             <p>
                               Containing lots of nutrients, our products offer a first-rate solution for food and beverage industry. We use no preservatives and no artificial ingredients.
                            </p></br>

                             <p>
                                It’s up to 2 years of shelf life and organic certified..
                            </p></br>

                            <p>
                                For sample kit, please contact our sales team: 
                            </p></br>

                            <p>
                                Call us at +6221 8998 1788 or email us at <a href="#" onclick="mailto('sales@haldin-natural.com', 'I want your Coconut product for me');event.preventDefault()"> sales@haldin-natural.com</a> .
                            </p>
                            <!-- blog tags -->
                            <div class="blog-tags">
                                <h5>Tags :</h5>
                                <a href="#"><i class="fa fa-tag"></i>Coconut</a>
                                <a href="#"><i class="fa fa-tag"></i>Haldin</a>
                                <a href="#"><i class="fa fa-tag"></i>Sales</a>
                                <a href="#"><i class="fa fa-tag"></i>Marketing</a>
                                <a href="#"><i class="fa fa-tag"></i>Ingredients</a>
                                <a href="#"><i class="fa fa-tag"></i>Product</a>
                            </div>
                            <!-- blog tags -->

                        </div>
                    </div>
                </main>
                <!-- /Main -->


                <!-- Aside -->
                <aside id="aside" class="col-md-3">

                     <?php include "./blog/blog_category.php"?>


                    <?php include "./blog/sidebar_blog.php"?>

                  
                </aside>
                <!-- /Aside -->

            </div>
            <!-- /Row -->

        </div>
        <!-- /Container -->

    </div>
    <!-- /Blog -->

    <script>
// Open mailto links in a new tab
function mailto(email, subject) {
    var url;
    url = 'mailto:' + email;
    url += '?subject=' + subject;
    window.open(url);
}
</script>