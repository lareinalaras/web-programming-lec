<!DOCTYPE html>
<html lang="en">

<head>
    <title>Perpustakaan Bina Nusantara University</title>
</head>

<body>
<body style="background-color:lightGrey;">

    <center>
        
        <div style="width: 650px; margin-top: 100px;">
            <div style="background-color: white;">

        <h1>Storing Book Loan Form Data to Database</h1>
        <form action="insert.php" method="post">
            <p>
                <label for="name_student">Name:</label>
                <input type="text" name="name_student" id="name_student">
            </p>
            <p>
                <label for="borrow_date">Date:</label>
                <input type="text" name="borrow_date" id="borrow_date">
            </p>
            <p>
                <label for="id_card">ID Card Number:</label>
                <input type="text" name="id_card" id="id_card">
            </p>
            <p>
                <label for="book_title">Name of Book:</label>
                <input type="text" name="book_title" id="book_title">
            </p>
            <input type="submit" value="Submit">
        </form>
    </center>
</body>
</html>

