<?php 
    require '../session.php';
    require '../inc/header.php'; 
    require '../../db.php';

    $id=$_GET['id'];

    $select="SELECT * FROM projects WHERE id=$id";
    $query=mysqli_query($db, $select);
    $assoc=mysqli_fetch_assoc($query);
?>

<div class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-10 offset-1">
                                <div class="card-box">
                                    <h4 class="m-t-0 m-b-30 header-title">Edit Project</h4>
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

                                    <form action="projectEdit-post.php" method="post" class="form-horizontal" role="form" enctype="multipart/form-data">
                                      <input type="hidden" name="id" value="<?php echo $assoc['id'] ?>">
                                        <div class="form-group row">
                                            <label for="title" class="col-3 col-form-label">Title</label>
                                            <div class="col-9">
                                                <input type="text" class="form-control" name="title" id="title" 
                                                value="<?php echo $assoc['title']?>" placeholder="Title">
                                            </div>
                                        </div>

                                         <div class="form-group row">
                                             <label for="description" class="col-3 col-form-label">Description</label>
                                            <div class="col-9">
                                                <textarea maxlength="#" class="form-control" name="description" id="description" placeholder="Enter your description"><?php echo $assoc['description']?></textarea>                                                
                                            </div>
                                        </div>

                                         <div class="form-group row">
                                            <label for="thumbnail" class="col-3 col-form-label">Thumbnail</label>
                                            <div class="col-9">                                                
                                                <input type="file" onchange="document.getElementById('old_img').src=window.URL.createObjectURL(this.files[0])" class="form-control" name="thumbnail" id="thumbnail" value="<?php echo $assoc['thumbnail']?>">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="thumbnail" class="col-3 col-form-label">Thumbnail Preview</label>
                                            <div class="col-9">                                                
                                                <img id="old_img" src="../../uploads/project/<?php echo $assoc['thumbnail']?>">
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