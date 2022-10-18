<?php

require('config.php');


$name_student =  $_REQUEST['name_student'];
$borrow_date = $_REQUEST['borrow_date'];
$id_card =  $_REQUEST['id_card'];
$book_title = $_REQUEST['book_title'];

$sql = "INSERT INTO perpustakaan 
            VALUES ('$name_student',
            '$borrow_date',
            '$id_card',
            '$book_title')";

if (mysqli_query($conn, $sql)) {
    echo "<h2>Data Stored Successfully!</h2>";
    header('Location: select.php');
} else {
    echo "Error. $sql. "
        . mysqli_error($conn);
}





mysqli_close($conn);