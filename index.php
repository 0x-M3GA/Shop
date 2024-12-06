<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online shop | Add products</title>
    <link rel="stylesheet" href="index.css">
</head>

<body>
    <center>
        <div class="main">
            <form action="insert.php" method="post" enctype="multipart/form-data">
                    <h2> An online Shopping </h2>
                    <img src="Shopping.png" alt="logo" width="200px" >
                    <input type="text" name='name'>
                    <br>
                    <input type="text" name='price'>
                    <br>
                    <input type="file" id="file" name='image' style='display:none;'> 
                    <label for="file"> Select image for the product </label>
                    <button name='upload'> Upload Products</button>
                    <br><br>
                    <a href="products.php">Show all products</a>
            </form>
        </div>
        <p> Developed By Ahmed Essam</p>
    </center>
</body>

</html> 