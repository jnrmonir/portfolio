<?php 
    require '../session.php';
    require '../inc/header.php'; 
    require '../../db.php';

    // $id=$_GET['id'];
    // $select="SELECT * FROM fact WHERE id=$id";
    // $query=mysqli_query($db,$select);
    // $assoc=mysqli_fetch_assoc($query);
    // $_SESSION['user_id']=$id;
?>

<div class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-10 offset-1">
                                <div class="card-box">
                                    <h4 class="m-t-0 m-b-30 header-title">Add Fact</h4>
                                    <?php if(isset($_SESSION['facts'])){
                                        ?>
                                        <div class="alert alert-danger">
                                           <?php echo $_SESSION['facts'];
                                           unset ($_SESSION['facts']);
                                            ?>
                                        </div>
                                        <?php
                                    }
                                    ?>

                                    <form action="fact-post.php" method="post" class="form-horizontal" role="form" enctype="multipart/form-data">
                                        <div class="form-group row">
                                            <label for="skill" class="col-3 col-form-label">FEATURE ITEM</label>
                                            <div class="col-9">
                                                <input type="text" class="form-control" name="skill" id="skill" >
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="gpa" class="col-3 col-form-label">ACTIVE PRODUCTS</label>
                                            <div class="col-9">                                                
                                                <input type="text" class="form-control" name="gpa" id="gpa" placeholder="ACTIVE PRODUCTS">
                                            </div>
                                        </div>

                                         <div class="form-group row">
                                            <label for="progress" class="col-3 col-form-label">YEAR EXPERIENCE</label>
                                            <div class="col-9">                                                
                                                <input type="text" class="form-control" name="progress" id="progress" placeholder="YEAR EXPERIENCE">
                                            </div>
                                        </div>    

                                         <div class="form-group row">
                                             <label for="year" class="col-3 col-form-label">OUR CLIENTS</label>
                                            <div class="col-9">
                                                <input type="text" class="form-control" name="year" id="year" placeholder="OUR CLIENTS">                                               
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