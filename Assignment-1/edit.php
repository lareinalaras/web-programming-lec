<?php

include_once("config.php");

if (isset($_POST['update'])) {
    $name_student =  $_REQUEST['name_student'];
    $borrow_date = $_REQUEST['borrow_date'];
    $id_card =  $_REQUEST['id_card'];
    $book_title = $_REQUEST['book_title'];

    //update
    $result = mysqli_query($conn, "UPDATE perpustakaan SET name_student='$name_student', borrow_date='$borrow_date',book_title='$book_title' WHERE id_card='$id_card'");

    // Redirect to homepage to display updated student in list
    header("Location: select.php");
}
?>
<?php

// Display selected student data based on id card

$id_card = $_GET['id_card'];

// Fetech student data based on id
$result = mysqli_query($conn, "SELECT * FROM perpustakaan WHERE id_card='$id_card'");

while ($row = mysqli_fetch_array($result)) {
    $name_student = $row['name_student'];
    $borrow_date = $row['borrow_date'];
    $id_card = $row['id_card'];
    $book_title = $row['book_title'];
}
?>
<html>

<head>
    <title>Edit Student Data</title>
</head>

<body>
    <center>
        <a href="select.php">Home</a>
        <br /><br />

        <form name="update_student" method="post" action="edit.php">
            <table border="0">
                <tr>
                    <td>Name</td>
                    <td><input type="text" name="name_student" value=<?php echo $name_student; ?>></td>
                </tr>
                <tr>
                    <td>Date</td>
                    <td><input type="text" name="borrow_date" value=<?php echo $borrow_date; ?>></td>
                </tr>
                <tr>
                    <td>ID Card Number</td>
                    <td><input type="text" name="id_card" value=<?php echo $id_card; ?>></td>
                </tr>
                <tr>
                    <td><input type="hidden" name="book_title" value=<?php echo $_GET['book_title']; ?>></td>
                    <td><input type="submit" name="update" value="Update"></td>
                </tr>
            </table>
        </form>
    </center>
</body>

</html>