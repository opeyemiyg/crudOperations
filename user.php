<?php
include 'connect.php';
include 'header.php';
if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $category = $_POST['category'];
    // $image = $_POST['image'];
    $count = $_POST['count'];
    $price = $_POST['price'] * (int)$count;
    $sql = "INSERT INTO `crudtable` ( name,category,count,price) values('$name','$category','$count','$price')";
    $result = mysqli_query($con, $sql);
    if ($result) {
        header('location:display.php');
    } else {
        die(mysqli_error($con));
    }
}
if (isset($_POST['upload'])) {
    print_r($_FILES['itemImg']);
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
        <form method="post" enctype="multipart/form-data">
            <div class=" mb-3">
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
            <div class="mb-3">
                <label>Upload item image</label>
                <input type="file" class="form-control col-auto" name="itemImg">
                <input type="submit" class="form-control col-auto" name="upload" value="Upload">

            </div>


            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>


</body>

</html>