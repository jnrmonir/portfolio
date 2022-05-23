 <?php
                            $select="SELECT * FROM abouts";
                            $query=mysqli_query($db,$select);
                            foreach ($query as $key => $abouts) {
                                ?> <section id="about" class="about-area primary-bg pt-120 pb-120">
                <div class="container">
                    <div class="row align-items-center">                                                 
                        
                        <div class="col-lg-6">
                            <div class="about-img">
                                <img src="uploads/image/<?php echo $abouts['image']?>" title="me-01" alt="me-01">
                            </div>
                        </div>
                        <div class="col-lg-6 pr-90">
                            <div class="section-title mb-25">
                                <span>Introduction</span>
                                <h2>About Me</h2>
                            </div>
                            <div class="about-content">
                                <p><?php echo $abouts['description']?></p>
                                <h3>Education:</h3>
                            </div>
                            <?php
                        }
                            ?>