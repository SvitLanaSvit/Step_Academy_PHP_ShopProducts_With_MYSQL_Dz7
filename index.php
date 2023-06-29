<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">

    <style>
        html{
            background-image: url('/assert/back.jpg');
            background-size: cover;
            background-repeat: repeat;
            background-position: center center;
            height: 100%;
        }   
        
        a.nav-link:hover{
            background-color: #1979a9;
        }

        .container-fluid>div>.navbar {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1000;
        }

        .container{
            margin-top: 60px;
        }
        
    </style>
</head>
<body>
<div class="container-fluid">
        <div class="row">
            <header class="col-sm-12 col-md-12 col-lg-12">

            </header>
        </div>

        <div class="row">
            <nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color: #1979a9;">
                <div class="container-fluid">
                    <?include_once("pages/menu.php")?>
                </div>
            </nav>
        </div>

        <div class="row">
            <div class="container">
                <section class="col-sm-12 col-md-12 col-lg-12">
                    <?
                        if(isset($_GET["page"])){
                            $num = $_GET["page"];
                            switch ($num){
                                case '0':
                                    include_once("pages/home.php");
                                    break;
                                case '1':
                                    include_once("pages/addEditProduct.php");
                                    break;
                                case '2':
                                    include_once("pages/gallery.php");
                                    break;
                                default:
                                    echo "There is not this address.";
                            }
                        }
                    ?>
                </section>
            </div>
        </div>
    </div>
</body>
</html>