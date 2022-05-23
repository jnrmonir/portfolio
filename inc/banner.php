<section id="home" class="banner-area banner-bg fix">
                <div class="container">
                    <div class="row align-items-center">
                        <?php
                            $select="SELECT * FROM banners ORDER BY id DESC";
                            $query=mysqli_query($db,$select);
                            foreach ($query as $key => $banners) {
                        ?>
                        <div class="col-xl-7 col-lg-6">
                            <div class="banner-content">
                                <h6 class="wow fadeInUp" data-wow-delay="0.2s">HELLO!</h6>
                                <h2 class="wow fadeInUp" data-wow-delay="0.4s"><?php echo $banners['title']?></h2>
                                <p class="wow fadeInUp" data-wow-delay="0.6s"><?php echo $banners['bio']?></p>
                                <div class="banner-social wow fadeInUp" data-wow-delay="0.8s">
                                    <ul>
                                        <li><a href="https://www.facebook.com/mix.monir/"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                    </ul>
                                </div>
                                <a href="Monir_Hosen.pdf" class="btn wow fadeInUp" data-wow-delay="1s">MY CV</a>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-6 d-none d-lg-block">
                            <div class="banner-img text-right">
                                <img src="uploads/image/<?php echo $banners['img']?>" alt="">
                            </div>
                        </div>
                        <?php
                            }
                            ?>
                    </div>
                </div>
                <div class="banner-shape"><img src="img/shape/dot_circle.png" class="rotateme" alt="img"></div>
            </section>