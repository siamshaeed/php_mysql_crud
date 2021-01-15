 <!-- header include -->
 <?php include('includes/header.php'); ?>

 <body>
   <!-- nav include -->
   <?php include('includes/nav.php'); ?>
   <div class="container-fluid text-center">
     <div class="row content">
       <!-- left sideber -->
       <?php include 'includes/leftbar.php'; ?>
       <!-- body -->
       <div class="col-sm-8 text-left">
         <h1 class="text-center">All User</h1>
         <a href="new_user.php" class="btn btn-success">User create</a></br> </br>
        <table class="table table-bordered table-striped text-center" >
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Password</th>
            <th>Action</th>
          </tr>
          <?php
          require_once('db_config.php');
          $sql = "SELECT * FROM user_info";
          $data = $db_conn-> query($sql);
          while($row = $data->fetch_assoc()){
            ?>
            <tr>
              <td><?php echo $row['id']?></td>
              <td><?php echo $row['username']?></td>
              <td><?php echo $row['useremail']?></td>
              <td><?php echo $row['phone']?></td>
              <td>
              <!-- edit data -->
              <a href="user_edit.php? id=<?php echo $row['id']?>$msg" class="btn btn-primary"><i class="glyphicon glyphicon-edit"></i></a>

              <!-- delete data -->
              <a onclick="return confirm('Are you sure want to delete')" href="includes/user_delete.php? idx=<?php echo $row['id']?>" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i></a>
              </td>
            </tr>
          <?php } ?>
        </table>
       </div>
       <!-- right sideber -->
       <?php include 'includes/rightbar.php'; ?>
     </div>
   </div>
   <!-- footer -->
   <?php include("includes/footer.php"); ?>
 </body>

 </html>