<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <style>
        body {
            background-color: transparent;
        }
    </style>
</head>
<body>
    <?php
        $link = mysqli_connect("localhost", "root", "", "shopdb", 3307);
        $isEditProduct = 0;
        $productIdToEdit = '';
        $title = '';
        $quantity = '';

        if(!isset($_POST['submit'])){
            if(isset($_GET['id'])){
                $isEditProduct = 1;
                $productId = $_GET['id'];
                $queryById = "SELECT * FROM products WHERE Id=$productId";
                $res = mysqli_query($link, $queryById);

                if(mysqli_num_rows($res) > 0){
                    $row = mysqli_fetch_array($res);
                    $productIdToEdit = $row['Id'];
                    $title = $row['Title'];
                    $quantity = $row['Quantity'];
                }
                else{
                    echo "<script>alert('Product not found.')</script>";
                }
            }
                ?>
                    <div class="container">
                        <form method="POST">
                            <div class="mb-3 w-25">
                                <input type="hidden" name="productIdToEdit" value="<?echo $productIdToEdit?>">
                                <label for="title">Title:</label>
                                <input type="text" class="form-control" id="title" name="title" placeholder="Enter the title" value="<?echo $title?>" required>
                            </div>
            
                            <div class="mb-3 w-25">
                                <label for="quantity">Quantity:</label>
                                <input type="number" class="form-control" id="quantity" name="quantity" value="<?echo $quantity?>" required>
                            </div>

                            <input type="hidden" name="isEditProduct" value="<?echo $isEditProduct?>">
            
                            <div class="btn-group">
                                <button type="submit" name="submit" class="btn btn-primary">Save</button>
                            </div>
                        </form>
                    </div>
                <?php
        }
        else{
            $title = $_POST['title'];
            $quantity = $_POST['quantity'];
            $isExistsProductBySQL = false;
            $isEditProduct = $_POST['isEditProduct'];
            $productIdToEdit = $_POST['productIdToEdit'];

            if($isEditProduct == 1){
                $queryEdit = "UPDATE products SET Title = '$title', Quantity = $quantity WHERE Id = $productIdToEdit";
                mysqli_query($link, $queryEdit);
                echo "<script>alert('The product was edited!')</script>";
                echo "<script>setTimeout(() => {
                            location = 'index.php?page=2'
                        }, 10)</script>";
            }
            else{
                $queryText = "SELECT * FROM products";
                $res = mysqli_query($link, $queryText);

                while($row = mysqli_fetch_array($res)){
                    if($row['Title'] == $title){
                        $isExistsProductBySQL = true;
                        break;
                    }
                }

                if($isExistsProductBySQL){
                    $queryUpdate = "UPDATE products SET Quantity = Quantity + $quantity where Title = '$title'";
                    mysqli_query($link, $queryUpdate);
                    echo "<script>alert('The product was updated!')</script>";
                    echo "<script>setTimeout(() => {
                                location = 'index.php?page=2'
                            }, 10)</script>";
                }
                else{
                    $queryAdd = "INSERT INTO `products`(`Title`, `Quantity`)Values('$title', $quantity)";
                    mysqli_query($link, $queryAdd);
                    echo "<script>alert('The product was added!')</script>";
                    echo "<script>setTimeout(() => {
                                location = 'index.php?page=2'
                            }, 10)</script>";
                }
            }
                        
            mysqli_close($link);
        }
    ?>
</body>
</html>