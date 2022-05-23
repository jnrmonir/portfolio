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
                                    <h4 class="m-t-0 header-title">ALL USERS</h4>
                                    <table class="table table-bordered text-center">
                                        <thead>
                                        <tr>
                                            <th>SL</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Roll</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $select="SELECT * FROM users WHERE status=1 ORDER BY id ASC";
                                            $query=mysqli_query($db,$select);

                                            foreach ($query as $key => $value) {
                                                ?>
                                                <tr class="text-center">
                                                    <th scope="row"><?php echo $key+1?></th>
                                                    <td><?php echo $value['name']?></td>
                                                    <td><?php echo $value['email']?></td>
                                                    <td><?php echo $value['user_role'] == 1 ? 'User':'Admin' ?></td> 
                                                    <td ><a href="../../user-edit.php?id=<?php echo $value['id']?>" class="btn btn-outline-info">Edit</a>
                                                    <a data-id="<?php echo $value['id']?>" class="btn btn-outline-danger delete">Delete</a>
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