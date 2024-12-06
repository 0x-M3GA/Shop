<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My cart</title>
    <style>
        h3 {
            font-family: 'Cairo', sans-serif;
            font-weight: bold;
        }

        main {
            width: 40%;
            margin-top: 30px;
        }

        table {
            box-shadow: 1px 1px 10px silver;
        }

        table thead {
            background-color: burlywood !important;
            color: white !important;
            text-align: center !important;
        }

        tbody {
            text-align: center;
        }
    </style>
</head>

<body>

    <center>
        <h3> Selected Items</h3>
    </center>

    <?php

    include('config.php');
    $result = mysqli_query($con, "SELECT * FROM addcard");
    while ($row = mysqli_fetch_array($result)) {
        echo "
            <center>
                <main>
                    <table class='table'>
                        <thead style='background-color: burlywood; color: white; text-align: center;'>
                            <tr>
                                <th scope='col'>Product Name</th>
                                <th scope='col'>Product Price</th>
                                <th scope='col'>Delete Product</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{$row['name']}</td>
                                <td>{$row['price']}</td>
                                <td><a href='del_card.php? id=$row[id]' class='btn btn-danger'>Delete</a></td>
                            </tr>
                        </tbody>
                    </table>
                </main>
            </center>
            ";}?>

            <center>
                <a href="shop.php">Back to Products</a>
            </center>

</body>

</html>