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
                                    <h4 class="m-t-0 header-title">ALL Project</h4>
                                    <?php if(isset($_SESSION['delete'])){
                                        ?>
                                        <div class="alert alert-danger">
                                           <?php echo $_SESSION['delete'];
                                           unset ($_SESSION['delete']);
                                            ?>
                                        </div>
                                        <?php
                                    }
                                    ?>
                                    <table class="table table-bordered text-center">
                                        <thead>
                                        <tr>
                                            <th>SL</th>
                                            <th>Name</th>
                                            <th>Description</th>
                                            <th>Image</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $select="SELECT * FROM  projects WHERE status=1";
                                            $query=mysqli_query($db,$select);

                                            foreach ($query as $key => $value) {
                                                ?>
                                                <tr class="text-center">
                                                    <th scope="row"><?php echo $key+1?></th>
                                                    <td><?php echo $value['title']?></td>
                                                    <td><?php echo $value['description']?></td>
                                                    <td><img src="../../uploads/project/<?php echo $value['thumbnail']?>"></td> 
                                                    <td ><a href="project-edit.php?id=<?php echo $value['id']?>" class="btn btn-outline-info">Edit</a>
                                                    <a href="delete-project.php?id=<?php echo $value['id']?>" class="btn btn-outline-danger">Delete</a>
                                                   
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
<div class="content">
                    <div class="container-fluid">



                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card-box">
                                    <h4 class="m-t-0 header-title">ALL Deleted Project</h4>
                                    <table class="table table-bordered text-center">
                                        <thead>
                                        <tr>
                                            <th>SL</th>
                                            <th>Name</th>
                                            <th>Description</th>
                                            <th>Image</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $select="SELECT * FROM projects WHERE status=2";
                                            $query=mysqli_query($db,$select);

                                            foreach ($query as $key => $value) {
                                                ?>
                                                <tr class="text-center">
                                                    <th scope="row"><?php echo $key+1?></th>
                                                    <td><?php echo $value['title']?></td>
                                                    <td><?php echo $value['description']?></td>
                                                    <td><img src="../../uploads/project/<?php echo $value['thumbnail']?>"></td> 
                                                    <td ><a href="restore-project.php?id=<?php echo $value['id']?>" class="btn btn-outline-info">Restore</a>
                                                    <a href="delete1-project.php?id=<?php echo $value['id']?>" class="btn btn-outline-danger">Delete</a>
                                                    <!-- href="user-delete.php?id=<?php //echo $value['id']?>" -->
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