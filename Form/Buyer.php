<?php
require "DBConnect.php";

// Fetch product details when Product ID is provided
$product = null;
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['fetch'])) {
    $pname = $_POST['ProName'];

    $result = mysqli_query($con, "SELECT * FROM `productinfo` WHERE ProName='$pname'");


    if ($result && mysqli_num_rows($result) > 0) {
        $product = mysqli_fetch_assoc($result);
    } else {
        echo "<script>alert('Product Not Found!');</script>";
    }
}
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update'])) {

    $pqty = $_POST['BuyQty'];
    $pname3= $_POST['ProName'];
    
    $updateQuery = "UPDATE `productinfo` SET 
                    ProQty=ProQty-'$pqty' 
                    WHERE ProName='$pname3'";

    if (mysqli_query($con, $updateQuery)) {
        echo "<script>alert('Product Updated Successfully!'); window.location.href='Modify.php';</script>";
    } else {
        echo "<script>alert('Update Failed!');</script>";
    }
}
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
    <h1>Hello, world!</h1>
    <form method="post">
            <div class="form-group">
                <label>Select Product Name</label>

                <select name="ProName" class="form-control" required>
                    <option value="product">Select Product ID</option>
                    <?php
                    require "DBConnect.php";
                    $productIds = mysqli_query($con, "SELECT ProName FROM productinfo");
                    while ($row = mysqli_fetch_assoc($productIds)) {
                    echo "<option value='{$row['ProName']}'>{$row['ProName']}</option>";
                    
                    }
                                   
                    
                    ?>
                </select>
            </div>
            <button type="submit" name="fetch" class="btn btn-info">Fetch Product</button>
        </form>



          <?php if ($product): ?>
            <!-- Form to update product details -->
            <form method="post" class="mt-4">
                
            <input type="hidden" name="ProName" value="<?= $product['ProName']; ?>">
                <div class="form-group">
                    <label>Available Qty</label>
                    <input type="text" name="AvlQty" class="form-control" value="<?= $product['ProQty']; ?>" disabled>
                </div>
                <div class="form-group">
                    <label>Buy Quantity</label>
                    <input type="text" name="BuyQty" class="form-control" placeholder="Enter Buy Amount" required>
                </div>
               
                <button type="submit" name="update" class="btn btn-primary">Buy Product</button>
            </form>
        <?php endif; ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    
</body>


</html>

