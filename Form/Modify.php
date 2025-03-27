<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" crossorigin="anonymous">
    <title>Update Product</title>
</head>

<body>
    <h1>Update Product!</h1>
    
    <!-- Form to fetch data -->
    <form method="post" action="">
        <div class="form-group">
            <label for="productId">Product ID</label>
            <input name="e1" type="text" class="form-control" id="ProId" required>
        </div>
        <button type="submit" name="fetch" class="btn btn-info">Fetch Data</button>
    </form>

    <?php
    require "DBConnect.php";  // Connect to the database

    // Fetch data based on the Product ID
    if (isset($_POST['fetch'])) {
        $ue = $_POST['e1'];  // Get product ID from form
        $query = "SELECT * FROM `productinfo` WHERE ProID='$ue'";  // Adjust the column name if needed
        $result = mysqli_query($con, $query);

        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
    ?>
            <!-- Form to update product data -->
            <form method="post" action="Modify.php">
                <input type="hidden" name="e1" value="<?php echo $row['ProID']; ?>"> <!-- Hidden field for product ID -->
                <div class="form-group">
                    <label for="productName">Product Name</label>
                    <input name="n1" type="text" class="form-control" id="productName" value="<?php echo $row['ProName']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="productDesc">Product Description</label>
                    <input name="f1" type="text" class="form-control" id="productDesc" value="<?php echo $row['ProDes']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="productQnty">Product Quantity</label>
                    <input name="p1" type="number" class="form-control" id="productQnty" value="<?php echo $row['ProQty']; ?>" required>
                </div>
                <button type="submit" name="update" class="btn btn-primary">Update</button>
            </form>
    <?php
        } else {
            echo "<script>alert('Product not found!');</script>";
        }
    }

    // Update the product information
    if (isset($_POST['update'])) {
        $ue = $_POST['e1'];  // Product ID
        $un = $_POST['n1'];  // Product Name
        $uf = $_POST['f1'];  // Product Description
        $up = $_POST['p1'];  // Product Quantity

        // Update query
        $updateQuery = "UPDATE `productinfo` SET ProName='$un', ProDes='$uf', ProQty='$up' WHERE ProID='$ue'";
        $exec = mysqli_query($con, $updateQuery);

        if ($exec) {
            echo "<script>alert('Update Successful.'); window.location.href='IncReq.php';</script>";
        } else {
            echo "<script>alert('Update Not Successful!!!');</script>";
        }
    }
    ?>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>
</html>
