<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Gallery</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <style>
        body {
            background-color: transparent;
        }

        .container>form>.table>thead>tr>th, .container>form>.table>tbody>tr>td{
            background-color: transparent;
        }
    </style>
</head>
<body>
    <?
        $link = mysqli_connect("localhost", "root", "", "shopdb", 3307);
        $queryText = "SELECT * FROM products";
        $res = mysqli_query($link, $queryText);
        if(mysqli_num_rows($res) > 0){
    ?>
    <div class="container">
            <form method="post">
                <table class="table table-stripped">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Title</th>
                            <th>Quantity</th>
                            <th>Delete</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?
                            while($row = mysqli_fetch_array($res)){
                                $productId = $row['Id'];
                                $title = $row['Title'];
                                $quantity = $row['Quantity'];

                                echo "<tr>";
                                echo "<td>$productId</td>";
                                echo "<td>$title</td>";
                                echo "<td>$quantity</td>";
                                echo "<td><input type='checkbox' name='selectedProducts[]' value='$productId'></input></td>";
                                echo "<td><a href='index.php?page=1&id=$productId' class='btn btn-outline-warning'>Edit</a></td>";
                                echo "</tr>";
                            }
                        ?>
                    </tbody>
                </table>
                <button type="submit" name="delete" class="btn btn-outline-danger">Delete</button>
            </form>
    </div>
    <?
        }
        else{
            echo "<script>alert('No products found in the database.')</script>";
        }

        if(isset($_POST['delete'])){
            if(isset($_POST['selectedProducts'])){
                $selectedProducts = $_POST['selectedProducts'];

                foreach($selectedProducts as $productId){
                    $queryDelete = "DELETE FROM products WHERE Id = $productId";
                    mysqli_query($link, $queryDelete);
                }

                echo "<script>alert('Selected products have been deleted.')</script>";
                echo "<script>setTimeout(() =>{
                            location = 'index.php?page=2'
                        }, 10)</script>";
            }
            else{
                echo "<script>alert('No products selected for deletion.')</script>";
                echo "<script>setTimeout(() =>{
                            location = 'index.php?page=2'
                        }, 10)</script>";
            }
        }

        mysqli_close($link);
    ?>
</body>
</html>