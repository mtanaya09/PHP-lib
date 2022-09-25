<?php
if (isset($_REQUEST['name']) || isset($_POST['age'])) {
    echo "Name is " . $_REQUEST['name'] . "<br/>";
    echo "Your age is " . $_POST['age'];
    exit();
}
?>

<html>

<body>
    <form action="<?php $_PHP_SELF ?>" method="POST">
        Name: <input type="text" name="name" />
        Age: <input type="text" name="age" />
        <input type="submit" />
</body>

</html>