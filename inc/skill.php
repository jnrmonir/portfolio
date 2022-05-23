                               <?php
                            $select="SELECT * FROM skills ORDER BY id DESC";
                            $query=mysqli_query($db,$select);
                            foreach ($query as $key => $skill) {
                              ?>
                            <div class="education">
                                <div class="year"><?php echo $skill['year']?></div>
                                <div class="line"></div>
                                <div class="location">
                                    <span><?php echo $skill['skill']?></span>
                                    <div class="progressWrapper">
                                        <div class="progress">
                                            <div class="progress-bar wow slideInLefts" data-wow-delay="0.2s" data-wow-duration="2s" role="progressbar" style="width:<?php echo $skill['progress']?>;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">GPA: <?php echo $skill['gpa']?></div>
                                        </div>
                                    </div>
                                </div>
                              
                            </div>
                              <?php
                              }
                                ?>
                            <!-- End Education Item -->
                            