<?php
  require 'inc/header.php';
  require 'db.php';

  $id=$_GET['id'];

  $select="SELECT * FROM users WHERE id=$id";
  $query=mysqli_query($db,$select);
  $assoc=mysqli_fetch_assoc($query);
  $_SESSION['user_id']=$id;
?>
<body>
        <div class="container">
          <div class="row">
            <div class="col-md-10 offset-1">
              <h2 class="text-center text-white bg-info">User Edit</h2>
              <h3 class="text-center">
                <?php
                  date_default_timezone_set('Asia/Dhaka');
                  echo date('h:i:sa');
                ?>
              </h3>
          <form action="user-update.php" method="post">
            <input type="hidden" name="user_id" value="<?php echo $id ?>">

            <div class="form-group">
              <label for="name">Name:</label>
              <input type="name" class="form-control name" id="name" value="<?php echo $assoc['name']?>" placeholder="Enter name" name="name">
                <span class="text-danger">
                  <?php
                    if(isset($_SESSION['name'])){
                    ?>
                      <style type="text/css">
                        .name{border: 1px solid red;}
                      </style>
                  <?php
                echo $_SESSION['name'];
                unset ($_SESSION['name']);
                  }
                  ?>
                </span>
            </div>
           
            <div class="form-group">
              <label for="email">Email:</label>
              <input type="email" class="form-control email" id="email" value="<?php echo $assoc['email']?>" placeholder="Enter email" name="email">
                <span class="text-danger">
                  <?php
                    if(isset($_SESSION['email'])){
                    ?>
                      <style type="text/css">
                        .email{border: 1px solid red;}
                      </style>
                  <?php
                  echo $_SESSION['email'];
                  unset ($_SESSION['email']);
                  }
                  ?>
            </span>
            </div>

            <div class="form-group">
              <label for="password">Password:</label>
              <input type="password" class="form-control password" id="password" placeholder="Enter password" name="password">
                <span class="text-danger">
                  <?php
                    if(isset($_SESSION['password'])){
                    ?>
                      <style type="text/css">
                        .password{border: 1px solid red;}
                      </style>
                    <?php
                    echo $_SESSION['password'];
                    unset ($_SESSION['password']);
                    }
                  ?>
                </span>
            </div>
            <div class="form-group">
              <label for="phone">Phone:</label>
              <input type="text" class="form-control name" id="name" value="<?php echo $assoc['phone']?>" placeholder="Enter Phone no" name="phone">
            </div>
           
            <div class="form-group">
              <label for="gen">Gender:</label><br>
              <input type="radio" <?php echo $assoc['gender']=='male'?'checked':''?> id="gen"  name="gender" value="male"> Male
              <input type="radio" <?php echo $assoc['gender']=='female'?'checked':''?> id="gen"  name="gender" value="female"> Female
             
            </div>
           <div class="form-group text-center">
            <button type="submit" class="btn btn-primary">Update</button>
          </div>
          </form>
            </div>
          </div>
        </div>

</body>
</html>
