<?php 
    require '../session.php';
    require '../inc/header.php'; 
    require '../../db.php';
?>

<div class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-10 offset-1">
                                <div class="card-box">
                                    <h4 class="m-t-0 m-b-30 header-title">Add Skill</h4>
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

                                    <form action="test-post.php" method="post" class="form-horizontal" role="form" enctype="multipart/form-data">
                                        <div class="form-group row">
                                            <label for="name" class="col-3 col-form-label">Name</label>
                                            <div class="col-9">
                                                <input type="text" class="form-control" name="name" id="name" placeholder="Enter Your Name">
                                            </div>
                                        </div>
                                        
                                         <div class="form-group row">
                                            <label for="description" class="col-3 col-form-label">Description</label>
                                            <div class="col-9">                                                
                                                <input type="text" class="form-control" name="description" id="description" placeholder="description">
                                            </div>
                                        </div>    

                                         <div class="form-group row">
                                             <label for="image" class="col-3 col-form-label">Image</label>
                                            <div class="col-9">
                                                <input type="file" class="form-control" name="image" id="image" placeholder="image">                                               
                                            </div>
                                        </div>

                                                                                
                                        </div>
                                        <div class="form-group mb-0 justify-content-end row">
                                            <div class="col-9">
                                                <button type="submit" class="btn btn-info waves-effect waves-light">Submit</button>
                                            </div>
                                        </div>                                        
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div> <!-- container -->

</div>
<?php require '../inc/footer.php'?>