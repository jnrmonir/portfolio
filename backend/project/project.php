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
                                    <h4 class="m-t-0 m-b-30 header-title">Add Project</h4>
                                    <?php if(isset($_SESSION['projects'])){
                                        ?>
                                        <div class="alert alert-danger">
                                           <?php echo $_SESSION['projects'];
                                           unset ($_SESSION['projects']);
                                            ?>
                                        </div>
                                        <?php
                                    }
                                    ?>

                                    <form action="project-post.php" method="post" class="form-horizontal" role="form" enctype="multipart/form-data">
                                        <div class="form-group row">
                                            <label for="title" class="col-3 col-form-label">Title</label>
                                            <div class="col-9">
                                                <input type="text" class="form-control" name="title" id="title" placeholder="Title">
                                            </div>
                                        </div>

                                         <div class="form-group row">
                                             <label for="description" class="col-3 col-form-label">Description</label>
                                            <div class="col-9">
                                                <textarea maxlength="#" class="form-control" name="description" id="description" placeholder="Enter your description"></textarea>                                                
                                            </div>
                                        </div>

                                         <div class="form-group row">
                                            <label for="thumbnail" class="col-3 col-form-label">Thumbnail</label>
                                            <div class="col-9">                                                
                                                <input type="file" class="form-control" name="thumbnail" id="thumbnail">
                                            </div>
                                        </div>                                
                                                                                
                                        </div>
                                        <div class="form-group mb-0 justify-content-end row">
                                            <div class="col-9">
                                                <button type="submit" class="btn btn-info waves-effect waves-light">Save Change</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div> <!-- container -->

</div>
<?php require '../inc/footer.php'?>