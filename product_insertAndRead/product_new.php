<!-- header include -->
<?php include('includes/header.php') ?>

<body>
    <!-- nav include -->
    <?php include('includes/nav.php') ?>

    <div class="container-fluid text-center">
        <div class="row content">
            <!-- left sideber include -->
            <?php include('includes/leftSide.php') ?>
            <!-- middle section -->
            <div class="col-sm-8 text-left">
                <h3 class="text-center">Product Entry</h3>
                <!-- Form stat here -->
                <form action="includes/product_submit.php" method="post">
                    <div class="form-group">
                        <label for="product_name">Name:</label>
                        <input type="text" class="form-control" id="name" name="product_name">
                    </div>
                    <div class="form-group">
                        <label for="naproduct_codeme">Code:</label>
                        <input type="text" class="form-control" id="code" name="product_code">
                    </div>
                    <div class="form-group">
                        <label for="product_price">Price:</label>
                        <input type="text" class="form-control" id="price" name="product_price">
                    </div>
                    <div class="form-group">
                        <label for="producr_quantity">Quantity:</label>
                        <input type="text" class="form-control" id="quantity" name="producr_quantity">
                    </div>
                    <button type="submit" class="btn btn-info">Submit</button>
                </form>
                <!-- Form end here -->
</br>
                <a href="product.php" class="btn btn-success">Back Product</a>
            </div>
            <!-- rightsideber include -->
            <?php include('includes/rightsideber.php') ?>
        </div>
    </div>
    <!-- footer include -->
    <?php include('includes/footer.php') ?>
</body>

</html>