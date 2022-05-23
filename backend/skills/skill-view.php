<?php 
    require '../session.php'; 
    require '../inc/header.php';
    require '../../db.php';
?>

<div class="content">
                    <div class="container-fluid">



                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card-box">
                                    <h4 class="m-t-0 header-title">View Skills</h4>
                                    <?php if(isset($_SESSION['skills'])){
                                        ?>
                                        <div class="alert alert-danger">
                                           <?php echo $_SESSION['skills'];
                                           unset ($_SESSION['skills']);
                                            ?>
                                        </div>
                                        <?php
                                    }
                                    ?>
                                    <table class="table table-bordered text-center">
                                        <thead>
                                        <tr>
                                            <th>SL</th>
                                            <th>Skill</th>
                                            <th>GPA</th>
                                            <th>Progress</th>
                                            <th>Year</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $select="SELECT * FROM  skills";
                                            $query=mysqli_query($db,$select);

                                            foreach ($query as $key => $value) {
                                                ?>
                                                <tr class="text-center">
                                                    <th scope="row"><?php echo $key+1?></th>
                                                    <td><?php echo $value['skill']?></td>
                                                    <td><?php echo $value['gpa']?></td>
                                                    <td><?php echo $value['progress']?></td>
                                                    <td><?php echo $value['year']?></td>
                                                     
                                                    <td ><a href="skill-edit.php?id=<?php echo $value['id']?>" class="btn btn-outline-info">Edit</a>
                                                    <a href="delete-skill.php?id=<?php echo $value['id']?>" class="btn btn-outline-danger">Delete</a>
                                                   
                                                    </td>                                               
                                                </tr>
                                                <?php
                                            }
                                            ?>
                                        </tbody>
                                    </table>

                                </div>
                                 <div class="row m-t-50">
                                <div class="col-sm-12 text-center">
                                    <p class="text-muted">Add Your Skill? <a href="skill.php" class="text-red m-l-5"><b>Add</b></a></p>
                                </div>
                            </div>
                            </div>


                        </div>
                        <!-- end row -->


                    </div> <!-- container -->


</div>


<?php require '../inc/footer.php'; ?>