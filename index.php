        <?php
            // session_start();
            // require 'db.php';

            //**** Get the visitor ip adress*/ 
            // $ip_adress=$_SERVER['REMOTE_ADDR'];

            // *****insert ip into databse
            // $insert="INSERT INTO visitors(ip_adress) VALUES ('$ip_adress')";
            // $query=mysqli_query($db,$insert);

            // count visitor
            // $select="SELECT * FROM visitors";
            // $query2=mysqli_query($db,$select);
            // $count=mysqli_num_rows($query2);
        ?>
        <!-- header section -->
        <?php
        require 'inc/header.php';
        ?>
        <!-- main-area -->
        <main>

            <!-- banner-area -->
            <?php require'inc/banner.php'; ?>
            <!-- banner-area-end -->

            <!-- about-area-->
                           <?php require'inc/about.php'?>
           
                            <!-- Education Item -->
                           <?php require'inc/skill.php'?>
                            <!-- End Education Item -->
                        </div>
                    </div>
                </div>
            </section>
            <!-- about-area-end -->

            <!-- Services-area -->
            <?php require'inc/service.php'?>
            <!-- Services-area-end -->

            <!-- Portfolios-area -->
            <?php require'inc/project.php'?>
            
            <!-- project-area-end -->


            <!-- fact-area -->
            <section class="fact-area">
                <div class="container">
                    <div class="fact-wrap">
                        <div class="row justify-content-between">
                            <?php
                                // count visitor
                                $select="SELECT * FROM visitors";
                                $query=mysqli_query($db,$select);
                                $counts=mysqli_num_rows($query);
                            ?>
                            <div class="col-xl-2 col-lg-3 col-sm-6">
                                <div class="fact-box text-center mb-50">
                                    <div class="fact-icon">
                                        <i class="fa fa-user"></i>
                                    </div>
                                    <div class="fact-content">
                                        <h2><span class="count"><?php echo $counts?></span></h2>
                                        <span>Total Visitors</span>
                                    </div>
                                </div>
                            </div>

                            <?php
                                $select="SELECT * FROM fact";
                                $query=mysqli_query($db,$select);
                                
                                foreach ($query as $key => $facts) {
                            ?>
                            <div class="col-xl-2 col-lg-3 col-sm-6">
                                <div class="fact-box text-center mb-50">
                                    <div class="fact-icon">
                                        <i class="flaticon-award"></i>
                                    </div>
                                    <div class="fact-content">
                                        <h2><span class="count"><?php echo $facts['feature_item']?></span></h2>
                                        <span>Feature Item</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-sm-6">
                                <div class="fact-box text-center mb-50">
                                    <div class="fact-icon">
                                        <i class="flaticon-like"></i>
                                    </div>
                                    <div class="fact-content">
                                        <h2><span class="count"><?php echo $facts['active_products']?></span></h2>
                                        <span>Active Products</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-sm-6">
                                <div class="fact-box text-center mb-50">
                                    <div class="fact-icon">
                                        <i class="flaticon-event"></i>
                                    </div>
                                    <div class="fact-content">
                                        <h2><span class="count"><?php echo $facts['year_experience']?></span></h2>
                                        <span>Year Experience</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-sm-6">
                                <div class="fact-box text-center mb-50">
                                    <div class="fact-icon">
                                        <i class="flaticon-woman"></i>
                                    </div>
                                    <div class="fact-content">
                                        <h2><span class="count"><?php echo $facts['clients']?></span></h2>
                                        <span>Our Clients</span>
                                    </div>
                                </div>
                            </div>
                            <?php
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </section>
            <!-- fact-area-end -->

            <!-- testimonial-area -->
            <?php require'inc/test.php'; ?>
            <!-- testimonial-area-end -->

            <!-- brand-area -->
           <?php require'inc/brand.php'; ?>
            <!-- brand-area-end -->

            <!-- contact-area -->
            <?php require'inc/contact.php'; ?>
            <!-- contact-area-end -->

        </main>
        <!-- main-area-end -->

        <!-- footer -->
        <?php require 'inc/footer.php'; ?> 