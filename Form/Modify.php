<?php
require "DBConnect.php";

// Fetch product details when Product ID is provided
$product = null;
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['fetch'])) {
    $pid = $_POST['ProID'];

    $result = mysqli_query($con, "SELECT * FROM `productinfo` WHERE ProID='$pid'");


    if ($result && mysqli_num_rows($result) > 0) {
        $product = mysqli_fetch_assoc($result);
    } else {
        echo "<script>alert('Product Not Found!');</script>";
    }
}

// Update product details
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update'])) {
    $pid = $_POST['ProID'];
    $pname = $_POST['ProName'];
    $pdesc = $_POST['ProDes'];
    $pqty = $_POST['ProQty'];

    $updateQuery = "UPDATE `productinfo` SET 
                    ProName='$pname', 
                    ProDes='$pdesc', 
                    ProQty=ProQty+'$pqty' 
                    WHERE ProID='$pid'";

    if (mysqli_query($con, $updateQuery)) {
        echo "<script>alert('Product Updated Successfully!'); window.location.href='modify.php';</script>";
    } else {
        echo "<script>alert('Update Failed!');</script>";
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <title>Update Product</title>
</head>

<body>
    <div class="container mt-4">
        <h2>Update Product Details</h2>

        <!-- Form to enter Product ID to fetch details -->
        <!-- <form method="post">
            <div class="form-group">
                <label>Enter Product ID</label>
                <input type="text" name="proid" class="form-control" required>
            </div>
            <button type="submit" name="fetch" class="btn btn-info">Fetch Product</button>
        </form> -->


        <!-- With drop-down -->
        <form method="post">
            <div class="form-group">
                <label>Select Product ID</label>

                <select name="ProID" class="form-control" required>
                    <option value="ProID">Select Product ID</option>
                    <?php
                    require "DBConnect.php";
                    $productIds = mysqli_query($con, "SELECT ProID FROM productinfo");
                    while ($row = mysqli_fetch_assoc($productIds)) {
                        echo "<option value='{$row['ProID']}'>{$row['ProID']}</option>";
                    }
                    ?>
                </select>
            </div>
            <button type="submit" name="fetch" class="btn btn-info">Fetch Product</button>
        </form>

        <?php if ($product): ?>
            <!-- Form to update product details -->
            <form method="post" class="mt-4">
                <input type="hidden" name="ProID" value="<?= $product['ProID']; ?>">
                <div class="form-group">
                    <label>Product Name</label>
                    <input type="text" name="ProName" class="form-control" value="<?= $product['ProName']; ?>" required>
                </div>
                <div class="form-group">
                    <label>Product Description</label>
                    <input type="text" name="ProDes" class="form-control" value="<?= $product['ProDes']; ?>" required>
                </div>
                <div class="form-group">
                    <label>Product Quantity</label>
                    <input type="number" name="ProQty" class="form-control" value="<?= $product['ProQty']; ?>" required>
                </div>
                <button type="submit" name="update" class="btn btn-primary">Update Product</button>
            </form>
        <?php endif; ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>