## Step_Academy_PHP_ShopProducts_With_MYSQL_Dz7

### Description
````
The PHP-based program you provided is a product management system that allows users to add or edit products in a store database. Here's an updated description of the program, including the form for adding or editing products:

The program includes the following features:

1. Database Connection: The program establishes a connection to a MySQL database using the `mysqli_connect()` function. It connects to the database using the provided host, username, password, database name, and port.

2. Add/Edit Product Form:
   - Add New Product: When the user accesses the program, a form is displayed where they can enter the title and quantity of a new product. The form uses Bootstrap CSS classes for styling.
   - Edit Existing Product: If the program receives a product ID (`id`) parameter in the URL query string, it fetches the product information from the database using an SQL SELECT query. The retrieved data is then populated into the form, allowing the user to make changes to the product's title and quantity.

3. Product Data Processing:
   - On Submit: When the user submits the form by clicking the "Save" button, the program processes the entered data.
   - Edit Product: If the form indicates that the user wants to edit an existing product (`isEditProduct=1`), the program executes an SQL UPDATE query to modify the product's title and quantity in the database. It displays a success message and redirects the user to `index.php?page=2`.
   - Add New Product: If the product title entered in the form doesn't exist in the database, the program executes an SQL INSERT query to add the new product with the specified title and quantity. It displays a success message and redirects the user to `index.php?page=2`.
   - Update Existing Product: If the product title entered in the form already exists in the database, the program executes an SQL UPDATE query to increment the quantity of the existing product by the entered quantity value. It displays a success message and redirects the user to `index.php?page=2`.

4. User Interface: The program generates an HTML user interface with Bootstrap CSS classes for styling. The form is displayed within a container, and it includes input fields for the product title and quantity. The "Save" button submits the form data.

5. Feedback and Redirection: After performing a database operation (adding or editing a product), the program provides feedback to the user through JavaScript alert messages. It displays a success message indicating the result of the operation. Additionally, it redirects the user to the `index.php?page=2` page after a short delay, allowing them to continue using the program.

It's worth noting that the provided code snippet contains some minor syntax errors, such as the misspelled `allert()` function. Please make sure to correct any such errors before running the program. Additionally, consider implementing further enhancements like input validation, error handling, and sanitization to ensure the security and stability of the program.
````
![1](https://github.com/SvitLanaSvit/Step_Academy_PHP_ShopProducts_With_MYSQL_Dz7/blob/main/assert/1.jpg)
![2](https://github.com/SvitLanaSvit/Step_Academy_PHP_ShopProducts_With_MYSQL_Dz7/blob/main/assert/2.jpg)
![3](https://github.com/SvitLanaSvit/Step_Academy_PHP_ShopProducts_With_MYSQL_Dz7/blob/main/assert/3.jpg)
![4](https://github.com/SvitLanaSvit/Step_Academy_PHP_ShopProducts_With_MYSQL_Dz7/blob/main/assert/4.jpg)
![5](https://github.com/SvitLanaSvit/Step_Academy_PHP_ShopProducts_With_MYSQL_Dz7/blob/main/assert/5.jpg)
![6](https://github.com/SvitLanaSvit/Step_Academy_PHP_ShopProducts_With_MYSQL_Dz7/blob/main/assert/6.jpg)
![7](https://github.com/SvitLanaSvit/Step_Academy_PHP_ShopProducts_With_MYSQL_Dz7/blob/main/assert/7.jpg)
![8](https://github.com/SvitLanaSvit/Step_Academy_PHP_ShopProducts_With_MYSQL_Dz7/blob/main/assert/8.jpg)
![9](https://github.com/SvitLanaSvit/Step_Academy_PHP_ShopProducts_With_MYSQL_Dz7/blob/main/assert/9.jpg)
![10](https://github.com/SvitLanaSvit/Step_Academy_PHP_ShopProducts_With_MYSQL_Dz7/blob/main/assert/10.jpg)
![11](https://github.com/SvitLanaSvit/Step_Academy_PHP_ShopProducts_With_MYSQL_Dz7/blob/main/assert/11.jpg)
![12](https://github.com/SvitLanaSvit/Step_Academy_PHP_ShopProducts_With_MYSQL_Dz7/blob/main/assert/12.jpg)
![13](https://github.com/SvitLanaSvit/Step_Academy_PHP_ShopProducts_With_MYSQL_Dz7/blob/main/assert/13.jpg)
![14](https://github.com/SvitLanaSvit/Step_Academy_PHP_ShopProducts_With_MYSQL_Dz7/blob/main/assert/14.jpg)
![15](https://github.com/SvitLanaSvit/Step_Academy_PHP_ShopProducts_With_MYSQL_Dz7/blob/main/assert/15.jpg)
![16](https://github.com/SvitLanaSvit/Step_Academy_PHP_ShopProducts_With_MYSQL_Dz7/blob/main/assert/16.jpg)
