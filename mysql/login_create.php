    <?php

    if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $connection = mysqli_connect('localhost', 'root', '', 'loginapp');

        if ($connection) {
            echo "connected to DB";
        } else {
            die("Error db connection");
        }

        $query = "INSERT INTO users(username,password)";
        $query .= "VALUES ('$username', '$password')";

        $result = mysqli_query($connection, $query);

        if (!$result) {
            die('Query FAILED');
        }


        // if ($username && $password) {
        //     echo "$username <br>";
        //     echo "$password <br>";
        // }else{
        //     echo "missing something";
        // }
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
                <form action="login_create.php" method="post">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" name="username" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control">
                    </div>

                    <input class="btn btn-primary" type="submit" name="submit" submit="Submit">

                </form>
            </div>
        </div>

    </body>

    </html>