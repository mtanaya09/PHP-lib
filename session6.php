<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="session6.php" method="POST">
        Username: <input type="text" name="username"><br><br>
        Password: <input type="password" name="password"><br>
        <br>

        <input type="submit" name="submit" value="submit">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $maximum = 10;

        if (strlen($username) > 10) {
            echo "haba mo";
        } else {
            echo "$username <br> $password";
        }
    }
    ?>
</body>

</html>