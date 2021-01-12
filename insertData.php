<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Insert</title>
</head>

<body>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = $_POST['pName'];
        $code = $_POST['pcode'];
        $price = $_POST['pPrice'];
        $quantity = $_POST['pQuantity'];
        require_once('connaction.php');

        $sql = "INSERT INTO product_info (id, product_name , product_code, product_price, product_quantity) VALUES('', '$name', '$code', '$price', '$quantity')";

        $db->query($sql);

        //For success message
        if ($db->affected_rows > 0) {
            echo "Successfully Insert";
        }
    };
    ?>
    <h2>Please Insert your data</h2>
    <form action="" method="post">
        <input type="text" name="pName" placeholder="Enter Product Name"></br>
        <input type="text" name="pcode" placeholder="Enter Product Code"></br>
        <input type="text" name="pPrice" placeholder="Enter Product Price"></br>
        <input type="text" name="pQuantity" placeholder="Enter Product Quantity"></br> </br>
        <input type="submit" name="sbmt" value="SUBMIT">
    </form>
</body>

</html>