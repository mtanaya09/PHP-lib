<?php

function showAllData()
{
    $connection = mysqli_connect('localhost', 'root', '', 'loginapp');
    $query = "SELECT * FROM users";
    $result = mysqli_query($connection, $query);
    if (!$result) {
        die('Query FAILED');
    }

    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        echo "<option value='$id'>$id</option>";
    }
}
