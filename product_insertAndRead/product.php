<!-- header include -->
<?php include('includes/header.php')?>
<body>
<!-- nav include -->
<?php include('includes/nav.php')?>

  <div class="container-fluid text-center">
    <div class="row content">
      <!-- left sideber include -->
      <?php include('includes/leftSide.php')?>
      <!-- middle section -->
      <div class="col-sm-8 text-left">
        <h3 class="text-center">All Product</h3>
        <table class="table table-borderd">
          <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Code</td>
            <td>Price</td>
            <td>Quantity</td>
          </tr>
          <?php
          require_once ('db_config.php');
          $sql = "SELECT * FROM product_info";
          $data = $db->query($sql);
          while($row = $data->fetch_assoc()){
            ?>
             <tr>
                <td><?php echo $row['id'] ?></td>
                <td><?php echo $row['product_name']?></td>
                <td><?php echo $row['product_code']?></td>
                <td><?php echo $row['product_price']?></td>
                <td><?php echo $row['producr_quantity']?></td>
             </tr>
          <?php  } ?>
        </table>
        <a href="product_new.php" class="btn btn-success">New Product</a>
      </div>
      <!-- rightsideber include -->
      <?php include('includes/rightsideber.php')?>
    </div>
  </div>
  <!-- footer include -->
  <?php include('includes/footer.php')?>
</body>
</html>