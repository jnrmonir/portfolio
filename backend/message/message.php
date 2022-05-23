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
                                    <h4 class="m-t-0 header-title">ALL MESSAGE</h4>
                                    <table class="table table-bordered text-center">
                                        <thead>
                                        <tr>
                                            <th>SL</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Message</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $select="SELECT * FROM contacts ORDER BY id ASC";
                                            $query=mysqli_query($db,$select);

                                            foreach ($query as $key => $value) {
                                                ?>
                                                <tr
                                                    <?php
                                                        if ($value['status']==1) {
                                                            ?>
                                                            style="background:#f3f6f8; font-weight: bold;";
                                                            <?php
                                                        }

                                                    ?>

                                                     class="text-center">
                                                    <th scope="row"><?php echo $key+1?></th>
                                                    <td><?php echo $value['name']?></td>
                                                    <td><?php echo $value['email']?></td>
                                                    <td><?php echo html_entity_decode($value['message'])?></td> 
                                                    <td ><a href="status.php?id=<?php echo $value['id']?>" class="btn btn-outline-info">
                                                        <?php echo $value['status']==1?'Reade':'Unreade'?></a>                                                    
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