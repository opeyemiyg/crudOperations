<?php
include 'connect.php';
include 'header.php';
$id = $_GET['updateid'];
$sql = "SELECT *  FROM `crudtable` WHERE id=$id";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
echo $row['name'];
$name = $row['name'];
$category = $row['category'];
// $image = $row['image'];
$price = $row['price'];
$count = $row['count'];


if (isset($_POST['update'])) {

    $name = $_POST['name'];
    $category = $_POST['category'];
    // $image = $_POST['image'];
    $count = $_POST['count'];
    $price = $_POST['price'] * (int)$count;
    $sql = "UPDATE `crudtable` SET id=$id, name='$name', category='$category',
    count='$count',price='$price' WHERE id =$id";
    $result = mysqli_query($con, $sql);
    if ($result) {
        header('location:display.php');
    } else {
        die(mysqli_error($con));
    }
}


?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>CRUD Operations</title>
</head>

<body>


    <div class="container my-5">
        <form method="post">
            <div class="mb-3">
                <label>Name</label>
                <input type="text" class="form-control" placeholder="Enter your name" name="name" autocomplete="off">
            </div>
            <div class="mb-3">
                <label>Category</label>
                <input type="category" class="form-control" placeholder="Enter the item category" name="category"
                    autocomplete="off">
            </div>
            <div class="mb-3">
                <label>Price</label>
                <input type="text" class="form-control" placeholder="Enter Price" name="price" autocomplete="off">
            </div>
            <div class="mb-3">
                <label>Quantity</label>
                <input type="number" class="form-control col-auto" name="count">

            </div>
            <button type="submit" class="btn btn-primary" name="update">Update</button>
        </form>
    </div>


</body>

</html>