<?php 
    require '../session.php';
    require '../inc/header.php'; 
    require '../../db.php';

    $id=$_GET['id'];

    $select="SELECT * FROM skills WHERE id=$id";
    $query=mysqli_query($db,$select);
    $assoc=mysqli_fetch_assoc($query);
    $_SESSION['user_id']=$id;
?>

<div class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-10 offset-1">
                                <div class="card-box">
                                    <h4 class="m-t-0 m-b-30 header-title">Update Skill</h4>
                                    <?php if(isset($_SESSION['skills'])){
                                        ?>
                                        <div class="alert alert-danger">
                                           <?php echo $_SESSION['skills'];
                                           unset ($_SESSION['skills']);
                                            ?>
                                        </div>
                                        <?php
                                    }
                                    ?>

                                    <form action="skillEdit-post.php" method="post" class="form-horizontal" role="form">
                                        <input type="hidden" name="user_id" value="<?php echo $id ?>">
                                        <div class="form-group row">
                                            <label for="skill" class="col-3 col-form-label">Skill</label>
                                            <div class="col-9">
                                                <input type="text" class="form-control" name="skill" id="skill" value="<?php echo $assoc['skill']?>">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="gpa" class="col-3 col-form-label">GPA</label>
                                            <div class="col-9">                                                
                                                <input type="text" class="form-control" name="gpa" id="gpa" value="<?php echo $assoc['gpa']?>">
                                            </div>
                                        </div>

                                         <div class="form-group row">
                                            <label for="progress" class="col-3 col-form-label">Progress</label>
                                            <div class="col-9">                                                
                                                <input type="text" class="form-control" name="progress" id="progress" value="<?php echo $assoc['progress']?>">
                                            </div>
                                        </div>    

                                         <div class="form-group row">
                                             <label for="year" class="col-3 col-form-label">Years</label>
                                            <div class="col-9">
                                                <input type="text" class="form-control" name="year" id="year" value="<?php echo $assoc['year']?>">                                               
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