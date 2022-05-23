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
                                    <h4 class="m-t-0 m-b-30 header-title">ADD BIO</h4>
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

                                    <form action="banner-post.php" method="post" class="form-horizontal" role="form" enctype="multipart/form-data">
                                        <div class="form-group row">
                                            <label for="title" class="col-3 col-form-label">Title</label>
                                            <div class="col-9">
                                                <input type="text" class="form-control" name="title" id="title" placeholder="Title">
                                            </div>
                                        </div>

                                         <div class="form-group row">
                                             <label for="bio" class="col-3 col-form-label">Bio Data</label>
                                            <div class="col-9">
                                                <textarea maxlength="#" class="form-control" name="bio" id="bio" placeholder="Enter your bio-data"></textarea>                                                
                                            </div>
                                        </div>

                                         <div class="form-group row">
                                            <label for="img" class="col-3 col-form-label">Image</label>
                                            <div class="col-9">                                                
                                                <input type="file" class="form-control" name="img" id="img">
                                            </div>
                                        </div>                                
                                                                                
                                        </div>
                                        <div class="form-group mb-0 justify-content-end row">
                                            <div class="col-9">
                                                <button type="submit" class="btn btn-info waves-effect waves-light">Submit</button>
                                            </div>
                                        </div>
                                        <div class="row m-t-50">
                                <div class="col-sm-12 text-center">
                                    <p class="text-muted">Edit Your Banner? <a href="banner-view.php" class="text-red m-l-5"><b>Edit</b></a></p>
                                </div>
                            </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div> <!-- container -->

</div>
<?php require '../inc/footer.php'?>