<?php
include 'connect.php';
include 'header.php';
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Operations</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>
    <div class="container">
        <button type="add" class="btn btn-primary my-5" name="add">
            <a href="user.php" class="text-light ">Add Item</a>



        </button>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Unique id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Category</th>
                    <th scope="col">Total Price</th>
                    <th scope="col">Count</th>
                    <th scope="col">Image</th>
                    <th scope="col">Operations</th>
                </tr>
            </thead>
            <tbody>

                <?php
                $sql = "SELECT * FROM `crudtable`";
                $result = mysqli_query($con, $sql);
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row['id'];
                        $name = $row['name'];
                        $category = $row['category'];
                        $price = $row['price'];
                        $image = $row['image'];
                        $count = $row['count'];
                        echo '<tr>
                            <th scope="row">' . $id . '</th>
                            <td>' . $name . '</td>
                            <td>' . $category . '</td>
                            <td>' . $price . '</td>
                            <td>' . $count . '</td>
                            <td>' . $image . '</td>
                            <td>
                            <button class="btn btn-primary"><a href="update.php?updateid=' . $id . '"  class="text-light ">Update</a> </button>
                            <button class="btn btn-primary"><a href="delete.php?deleteid=' . $id . ' " class="text-light ">Delete</a></button>
                            

                           
                
                        </td>
                        </tr>';
                    }
                }


                ?>


        </table>

    </div>
</body>

</html>