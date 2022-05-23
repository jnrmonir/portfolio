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
                                    <h4 class="m-t-0 header-title">ALL Banners</h4>
                                    <?php if(isset($_SESSION['banners'])){
                                        ?>
                                        <div class="alert alert-danger">
                                           <?php echo $_SESSION['banners'];
                                           unset ($_SESSION['banners']);
                                            ?>
                                        </div>
                                        <?php
                                    }
                                    ?>
                                    <table class="table table-bordered text-center">
                                        <thead>
                                        <tr>
                                            <th>SL</th>
                                            <th>Title</th>
                                            <th>Bio Data</th>
                                            <th>Image</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $select="SELECT * FROM  banners";
                                            $query=mysqli_query($db,$select);

                                            foreach ($query as $key => $value) {
                                                ?>
                                                <tr class="text-center">
                                                    <th scope="row"><?php echo $key+1?></th>
                                                    <td><?php echo $value['title']?></td>
                                                    <td><?php echo $value['bio']?></td>
                                                    <td><img src="../../uploads/image/<?php echo $value['img']?>"></td> 
                                                    <td ><a href="banner-edit.php?id=<?php echo $value['id']?>" class="btn btn-outline-info">Edit</a>
                                                    <a href="delete-banner.php?id=<?php echo $value['id']?>" class="btn btn-outline-danger">Delete</a>
                                                   
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