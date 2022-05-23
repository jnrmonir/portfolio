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
                                    <h4 class="m-t-0 header-title">All Review</h4>
                                    <?php if(isset($_SESSION['tests'])){
                                        ?>
                                        <div class="alert alert-danger">
                                           <?php echo $_SESSION['tests'];
                                           unset ($_SESSION['tests']);
                                            ?>
                                        </div>
                                        <?php
                                    }
                                    ?>
                                    <table class="table table-bordered text-center">
                                        <thead>
                                        <tr>
                                            <th>SL</th>              
                                            <th>Description</th>
                                            <th>Image</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $select="SELECT * FROM  abouts";
                                            $query=mysqli_query($db,$select);

                                            foreach ($query as $key => $abouts) {
                                                ?>
                                                <tr class="text-center">
                                                    <th scope="row"><?php echo $key+1?></th>                                         
                                                    <td><?php echo $abouts['description']?></td>
                                                    <td><?php echo $abouts['image']?></td>
                                                     
                                                    <td ><a href="about-edit.php?id=<?php echo $value['id']?>" class="btn btn-outline-info">Edit</a>
                                                    <a href="delete-about.php?id=<?php echo $value['id']?>" class="btn btn-outline-danger">Delete</a>
                                                   
                                                    </td>                                               
                                                </tr>
                                                <?php
                                            }
                                            ?>
                                        </tbody>
                                    </table>

                                </div>
                                 
                            </div>


                        </div>
                        <!-- end row -->


                    </div> <!-- container -->


</div>


<?php require '../inc/footer.php'; ?>