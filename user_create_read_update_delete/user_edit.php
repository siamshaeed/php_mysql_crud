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
         <h1 class="text-center">User Edit</h1>
         <?php
          $id = $_GET['id'];
          require_once('db_config.php');
          $sql = "SELECT * FROM user_info WHERE id = '$id'";
          $data = $db_conn->query($sql);
          $row =  $data->fetch_assoc();

          if ($_GET['msg'] != '') { ?>
           <p class="alert alert-danger"><?php echo $_GET['msg']; ?></p>
         <?php } ?>

         <!-- user Edit form -->
         <form action="includes/user_update.php" method="post">
           <div class="form-group">
             <label for="name">name:</label>
             <input type="text" class="form-control" id="name" name="name" value="<?php echo $row['username'] ?>">
           </div>
           <div class="form-group">
             <label for="email">Email:</label>
             <input type="text" class="form-control" id="email" name="email" value="<?php echo $row['useremail'] ?>">
           </div>
           <div class="form-group">
             <label for="phone">Phone:</label>
             <input type="text" class="form-control" id="phone" name="phone" value="<?php echo $row['phone'] ?>">
           </div>
           <input type="hidden" name="id" value="<?php echo $id ?>">

           <button type="submit" class="btn btn-info">Update</button>
         </form>
         <!-- Form close -->
       </div>
       <!-- right sideber -->
       <?php include 'includes/rightbar.php'; ?>
     </div>
   </div>
   <!-- footer -->
   <?php include("includes/footer.php"); ?>
 </body>
 </html>