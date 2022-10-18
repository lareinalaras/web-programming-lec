<?php

require('config.php');

$name_student = $_GET['name_student'];

$sql = "DELETE FROM perpustakaan WHERE name_student='$name_student'";

if (mysqli_query($conn, $sql)) {

    header('Location: index.php');
} else {
    echo "Error. $sql. "
        . mysqli_error($conn);
}
?>