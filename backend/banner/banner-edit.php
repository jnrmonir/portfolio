<?php 
    require '../session.php';
    require '../inc/header.php'; 
    require '../../db.php';

    $id=$_GET['id'];

    $select="SELECT * FROM banners WHERE id=$id";
    $query=mysqli_query($db, $select);
    $assoc=mysqli_fetch_assoc($query);
?>

<div class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-10 offset-1">
                                <div class="card-box">
                                    <h4 class="m-t-0 m-b-30 header-title">Edit Banner</h4>
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

                                    <form action="bannerEdit-post.php" method="post" class="form-horizontal" role="form" enctype="multipart/form-data">
                                      <!-- <input type="hidden" name="id" value="<?php //echo $assoc['id']?>"> -->
                                        <div class="form-group row">
                                            <label for="title" class="col-3 col-form-label">Title</label>
                                            <div class="col-9">
                                                <input type="text" class="form-control" value="<?php echo $assoc['title']?>" name="title" id="title" 
                                                value="<?php echo $assoc['title']?>" placeholder="Title">
                                            </div>
                                        </div>

                                         <div class="form-group row">
                                             <label for="bio" class="col-3 col-form-label">Bio Data</label>
                                            <div class="col-9">
                                                <textarea maxlength="#" class="form-control" value="<?php echo $assoc['bio']?>" name="bio" id="bio" placeholder="Enter your description"><?php echo $assoc['bio']?></textarea>                                                
                                            </div>
                                        </div>

                                         <div class="form-group row">
                                            <label for="img" class="col-3 col-form-label">Image</label>
                                            <div class="col-9">                                                
                                                <input type="file" onchange="document.getElementById('old_img').src=window.URL.createObjectURL(this.files[0])" class="form-control" name="img" id="img" value="<?php echo $assoc['img']?>">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="img" class="col-3 col-form-label">Image Preview</label>
                                            <div class="col-9">                                                
                                                <img id="old_img" src="../../uploads/image/<?php echo $assoc['img']?>">
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
<?php require '../inc/footer.php'; ?>