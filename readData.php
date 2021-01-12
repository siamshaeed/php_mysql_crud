<?php require_once('connaction.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Read</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <h2>Data Read</h2>
    <?php
    $sql = "SELECT * FROM product_info";
    $data = $db->query($sql);
    ?>
    <table class="table table-hover able-bordered text-center">
        <tr>
            <th>ID</th>
            <th>Product Name</th>
            <th>Product Code</th>
            <th>Product Price</th>
            <th>Product Quantity</th>
        </tr>
        <?php
        while ($row = $data->fetch_assoc()) { ?>
            <tr>
                <td><?php echo $row['id'] ?></td>
                <td><?php echo $row['product_name'] ?></td>
                <td><?php echo $row['product_code'] ?></td>
                <td><?php echo $row['product_price'] ?></td>
                <td><?php echo $row['product_quantity'] ?></td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>