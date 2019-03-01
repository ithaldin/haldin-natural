<!-- Blog -->
    <div id="blog" class="section blog-padding">

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
                                        <img class="img-responsive" src="./img/blog/blog cucumber.png" alt="">
                                        <figcaption>Cucumber Fizz Delight</figcaption>
                                    </figure>
                                </figure>
                            </div>
                        </div>

                        <div class="blog-content">
                            
                            <ul class="blog-meta">
                                <li><i class="fa fa-user"></i>Marketing Haldin</li>
                                <li><i class="fa fa-clock-o"></i>10 Sept</li>
                            </ul>
                           
                            <p>
                               Refresh yourself with Haldin’s new ALL-NATURAL sparkling cucumber drink: CUCUMBER FIZZ DELIGHT
                            </p></br>

                             <p>
                               Our latest innovative product application made with Haldin’s CUCUMBER POWDER EXTRACT, Haldin’s CUCUMBER ESSENCE, & gently sparkled spring water. It will not only replenish your body & soul, but will also help you to stay hydrated each day in fun & exciting way
                            </p></br>

                             <p>
                                Collaborate with Haldin & experience a satisfying package of freshness in our new CUCUMBER FIZZ DELIGHT!
                            </p></br>

                            <p>
                                For more information about the products; please do not hesitate to contact us at 
                               <a href="#" onclick="mailto('sales@haldin-natural.com', 'I want your Fruit product for me');event.preventDefault()"> sales@haldin-natural.com</a> or directly call our sales person at +62 21 89981788.
                            </p>
                            <!-- blog tags -->
                            <div class="blog-tags">
                                <h5>Tags :</h5>
                                <a href="#"><i class="fa fa-tag"></i>Cucumber</a>
                                <a href="#"><i class="fa fa-tag"></i>Fizz</a>
                                <a href="#"><i class="fa fa-tag"></i>Delight</a>
                                 <a href="#"><i class="fa fa-tag"></i>Fruit</a>
                                  <a href="#"><i class="fa fa-tag"></i>Vegetable</a>
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