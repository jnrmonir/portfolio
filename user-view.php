	<?php
		require 'inc/header.php';
		require 'db.php';
	?>
	<div class="row">
		<div class="col-md-8 offset-2">
	<div class="card text-center">
	  <div class="card-header bg-success">
	    Users Data
	  </div>
	  <div class="card-body">
	  	<span class="text-danger">
                  <?php
                    if(isset($_SESSION['delete'])){
                    ?>
                      <style type="text/css">
                        .name{border: 1px solid red;}
                      </style>
                  <?php
                echo $_SESSION['delete'];
                unset ($_SESSION['delete']);
                  }
                  ?>
                </span>
	    <table class="table table-bordered" id="myTable">
	  <thead>
	    <tr>
	      <th scope="col">SL NO</th>
	      <th scope="col">ID</th>
	      <th scope="col">Name</th>
	      <th scope="col">Email</th>
	      <th scope="col">Phone</th>
	      <th scope="col">Gender</th>
	      <th scope="col">Action</th>
	    </tr>
	  </thead>
		  <tbody>
		  	<?php
		  		$select="SELECT * FROM users WHERE status=1";
		  		$query=mysqli_query($db,$select);
		  		foreach ($query as $key => $users) {
		  	?>
		  	<tr>
		      <th scope="row"><?php echo $key+1?></th>
		      <td><?php echo $users['id']?></td>
		      <td><?php echo $users['name']==''?"N/A":$users['name']?></td>
		      <td><?php echo $users['email']?></td>
		      <td><?php echo $users['phone']?></td>
		      <td><?php echo $users['gender']=='male'?"Male":"Female"?></td>
		      <td ><a href="user-edit.php?id=<?php echo $users['id']?>" class="btn btn-outline-info">Edit</a>
		      <a href="user-delete.php?id=<?php echo $users['id']?>" class="btn btn-outline-danger">Delete</a>
		  	  </td>
		    </tr>
		  	<?php
		  	}
		  	?>
		  </tbody>
	  </table>
	  </div>
	  <div class="card-footer text-danger bg-info">
	    copyright@ 2020
	  </div>

	  <!-- New Table -->
	   <table class="table table-bordered" id="myTable1">
	  <thead>
	    <tr>
	      <th scope="col">SL NO</th>
	      <th scope="col">ID</th>
	      <th scope="col">Name</th>
	      <th scope="col">Email</th>
	      <th scope="col">Phone</th>
	      <th scope="col">Gender</th>
	      <th scope="col">Action</th>
	    </tr>
	  </thead>
		  <tbody>
		  	<?php
		  		$select="SELECT * FROM users WHERE status=2";
		  		$query=mysqli_query($db,$select);
		  		foreach ($query as $key => $users) {
		  	?>
		  	<tr>
		      <th scope="row"><?php echo $key+1?></th>
		      <td><?php echo $users['id']?></td>
		      <td><?php echo $users['name']==''?"N/A":$users['name']?></td>
		      <td><?php echo $users['email']?></td>
		      <td><?php echo $users['phone']?></td>
		      <td><?php echo $users['gender']=='male'?"Male":"Female"?></td>
		      <td ><a href="user-delete.php?id=<?php echo $users['id']?>" class="btn btn-outline-danger">Delete</a>
		      <a href="user-delete.php?id=<?php echo $users['id']?>" class="btn btn-outline-info">Restore</a>
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
