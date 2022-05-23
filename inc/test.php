            <section class="testimonial-area primary-bg pt-115 pb-115">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-8">
                            <div class="section-title text-center mb-70">
                                <span>testimonial</span>
                                <h2>happy customer quotes</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">                        
                        <div class="col-xl-9 col-lg-10">
                            <div class="testimonial-active">
                                <?php
                                    $select="SELECT * FROM tests ORDER BY id DESC";
                                    $query=mysqli_query($db,$select);
                                    foreach ($query as $key => $test) {
                                ?>
                                <div class="single-testimonial text-center">                                    
                                    <div class="testi-avatar">
                                        <img src="uploads/test/<?php echo $test['image']?>" alt="img">
                                    </div>
                                    <div class="testi-content">
                                        <h4><span>“</span><?php echo $test['description']?><span>”</span></h4>
                                        <div class="testi-avatar-info">
                                            <h5><?php echo $test['name']?></h5>
                                            <span>head of idea</span>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                    }
                                ?>                                
                            </div>
                        </div>                        
                    </div>
                </div>
            </section>