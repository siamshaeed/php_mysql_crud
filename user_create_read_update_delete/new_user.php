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
         <h1 class="text-center">User Entry Here</h1>
         <!-- form start -->
         <form action="includes/user_submit.php" method="post">
           <div class="form-group">
             <label for="name">Name</label>
             <input type="name" class="form-control" id="name" name="name" placeholder="Enter email">
           </div>
           <div class="form-group">
             <label for="email">Email</label>
             <input type="email" class="form-control" id="email" name="email" placeholder="email">
           </div>
           <div class="form-group">
             <label for="email">Phone</label>
             <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone">
           </div>
           <button type="submit" class="btn btn-primary">Submit</button>
         </form>
       </div>
       <!-- right sideber -->
       <?php include 'includes/rightbar.php'; ?>
     </div>
   </div>
   <!-- footer -->
   <?php include("includes/footer.php"); ?>
 </body>

 </html>