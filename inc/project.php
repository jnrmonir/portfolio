<section id="portfolio" class="portfolio-area primary-bg pt-120 pb-90">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-8">
                            <div class="section-title text-center mb-70">
                                <span>Portfolio Showcase</span>
                                <h2>My Recent Best Works</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                    	<?php
							$select="SELECT * FROM projects WHERE status=1 ORDER BY id DESC";
							$query=mysqli_query($db,$select);
							foreach ($query as $key => $projects) {
						?>
                        <div class="col-lg-4 col-md-6 pitem">
                            <div class="speaker-box">
								<div class="speaker-thumb">
									<img src="uploads/project/<?php echo $projects['thumbnail']?>" alt="<?php echo $projects['title']?>">
								</div>
								<div class="speaker-overlay">
									<span>Design</span>
									<h4><a href="single.php?id=<?php echo $projects['id']?>"><?php echo $projects['title']?></a></h4>
									<a href="single.php?id=<?php echo $projects['id']?>" class="arrow-btn">More information <span></span></a>
								</div>
							</div>							
                        </div>
                        <?php
                            }
                        ?>                        
                    </div>
                </div>
            </section>