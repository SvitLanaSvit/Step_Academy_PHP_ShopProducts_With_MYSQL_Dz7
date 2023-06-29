<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <style>
        body{
            background-color: transparent;
        }

        .container>p{
            text-align: justify;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        /* .container{
            margin-top: 60px;
        } */

        h2{
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Description about programm</h2>
        <p>
            The PHP-based program you provided is a product management system that allows users to add or edit products in a store database. Here's an updated description of the program, including the form for adding or editing products:
        </p>
        
        <p>
            The program includes the following features:
        </p>

        <p>
            1. Database Connection: The program establishes a connection to a MySQL database using the `mysqli_connect()` function. It connects to the database using the provided host, username, password, database name, and port.
        </p>

        <p>
            2. Add/Edit Product Form:
        </p>
        <p>
            - Add New Product: When the user accesses the program, a form is displayed where they can enter the title and quantity of a new product. The form uses Bootstrap CSS classes for styling.
        </p>
        <p>
            - Edit Existing Product: If the program receives a product ID (`id`) parameter in the URL query string, it fetches the product information from the database using an SQL SELECT query. The retrieved data is then populated into the form, allowing the user to make changes to the product's title and quantity.
        </p>
        <p>
            3. Product Data Processing:
        </p>
        <p>
            - On Submit: When the user submits the form by clicking the "Save" button, the program processes the entered data.
        </p>
        <p>
            - Edit Product: If the form indicates that the user wants to edit an existing product (`isEditProduct=1`), the program executes an SQL UPDATE query to modify the product's title and quantity in the database. It displays a success message and redirects the user to `index.php?page=2`.
        </p>
        <p>
            - Add New Product: If the product title entered in the form doesn't exist in the database, the program executes an SQL INSERT query to add the new product with the specified title and quantity. It displays a success message and redirects the user to `index.php?page=2`.
        </p>
        <p>
            - Update Existing Product: If the product title entered in the form already exists in the database, the program executes an SQL UPDATE query to increment the quantity of the existing product by the entered quantity value. It displays a success message and redirects the user to `index.php?page=2`.
        </p>

        <p>
            4. User Interface: The program generates an HTML user interface with Bootstrap CSS classes for styling. The form is displayed within a container, and it includes input fields for the product title and quantity. The "Save" button submits the form data.
        </p>

        <p>
            5. Feedback and Redirection: After performing a database operation (adding or editing a product), the program provides feedback to the user through JavaScript alert messages. It displays a success message indicating the result of the operation. Additionally, it redirects the user to the `index.php?page=2` page after a short delay, allowing them to continue using the program.
        </p>

        <p>
            It's worth noting that the provided code snippet contains some minor syntax errors, such as the misspelled `allert()` function. Please make sure to correct any such errors before running the program. Additionally, consider implementing further enhancements like input validation, error handling, and sanitization to ensure the security and stability of the program.
        </p>
        
    </div>
</body>
</html>