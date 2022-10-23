    <?php

    $connection = mysqli_connect('localhost', 'root', '', 'loginapp');

    if ($connection) {
        echo "connected to DB";
    } else {
        die("Error db connection");
    }

    $query = "SELECT * FROM users";

    $result = mysqli_query($connection, $query);

    if (!$result) {
        die('Query FAILED');
    }

    ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <title>Document</title>
    </head>

    <body>

        <div class="container">
            <div class="col-sm-6">

                <?php
                while ($row = mysqli_fetch_assoc($result)) {

                ?>

                    <pre>

                    <?php
                    print_r($row);
                    ?>
                    
                    </pre>
                <?php


                }
                ?>



            </div>
        </div>

    </body>

    </html>