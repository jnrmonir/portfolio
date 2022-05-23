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
                                    <h4 class="m-t-0 m-b-30 header-title">Add Service</h4>
                                    <?php if(isset($_SESSION['success'])){
                                        ?>
                                        <div class="alert alert-danger">
                                           <?php echo $_SESSION['success'];
                                           unset ($_SESSION['success']);
                                            ?>
                                        </div>
                                        <?php
                                    }
                                    ?>

                                    <form action="service-post.php" method="post" class="form-horizontal" role="form">
                                        <div class="form-group row">
                                            <label for="title" class="col-3 col-form-label">Title</label>
                                            <div class="col-9">
                                                <input type="text" class="form-control" name="title" id="title" placeholder="Title">
                                            </div>
                                        </div>

                                         <div class="form-group row">
                                             <label for="summary" class="col-3 col-form-label">Summary</label>
                                            <div class="col-9">
                                                <input type="text" maxlength="#" class="form-control" name="summary" id="summary" placeholder="Ex: graphic design">
                                            </div>
                                        </div>

                                         <div class="form-group row">
                                            <label for="icon" class="col-3 col-form-label">Icon</label>
                                            <div class="col-9">
                                                <select class="form-control" name="icon" id="form-control">
                                                    <option value="fab fa-react"></i>React</option>
                                                    <option value="fab fa-facebook">Facebook</option>
                                                </select>
                                               <!--  <input type="text" class="form-control" name="icon" id="icon" placeholder="fab fa-react"> -->
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